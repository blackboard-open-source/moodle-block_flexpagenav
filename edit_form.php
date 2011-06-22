<?php
/**
 * @see block_flexpagenav_repository_menu
 */
require_once($CFG->dirroot.'/blocks/flexpagenav/repository/menu.php');

/**
 * Block instance editing form
 *
 * @author Mark Nielsen
 * @package block_flexpagenav
 */
class block_flexpagenav_edit_form extends block_edit_form {
    /**
     * Add block specific configuration elements
     *
     * @param MoodleQuickForm $mform
     */
    protected function specific_definition($mform) {
        global $COURSE;

        $repo    = new block_flexpagenav_repository_menu();
        $menus   = $repo->get_course_menus($COURSE->id);
        $options = array();
        foreach ($menus as $menu) {
            $options[$menu->get_id()] = format_string($menu->get_name());
        }
        $mform->addElement('header', 'configheader', get_string('blocksettings', 'block'));
        $mform->addElement('select', 'config_menuid', get_string('displaymenu', 'block_flexpagenav'), $options);
    }
}