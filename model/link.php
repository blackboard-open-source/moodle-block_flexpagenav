<?php
/**
 * Link Model
 *
 * @author Mark Nielsen
 * @package block_flexpagenav
 */
class block_flexpagenav_model_link {
    /**
     * Move constants
     */
    const MOVE_BEFORE = 0;
    const MOVE_AFTER = 1;

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

    /**
     * @param string $name
     * @param string $default
     * @return string
     */
    public function get_config($name, $default = '') {
        foreach ($this->configs as $config) {
            if ($config->get_name() == $name) {
                return $config->get_value();
            }
        }
        return $default;
    }

    /**
     * @param string $name
     * @param string $value
     * @return block_flexpagenav_model_link
     */
    public function set_config($name, $value) {
        foreach ($this->configs as $config) {
            if ($config->get_name() == $name) {
                $config->set_value($value);
                return $this;
            }
        }
        $config = new block_flexpagenav_model_link_config();
        $config->set_linkid($this->get_id())
               ->set_name($name)
               ->set_value($value);

        $this->add_config($config);

        return $this;
    }

    /**
     * @param block_flexpagenav_model_link_config $config
     * @return block_flexpagenav_model_link
     */
    public function add_config(block_flexpagenav_model_link_config $config) {
        $this->configs[] = $config;
        return $this;
    }

    /**
     * Loads the model's corresponding link type class
     *
     * @throws coding_exception
     * @return block_flexpagenav_lib_link_abstract
     */
    public function load_type() {
        $type = $this->get_type();
        if (empty($type)) {
            throw new coding_exception('Cannot load link type because type has not been set');
        }
        /** @var $linktype block_flexpagenav_lib_link_abstract */
        $linktype = mr_helper::get('blocks/flexpagenav')->load("lib/link/$type");
        $linktype->set_link($this);

        return $linktype;
    }

    /**
     * Link move options
     *
     * @static
     * @return array
     */
    public static function get_move_options() {
        return array(
            self::MOVE_BEFORE => get_string('movebefore', 'block_flexpagenav'),
            self::MOVE_AFTER  => get_string('moveafter', 'block_flexpagenav'),
        );
    }
}