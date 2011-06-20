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

    function get_content() {
        if ($this->content !== NULL) {
            return $this->content;
        }

        $this->content = new stdClass;
        $this->content->text = '';
        $this->content->footer = '';

        if (empty($this->config->menuid)) {
            return $this->content;
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

    function cron() {
        // @todo Clean tables where courseid no longer exists
    }
}