<?php
/**
 * @see block_flexpagenav_lib_link_abstract
 */
require_once($CFG->dirroot.'/blocks/flexpagenav/lib/link/abstract.php');

/**
 * Trouble Ticket Link
 *
 * @author Mark Nielsen
 * @package block_flexpagenav
 */
class block_flexpagenav_lib_link_ticket extends block_flexpagenav_lib_link_abstract {
    /**
     * @return moodle_url
     */
    protected function get_url() {
        global $COURSE;

        return new moodle_url('/blocks/trouble_ticket/ticket.php', array(
            'id' => $COURSE->id,
            'subject' => $this->get_link()->get_config('subject')
        ));
    }

    public function get_info() {
        return html_writer::link($this->get_url(), $this->get_link()->get_config('label'));
    }

    public function handle_form() {
        $this->get_link()->set_config('label', required_param('label', PARAM_TEXT))
                         ->set_config('subject', optional_param('subject', '', PARAM_TEXT));
    }

    public function edit_form(moodle_url $submiturl) {
        $box = new course_format_flexpage_lib_box(array('class' => 'format_flexpage_form'));

        $box->add_new_row()->add_new_cell(html_writer::label(get_string('label', 'block_flexpagenav'), 'id_label'))
                           ->add_new_cell(html_writer::empty_tag('input', array('id' => 'id_label', 'name' => 'label', 'type' => 'text', 'size' => 50, 'value' => $this->get_link()->get_config('label'))));

        $box->add_new_row()->add_new_cell(html_writer::label(get_string('subject', 'block_flexpagenav'), 'id_subject'))
                           ->add_new_cell(html_writer::empty_tag('input', array('id' => 'id_subject', 'name' => 'subject', 'type' => 'text', 'size' => 50, 'value' => $this->get_link()->get_config('subject'))));

        return $this->get_renderer()->form_wrapper($submiturl, $box);
    }

    public function add_nodes(navigation_node $root) {
        $root->add($this->get_link()->get_config('label'), $this->get_url(), navigation_node::TYPE_CUSTOM, null, 'ticket_'.$this->get_link()->get_id());
    }
}