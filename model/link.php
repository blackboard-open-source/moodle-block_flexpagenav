<?php
/**
 * Link Model
 *
 * @author Mark Nielsen
 * @package block_flexpagenav
 */
class block_flexpagenav_model_link {
    /**
     * @var null|int
     */
    protected $id = null;

    /**
     * @var int
     */
    protected $menuid;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var int
     */
    protected $weight = 0;

    /**
     * @var block_flexpagenav_model_link_config[]
     */
    protected $configs = array();

    /**
     * @param int|null $id
     * @return block_flexpagenav_model_link
     */
    public function set_id($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int|null
     */
    public function get_id() {
        return $this->id;
    }

    /**
     * @param int $menuid
     * @return block_flexpagenav_model_link
     */
    public function set_menuid($menuid) {
        $this->menuid = $menuid;
        return $this;
    }

    /**
     * @return int
     */
    public function get_menuid() {
        return $this->menuid;
    }

    /**
     * @param string $type
     * @return block_flexpagenav_model_link
     */
    public function set_type($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function get_type() {
        return $this->type;
    }

    /**
     * @param int $weight
     * @return block_flexpagenav_model_link
     */
    public function set_weight($weight) {
        $this->weight = $weight;
        return $this;
    }

    /**
     * @return int
     */
    public function get_weight() {
        return $this->weight;
    }

    /**
     * @param block_flexpagenav_model_link_config[] $configs
     * @return block_flexpagenav_model_link
     */
    public function set_configs(array $configs) {
        $this->configs = $configs;
        return $this;
    }

    /**
     * @return block_flexpagenav_model_link_config[]
     */
    public function get_configs() {
        return $this->configs;
    }
}