<?php
/**
 * Menu Render Abstract
 *
 * @author Mark Nielsen
 * @package block_flexpagenav
 */
abstract class block_flexpagenav_lib_render_abstract {
    /**
     * @var block_flexpagenav_model_menu
     */
    protected $menu;

    /**
     * @var block_flexpagenav_renderer
     */
    protected $renderer;

    /**
     * @var navigation_node_collection
     */
    protected $collection;

    /**
     * @param block_flexpagenav_model_menu $menu
     */
    public function __construct(block_flexpagenav_model_menu $menu) {
        global $PAGE;

        $this->menu     = $menu;
        $this->renderer = $PAGE->get_renderer('block_flexpagenav');

        $this->init_collection();
    }

    /**
     * Initialize the navigation collection
     *
     * @return void
     */
    public function init_collection() {
        $this->collection = new navigation_node_collection();
        foreach ($this->menu->get_links() as $link) {
            $link->load_type()->add_nodes($this->collection);
        }
    }

    /**
     * Convert the navigation collection into HTML
     *
     * @return string
     */
    abstract public function output();
}