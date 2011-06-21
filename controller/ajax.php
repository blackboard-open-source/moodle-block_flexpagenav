<?php
/**
 * @see block_flexpagenav_repository_menu
 */
require_once($CFG->dirroot.'/blocks/flexpagenav/repository/menu.php');

/**
 * @see block_flexpagenav_repository_link
 */
require_once($CFG->dirroot.'/blocks/flexpagenav/repository/link.php');

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

    /**
     * Manage links modal
     */
    public function managelinks_action() {
        $menuid = required_param('menuid', PARAM_INT);

        $menurepo = new block_flexpagenav_repository_menu();
        $linkrepo = new block_flexpagenav_repository_link();

        $menu = $menurepo->get_menu($menuid);
        $linkrepo->set_menu_links($menu);

        echo json_encode((object) array(
            'header' => get_string('managelinks', 'block_flexpagenav'),
            'body'   => $this->output->manage_links(
                $this->new_url(),
                $menu
            ),
        ));
    }

    /**
     * Edit link modal
     */
    public function editlink_action() {
        $menuid = required_param('menuid', PARAM_INT);
        $type   = required_param('type', PARAM_SAFEDIR);
        $linkid = optional_param('linkid', 0, PARAM_INT);

        $menurepo = new block_flexpagenav_repository_menu();
        $linkrepo = new block_flexpagenav_repository_link();

        $menu = $menurepo->get_menu($menuid);

        /** @var $link block_flexpagenav_model_link */
        if (!empty($linkid)) {
            $link = $linkrepo->get_link($linkid);
            $linkrepo->set_link_configs($link);
        } else {
            // New link, populate it with the goods
            $link = new block_flexpagenav_model_link();
            $link->set_type($type)
                 ->set_menuid($menu->get_id())
                 ->set_weight($linkrepo->get_next_weight($link));
        }

        /** @var $linktype block_flexpagenav_lib_link_abstract */
        $linktype = $link->load_type();

        if (optional_param('edit', 0, PARAM_BOOL)) {
            require_sesskey();

            $linktype->handle_form();

            $linkrepo->save_link($link)
                     ->save_link_config($link, $link->get_configs());

        } else {
            echo json_encode((object) array(
                'args'   => $link->get_type(),
                'header' => get_string('editingx', 'block_flexpagenav', $linktype->get_name()),
                'body'   => $linktype->edit_form(
                    $this->new_url(array('action' => 'editlink', 'sesskey' => sesskey(), 'edit' => 1, 'menuid' => $menu->get_id(), 'linkid' => $linkid, 'type' => $link->get_type()))
                ),
            ));
        }
    }
}