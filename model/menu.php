<?php
/**
 * Menu Model
 *
 * @author Mark Nielsen
 * @package block_flexpagenav
 */
class block_flexpagenav_model_menu implements renderable {
    /**
     * @var int
     */
    protected $id;

    /**
     * @var int
     */
    protected $couseid;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $render;

    /**
     * @var int
     */
    protected $displayname = 0;

    /**
     * @var int
     */
    protected $useastab = 0;

    /**
     * @var block_flexpagenav_model_link[]
     */
    protected $links = array();

    /**
     * @param int $couseid
     * @return block_flexpagenav_model_menu
     */
    public function set_couseid($couseid) {
        $this->couseid = $couseid;
        return $this;
    }

    /**
     * @return int
     */
    public function get_couseid() {
        return $this->couseid;
    }

    /**
     * @param int $displayname
     * @return block_flexpagenav_model_menu
     */
    public function set_displayname($displayname) {
        $this->displayname = $displayname;
        return $this;
    }

    /**
     * @return int
     */
    public function get_displayname() {
        return $this->displayname;
    }

    /**
     * @param int $id
     * @return block_flexpagenav_model_menu
     */
    public function set_id($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function get_id() {
        return $this->id;
    }

    /**
     * @param block_flexpagenav_model_link[] $links
     * @return block_flexpagenav_model_menu
     */
    public function set_links(array $links) {
        $this->links = $links;
        return $this;
    }

    /**
     * @return block_flexpagenav_model_link[]
     */
    public function get_links() {
        return $this->links;
    }

    /**
     * @param string $name
     * @return block_flexpagenav_model_menu
     */
    public function set_name($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function get_name() {
        return $this->name;
    }

    /**
     * @param string $render
     * @return block_flexpagenav_model_menu
     */
    public function set_render($render) {
        if (!array_key_exists($render, self::get_render_options())) {
            throw new coding_exception("Setting invalid render value: $render");
        }
        $this->render = $render;
        return $this;
    }

    /**
     * @return string
     */
    public function get_render() {
        return $this->render;
    }

    /**
     * @param int $useastab
     * @return block_flexpagenav_model_menu
     */
    public function set_useastab($useastab) {
        $this->useastab = $useastab;
        return $this;
    }

    /**
     * @return int
     */
    public function get_useastab() {
        return $this->useastab;
    }

    /**
     * @static
     * @return array
     */
    public static function get_render_options() {
        return array(
            'tree' => get_string('tree', 'block_flexpagenav'),
            'select' => get_string('dropdown', 'block_flexpagenav'),
            'navhorizontal' => get_string('navhorizontal', 'block_flexpagenav'),
            // 'navvertical' => get_string('navvertical', 'block_flexpagenav'),
        );
    }
}