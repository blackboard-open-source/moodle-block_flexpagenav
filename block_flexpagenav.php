<?php
/**
 * Flexpage Menu Block Class
 *
 * @author Mark Nielsen
 * @package block_flexpagenav
 */
class block_flexpagenav extends block_base {

    function init() {
        $this->title = get_string('pluginname', 'block_flexpagenav');
    }

    function specialization() {
        $this->title = '';
    }

    function get_content() {
        global $CFG;

        if ($this->content !== NULL) {
            return $this->content;
        }
        $this->content = new stdClass;
        $this->content->text = '';
        $this->content->footer = '';

        if (empty($this->config->menuid)) {
            return $this->content;
        }

        require_once($CFG->dirroot.'/blocks/flexpagenav/repository/menu.php');
        require_once($CFG->dirroot.'/blocks/flexpagenav/repository/link.php');

        try {
            $renderer = $this->page->get_renderer('block_flexpagenav');
            $menurepo = new block_flexpagenav_repository_menu();
            $linkrepo = new block_flexpagenav_repository_link();
            $menu     = $menurepo->get_menu($this->config->menuid);

            $linkrepo->set_menu_links($menu);

            // @todo Can we put this inside of block_flexpagenav_lib_render_tree?
            if ($menu->get_render() == 'tree') {
                $arguments = array('id' => $this->instance->id, 'instance' => $this->instance->id, 'candock' => $this->instance_can_be_docked());
                $this->page->requires->yui_module(array('core_dock', 'moodle-block_navigation-navigation'), 'M.block_navigation.init_add_tree', array($arguments));
            }
            $this->content->text = $renderer->render($menu);

            if ($menu->get_displayname()) {
                $this->title = format_string($menu->get_name());
            }
        } catch (moodle_exception $e) {
            debugging($e->getMessage(), DEBUG_DEVELOPER);
        }
        return $this->content;
    }

    function user_can_addto($page) {
        return has_capability('block/flexpagenav:manage', $page->context);
    }

    function user_can_edit() {
        return has_capability('block/flexpagenav:manage', $this->context);
    }

    function instance_allow_multiple() {
        return true;
    }

    /**
     * A way to associate a new instance with a menuid via session
     *
     * @return boolean
     */
    function instance_create() {
        global $SESSION;

        if (!empty($SESSION->block_flexpagenav_create_menuids)) {
            $menuid = array_shift($SESSION->block_flexpagenav_create_menuids);
            if (!empty($menuid)) {
                $this->instance_config_save((object) array('menuid' => $menuid));
            }
            if (empty($SESSION->block_flexpagenav_create_menuids)) {
                unset($SESSION->block_flexpagenav_create_menuids);
            }
        }
        return true;
    }
}