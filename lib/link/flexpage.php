<?php

require_once($CFG->dirroot.'/course/format/flexpage/locallib.php');

/**
 * @see block_flexpagenav_lib_link_abstract
 */
require_once($CFG->dirroot.'/blocks/flexpagenav/lib/link/abstract.php');

/**
 * Flexpage Link
 *
 * @author Mark Nielsen
 * @package block_flexpagenav
 */
class block_flexpagenav_lib_link_flexpage extends block_flexpagenav_lib_link_abstract {

    public function get_info() {
        try {
            $page = format_flexpage_cache()->get_page($this->get_link()->get_config('pageid', 0));
            $name = $this->get_renderer()->pad_page_name($page, null, true, 0);

            if ($this->get_link()->get_config('children', 0)) {
                return get_string('flexpagewithchildren', 'block_flexpagenav', $name);
            } else {
                return get_string('flexpagewithoutchildren', 'block_flexpagenav', $name);
            }
        } catch (Exception $e) {
            return get_string('flexpageerror', 'block_flexpagenav');
        }
    }

    public function handle_form() {
        $pageid   = required_param('pageid', PARAM_INT);
        $children = optional_param('children', 0, PARAM_INT);
        $exclude  = optional_param('exclude', array(), PARAM_INT);

        if ($children) {
            $cache   = format_flexpage_cache();
            $parent  = $cache->get_page($pageid);
            $include = $exclude;
            $exclude = array();
            foreach ($cache->get_pages() as $page) {
                if ($cache->is_child_page($parent, $page) and !in_array($page->get_id(), $include)) {
                    $exclude[] = $page->get_id();
                }
            }
            $exclude = implode(',', $exclude);
        } else {
            $exclude = '';
        }
        $this->get_link()->set_config('pageid', $pageid)
                         ->set_config('children', $children)
                         ->set_config('exclude', $exclude);
    }

    public function edit_form(moodle_url $submiturl) {
        $renderer = $this->get_renderer();

        $options = array();
        foreach (format_flexpage_cache()->get_pages() as $page) {
            $options[$page->get_id()] = $renderer->pad_page_name($page, true);
        }

        $box = new course_format_flexpage_lib_box(array('class' => 'format_flexpage_form'));

        $box->add_new_row()->add_new_cell(html_writer::label(get_string('flexpage', 'block_flexpagenav'), 'id_pageid'))
                           ->add_new_cell(html_writer::select($options, 'pageid', $this->get_link()->get_config('pageid'), false, array('id' => 'id_pageid')));

        $box->add_new_row()->add_new_cell(html_writer::label(get_string('includechildren', 'block_flexpagenav'), 'id_children'))
                           ->add_new_cell(html_writer::checkbox('children', 1, ($this->get_link()->get_config('children', 0) == 1), '', array('id' => 'id_children')));

        $row = $box->add_new_row(array('class' => 'block_flexpagenav_exclude_row'));
        $row->add_new_cell(get_string('excludechildren', 'block_flexpagenav'))
            ->add_new_cell('', array('class' => 'block_flexpagenav_exclude_cell'));

        return $renderer->form_wrapper($submiturl, $box);
    }

    public function add_nodes(navigation_node $root) {
        global $COURSE;

        try {
            $cache       = format_flexpage_cache();
            $page        = $cache->get_page($this->get_link()->get_config('pageid', 0));
            $modinfo     = get_fast_modinfo($COURSE);
            $parentnodes = array();

            if ($cache->is_page_in_menu($page) and ($availability = $page->is_available($modinfo)) !== false) {
                $current       = $cache->get_current_page();
                $activepageids = $cache->get_page_parents($current);
                $activepageids = array_keys($activepageids);

                $parent = $root->add(
                    format_string($page->get_name()), $page->get_url(), navigation_node::TYPE_CUSTOM, null, 'page_'.$page->get_id().'_'.$this->get_link()->get_id()
                );
                $parent->hidden = is_string($availability);

                if ($page->get_id() == $current->get_id()) {
                    $parent->make_active();
                }
                $parentnodes[$page->get_id()] = $parent;

                if ($this->get_link()->get_config('children', 0)) {
                    $exclude = $this->get_link()->get_config('exclude', array());
                    if (!empty($exclude)) {
                        $exclude = explode(',', $exclude);
                    } else {
                        $exclude = array();
                    }
                    foreach ($cache->get_pages() as $child) {
                        if (in_array($child->get_id(), $exclude)) {
                            continue;
                        }
                        if (!$cache->is_child_page($page, $child)) {
                            continue;
                        }
                        if (!$cache->is_page_in_menu($child)) {
                            continue;
                        }
                        if (!array_key_exists($child->get_parentid(), $parentnodes)) {
                            continue;
                        }
                        /** @var $parentnode navigation_node */
                        $parentnode = $parentnodes[$child->get_parentid()];

                        if ($parentnode->hidden) {
                            continue;
                        }
                        $availability = $child->is_available($modinfo);

                        if ($availability === false) {
                            continue;
                        }
                        /** @var $node navigation_node */
                        $node = $parentnode->add(
                            format_string($child->get_name()), $child->get_url(), navigation_node::TYPE_CUSTOM, null, 'page_'.$child->get_id().'_'.$this->get_link()->get_id()
                        );
                        $node->hidden = is_string($availability);
                        $parentnodes[$child->get_id()] = $node;

                        if (in_array($child->get_id(), $activepageids)) {
                            $node->force_open();
                        } else if ($child->get_id() == $current->get_id()) {
                            $node->make_active();
                        }
                    }
                }
            }
        } catch (Exception $e) {
        }
    }
}