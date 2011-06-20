<?php
/**
 * @see block_flexpagenav_repository_menu
 */
require_once($CFG->dirroot.'/blocks/flexpagenav/repository/menu.php');

/**
 * AJAX Controller
 *
 * @author Mark Nielsen
 * @package block_flexpagenav
 */
class block_flexpagenav_controller_ajax extends mr_controller {
    /**
     * Since this handles AJAX, set our own exception handler
     *
     * @return void
     */
    protected function init() {
        set_exception_handler(array($this, 'exception_handler'));
    }

    public function require_capability() {
        require_capability('block/flexpagenav:manage', $this->get_context());
    }

    /**
     * Set's errors through mr_notify
     *
     * @param Exception $e
     * @return void
     */
    public function exception_handler($e) {
        $this->notify->bad('ajaxexception', $e->getMessage());

        if (debugging('', DEBUG_DEVELOPER)) {
            $this->notify->add_string(format_backtrace(get_exception_info($e)->backtrace));
        }
    }

    /**
     * Mange menus modal
     */
    public function managemenus_action() {
        global $COURSE;

        $repo = new block_flexpagenav_repository_menu();

        echo json_encode((object) array(
            'args'   => (object) array('addurl' => $this->new_url(array('action' => 'editmenu'))->out(false)),
            'header' => get_string('managemenus', 'block_flexpagenav'),
            'body'   => $this->output->manage_menus(
                $this->new_url(),
                $repo->get_course_menus($COURSE->id)
            ),
        ));
    }

    /**
     * Edit menu modal
     */
    public function editmenu_action() {
        global $COURSE;

        $menuid = optional_param('menuid', 0, PARAM_INT);

        $repo = new block_flexpagenav_repository_menu();

        if (!empty($menuid)) {
            $menu = $repo->get_menu($menuid);
        } else {
            $menu = new block_flexpagenav_model_menu();
        }
        if (optional_param('edit', 0, PARAM_BOOL)) {
            require_sesskey();

            $menu->set_couseid($COURSE->id)
                 ->set_name(required_param('name', PARAM_TEXT))
                 ->set_render(required_param('render', PARAM_ALPHA))
                 ->set_displayname(optional_param('displayname', 0, PARAM_BOOL))
                 ->set_useastab(optional_param('useastab', 0, PARAM_BOOL));

            $repo->save_menu($menu);

        } else {
            echo json_encode((object) array(
                'header' => get_string('editmenu', 'block_flexpagenav'),
                'body'   => $this->output->edit_menu(
                    $this->new_url(array('action' => 'editmenu', 'sesskey' => sesskey(), 'edit' => 1, 'menuid' => $menuid)),
                    $menu
                ),
            ));
        }
    }
}