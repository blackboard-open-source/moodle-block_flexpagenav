<?php
/**
 * @see block_flexpagenav_lib_render_navhorizontal
 */
require_once($CFG->dirroot.'/blocks/flexpagenav/lib/render/navhorizontal.php');

/**
 * Menu Render Vertical Navigation Bar
 *
 * @author Mark Nielsen
 * @package block_flexpagenav
 * @todo This currently doesn't work because the left column has overflow hidden, so fly out menus are "covered"
 */
class block_flexpagenav_lib_render_navvertical extends block_flexpagenav_lib_render_navhorizontal {

    public function output() {
        global $PAGE;

        $content = $this->to_html($this->collection);
        if (!empty($content)) {
            $id = html_writer::random_id();

            $PAGE->requires->js_init_call('M.core_custom_menu.init', array($id));

            $content = html_writer::start_tag('div', array('id' => $id, 'class' => 'yui3-menu javascript-disabled')).
                       html_writer::tag('div', html_writer::tag('ul', $content), array('class' => 'yui3-menu-content')).
                       html_writer::end_tag('div');
        }
        return $content;
    }
}