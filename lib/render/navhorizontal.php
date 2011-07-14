<?php
/**
 * @see block_flexpagenav_lib_render_abstract
 */
require_once($CFG->dirroot.'/blocks/flexpagenav/lib/render/abstract.php');

/**
 * Menu Render Horizontal Navigation Bar
 *
 * This code is inspired from custom_menu code
 *
 * @author Mark Nielsen
 * @package block_flexpagenav
 */
class block_flexpagenav_lib_render_navhorizontal extends block_flexpagenav_lib_render_abstract {

    public function output() {
        global $PAGE;

        $content = $this->to_html($this->root->children);
        if (!empty($content)) {
            $id = html_writer::random_id();

            $PAGE->requires->js_init_call('M.core_custom_menu.init', array($id));

            $content = html_writer::start_tag('div', array('id' => 'custommenu')).
                       html_writer::start_tag('div', array('id' => $id, 'class' => 'yui3-menu yui3-menu-horizontal javascript-disabled')).
                       html_writer::tag('div', html_writer::tag('ul', $content), array('class' => 'yui3-menu-content')).
                       html_writer::end_tag('div').
                       html_writer::end_tag('div');
        }
        return $content;
    }

    /**
     * @param navigation_node_collection $nodes
     * @return string
     */
    protected function to_html(navigation_node_collection $nodes) {
        $content = '';
        foreach ($nodes as $node) {
            /** @var $node navigation_node */
            if (!$node->display) {
                continue;
            }
            if ($node->hidden) {
                $linkclass = ' dimmed_text';
            } else {
                $linkclass = '';
            }
            if ($node->children->count()) {
                // If the child has menus render it as a sub menu
                $content .= html_writer::start_tag('li');
                $content .= html_writer::link($node->action, $node->text, array('class' => "yui3-menu-label$linkclass", 'title' => $node->title));
                $content .= html_writer::start_tag('div', array('id' => html_writer::random_id(), 'class' => 'yui3-menu custom_menu_submenu'));
                $content .= html_writer::tag('div', html_writer::tag('ul', $this->to_html($node->children)), array('class'=>'yui3-menu-content'));
                $content .= html_writer::end_tag('div');
                $content .= html_writer::end_tag('li');
            } else {
                // The node doesn't have children so produce a final menuitem
                $content .= html_writer::start_tag('li', array('class' => 'yui3-menuitem'));
                $content .= html_writer::link($node->action, $node->text, array('class' => "yui3-menuitem-content$linkclass", 'title' => $node->title));
                $content .= html_writer::end_tag('li');
            }
        }
        return $content;
    }
}