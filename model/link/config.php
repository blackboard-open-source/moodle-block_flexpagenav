<?php
/**
 * Link Config Model
 *
 * @author Mark Nielsen
 * @package block_flexpagenav
 */
class block_flexpagenav_model_link_config {
    /**
     * @var int
     */
    protected $id;

    /**
     * @var int
     */
    protected $linkid;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $value;

    /**
     * @param int $id
     * @return block_flexpagenav_model_link_config
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
     * @param int $linkid
     * @return block_flexpagenav_model_link_config
     */
    public function set_linkid($linkid) {
        $this->linkid = $linkid;
        return $this;
    }

    /**
     * @return int
     */
    public function get_linkid() {
        return $this->linkid;
    }

    /**
     * @param string $name
     * @return block_flexpagenav_model_link_config
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
     * @param string $value
     * @return block_flexpagenav_model_link_config
     */
    public function set_value($value) {
        $this->value = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function get_value() {
        return $this->value;
    }
}