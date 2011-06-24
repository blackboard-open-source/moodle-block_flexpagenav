<?php
/**
 * @see course_format_flexpage_lib_box
 */
require_once($CFG->dirroot.'/course/format/flexpage/lib/box.php');

/**
 * Abstract Link
 *
 * @author Mark Nielsen
 * @package block_flexpagenav
 */
abstract class block_flexpagenav_lib_link_abstract {
    /**
     * @var block_flexpagenav_model_link
     */
    protected $link;

    /**
     * @return block_flexpagenav_model_link
     */
    public function get_link() {
        return $this->link;
    }

    /**
     * @param block_flexpagenav_model_link $link
     * @return block_flexpagenav_lib_link_abstract
     */
    public function set_link(block_flexpagenav_model_link $link) {
        $this->link = $link;
        return $this;
    }

    /**
     * Get the link type
     *
     * @return string
     */
    public function get_type() {
        return end(explode('_', get_class($this)));
    }

    /**
     * Get human readable link type name
     *
     * @return string
     */
    public function get_name() {
        return get_string($this->get_type().'link', 'block_flexpagenav');
    }

    /**
     * @return block_flexpagenav_renderer
     */
    public function get_renderer() {
        global $PAGE;
        return $PAGE->get_renderer('block_flexpagenav');
    }

    abstract public function get_info();

    /**
     * Grab data from {@link edit_form} in the request, clean and set
     * to link config.
     *
     * @abstract
     * @return void
     */
    abstract public function handle_form();

    /**
     * Return the form HTML for editing this link
     *
     * @abstract
     * @param moodle_url $submiturl
     * @return string
     */
    abstract public function edit_form(moodle_url $submiturl);

    /**
     * Add navigational nodes to the root node
     *
     * @abstract
     * @param navigation_node $root
     * @return void
     */
    abstract public function add_nodes(navigation_node $root);
}