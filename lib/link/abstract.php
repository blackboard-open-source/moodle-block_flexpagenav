<?php
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
     * Add navigational nodes to the collection
     *
     * @abstract
     * @param navigation_node_collection $collection
     * @return void
     */
    abstract public function add_nodes(navigation_node_collection $collection);
}