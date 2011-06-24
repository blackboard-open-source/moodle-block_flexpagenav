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
     * The root navigation node
     *
     * @var navigation_node
     */
    protected $root;

    /**
     * @param block_flexpagenav_model_menu $menu
     */
    public function __construct(block_flexpagenav_model_menu $menu) {
        global $PAGE;

        $this->menu     = $menu;
        $this->renderer = $PAGE->get_renderer('block_flexpagenav');

        $this->init_root();
    }

    /**
     * Initialize the root navigation node
     *
     * @return void
     */
    public function init_root() {
        $this->root = new navigation_node(array(
            'key' => 'menu_'.$this->menu->get_id(),
            'text' => format_string($this->menu->get_name()),
        ));
        foreach ($this->menu->get_links() as $link) {
            $link->load_type()->add_nodes($this->root);
        }
    }

    /**
     * Convert the navigation collection into HTML
     *
     * @return string
     */
    abstract public function output();
}