<?php
/**
 * @see block_flexpagenav_lib_render_abstract
 */
require_once($CFG->dirroot.'/blocks/flexpagenav/lib/render/abstract.php');

/**
 * Menu Render Select
 *
 * @author Mark Nielsen
 * @package block_flexpagenav
 */
class block_flexpagenav_lib_render_select extends block_flexpagenav_lib_render_abstract {

    public function output() {
        $content = $this->to_html($this->collection);
        if (!empty($content)) {
            $content = $this->renderer->box($content, 'block_flexpagenav_dropdown_box', html_writer::random_id());
        }
        return $content;
    }

    /**
     * @param navigation_node_collection $collection
     * @return string
     */
    protected function to_html(navigation_node_collection $collection) {
        $children = array();
        $options  = array();
        $selected = null;
        foreach ($collection as $node) {
            /** @var $node navigation_node */
            if (!$node->display) {
                continue;
            }
            $options[$node->action->out(true)] = $node->text;

            if ($node->isactive and is_null($selected)) {
                $selected   = $node->action->out(true);
                $children[] = $this->to_html($node->children);
            }
        }
        if (!empty($options)) {
            // Have to write our own url_select because url_select only allows relative URLs
            $selectid = html_writer::random_id('url_select');
            $output   = html_writer::empty_tag('input', array('type'=>'hidden', 'name'=>'sesskey', 'value'=>sesskey()));
            $output  .= html_writer::select($options, 'jump', $selected, array('' => 'choosedots'), array('id' => $selectid));
            $go       = html_writer::empty_tag('input', array('type'=>'submit', 'value'=>get_string('go')));
            $output  .= html_writer::tag('noscript', html_writer::tag('div', $go), array('style'=>'inline'));
            $output   = html_writer::tag('div', $output);
            $output   = html_writer::tag('form', $output, array(
                'method' => 'post',
                'action' => new moodle_url('/course/jumpto.php'),
                'id'     => html_writer::random_id('url_select_f')
            ));
            $output  = html_writer::tag('div', $output, array('class' => 'url_select'));
            $output .= html_writer::script("
                YUI(M.yui.loader).use('node', function(Y) {
                    Y.one('#$selectid').on('change', function(e) {
                        if (e.target.get('value') != '') {
                            window.location = e.target.get('value');
                        }
                    });
                });
            ");

            if (!empty($children)) {
                $output .= "<br /><br />\n".implode("<br /><br />\n", $children);
            }
            return $output;
        }
        return '';
    }
}