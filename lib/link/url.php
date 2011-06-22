<?php
/**
 * @see block_flexpagenav_lib_link_abstract
 */
require_once($CFG->dirroot.'/blocks/flexpagenav/lib/link/abstract.php');

/**
 * URL Link
 *
 * @author Mark Nielsen
 * @package block_flexpagenav
 */
class block_flexpagenav_lib_link_url extends block_flexpagenav_lib_link_abstract {

    public function get_info() {
        return html_writer::link($this->get_link()->get_config('url'), $this->get_link()->get_config('label'));
    }

    public function handle_form() {
        $this->get_link()->set_config('label', required_param('label', PARAM_TEXT))
                         ->set_config('url', required_param('url', PARAM_URL));
    }

    public function edit_form(moodle_url $submiturl) {
        $box = new course_format_flexpage_lib_box(array('class' => 'format_flexpage_form'));

        $box->add_new_row()->add_new_cell(html_writer::label(get_string('label', 'block_flexpagenav'), 'id_label'))
                           ->add_new_cell(html_writer::empty_tag('input', array('id' => 'id_label', 'name' => 'label', 'type' => 'text', 'size' => 50, 'value' => $this->get_link()->get_config('label'))));

        $box->add_new_row()->add_new_cell(html_writer::label(get_string('url', 'block_flexpagenav'), 'id_url'))
                           ->add_new_cell(html_writer::empty_tag('input', array('id' => 'id_url', 'name' => 'url', 'type' => 'text', 'size' => 50, 'value' => $this->get_link()->get_config('url'))));

        return $this->get_renderer()->form_wrapper($submiturl, $box);
    }

    public function add_nodes(navigation_node_collection $collection) {
        $collection->add(new navigation_node(array(
            'key'    => $this->get_link()->get_id(),
            'text'   => $this->get_link()->get_config('label'),
            'action' => $this->get_link()->get_config('url'),
        )));
    }
}