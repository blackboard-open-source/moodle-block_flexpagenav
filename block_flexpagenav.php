<?php
/**
 * Flexpage Menu Block Class
 *
 * @author Mark Nielsen
 * @package block_flexpagenav
 */
class block_flexpagenav extends block_base {
    /**
     * @var block_flexpagenav_model_menu|boolean
     */
    protected $flexpagenavmenu;

    function init() {
        $this->title = get_string('pluginname', 'block_flexpagenav');
    }

    function specialization() {
        $this->title = '';
    }

    function get_content() {
        if ($this->content !== NULL) {
            return $this->content;
        }
        $this->content = new stdClass;
        $this->content->text   = '';
        $this->content->footer = '';

        if ($menu = $this->get_flexpagenav_menu()) {
            $this->content->text = $this->page->get_renderer('block_flexpagenav')->render($menu);

            if ($menu->get_displayname()) {
                $this->title = format_string($menu->get_name());
            }
        }
        return $this->content;
    }

    /**
     * Customize class based on rendering
     *
     * @return array
     */
    function html_attributes() {
        $attributes = parent::html_attributes();
        if ($menu = $this->get_flexpagenav_menu()) {
            $attributes['class'] .= ' block_flexpagenav_render_'.$menu->get_render();
        }
        return $attributes;
    }

    /**
     * Only allow tree renderings to be docked
     *
     * @return bool
     */
    public function instance_can_be_docked() {
        $menu = $this->get_flexpagenav_menu();
        if ($menu and $menu->get_render() == 'tree') {
            return true;
        }
        return false;
    }


    /**
     * When rendering a tree, we need different dock init
     */
    function get_required_javascript() {
        $menu = $this->get_flexpagenav_menu();

        if ($menu and $menu->get_render() == 'tree') {
            if ($this->instance_can_be_docked() && !$this->hide_header()) {
                $arguments = array('id' => $this->instance->id, 'instance' => $this->instance->id, 'candock' => $this->instance_can_be_docked());
                $this->page->requires->yui_module(array('core_dock', 'moodle-block_navigation-navigation'), 'M.block_navigation.init_add_tree', array($arguments));
                user_preference_allow_ajax_update('docked_block_instance_'.$this->instance->id, PARAM_INT);
            }
        } else {
            parent::get_required_javascript();
        }
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
     * Get our flexpagenav menu with links
     *
     * @return block_flexpagenav_model_menu|bool
     */
    protected function get_flexpagenav_menu() {
        global $CFG;

        require_once($CFG->dirroot.'/blocks/flexpagenav/repository/menu.php');
        require_once($CFG->dirroot.'/blocks/flexpagenav/repository/link.php');

        if (is_null($this->flexpagenavmenu)) {
            $this->flexpagenavmenu = false;

            if (!empty($this->config->menuid)) {
                try {
                    $menurepo = new block_flexpagenav_repository_menu();
                    $linkrepo = new block_flexpagenav_repository_link();
                    $menu     = $menurepo->get_menu($this->config->menuid);
                    $linkrepo->set_menu_links($menu);

                    $this->flexpagenavmenu = $menu;
                } catch (moodle_exception $e) {
                    // debugging($e->getMessage(), DEBUG_DEVELOPER);
                    $this->flexpagenavmenu = false;
                }
            }
        }
        return $this->flexpagenavmenu;
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