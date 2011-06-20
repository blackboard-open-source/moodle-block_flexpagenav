<?php
/**
 * @see block_flexpagenav_lib_link_abstract
 */
require_once($CFG->dirroot.'/blocks/flexpagenav/lib/link/abstract.php');

/**
 * URL Link
 *
 * @author Mark Nielsen
 * @package block_flexpagenav
 */
class block_flexpagenav_lib_link_url extends block_flexpagenav_lib_link_abstract {

    public function add_nodes(navigation_node_collection $collection) {
        $collection->add(new navigation_node(array()));
    }
}