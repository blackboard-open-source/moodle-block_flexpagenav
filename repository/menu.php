<?php
/**
 * @see block_flexpagenav_model_menu
 */
require_once($CFG->dirroot.'/blocks/flexpagenav/model/menu.php');

/**
 * Repository mapper for block_flexpagenav_model_menu
 *
 * @author Mark Nielsen
 * @package block_flexpagenav
 */
class block_flexpagenav_repository_menu {

    protected function to_model(stdClass $data) {
        $menu = new block_flexpagenav_model_menu();

        return $menu->set_id($data->id)
                    ->set_couseid($data->courseid)
                    ->set_name($data->name)
                    ->set_render($data->render)
                    ->set_displayname($data->displayname)
                    ->set_useastab($data->useastab);
    }

    /**
     * @param int $id
     * @return block_flexpagenav_model_menu
     */
    public function get_menu($id) {
        global $DB;

        return $this->to_model(
            $DB->get_record('block_flexpagenav_menu', array('id' => $id), '*', MUST_EXIST)
        );
    }

    /**
     * @param int $courseid
     * @param string $sort
     * @return block_flexpagenav_model_menu[]
     */
    public function get_course_menus($courseid, $sort = 'name') {
        global $DB;

        $menus   = array();
        $records = $DB->get_recordset('block_flexpagenav_menu', array('courseid' => $courseid), $sort);
        foreach ($records as $record) {
            $menus[$record->id] = $this->to_model($record);
        }
        $records->close();

        return $menus;
    }

    /**
     * @param block_flexpagenav_model_menu $menu
     * @return block_flexpagenav_repository_menu
     */
    public function save_menu(block_flexpagenav_model_menu $menu) {
        global $DB;

        $record = array(
            'courseid' => $menu->get_couseid(),
            'name' => $menu->get_name(),
            'render' => $menu->get_render(),
            'displayname' => $menu->get_displayname(),
            'useastab' => $menu->get_useastab(),
        );

        $id = $menu->get_id();
        if (!empty($id)) {
            $record['id'] = $id;
            $DB->update_record('block_flexpagenav_menu', $record);
        } else {
            $menu->set_id(
                $DB->insert_record('block_flexpagenav_menu', $record)
            );
        }
        // Only one can have this flag
        if ($menu->get_useastab()) {
            $DB->set_field_select('block_flexpagenav_menu', 'useastab', 0, 'id != ? AND courseid = ?', array($menu->get_id(), $menu->get_couseid()));
        }
        return $this;
    }
}