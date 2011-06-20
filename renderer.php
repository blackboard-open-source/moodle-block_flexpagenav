<?php
/**
 * @see format_flexpage_renderer
 */
require_once($CFG->dirroot.'/course/format/flexpage/renderer.php');

/**
 * Plugin Renderer
 *
 * @author Mark Nielsen
 * @package block_flexpagenav
 */
class block_flexpagenav_renderer extends format_flexpage_renderer {
    /**
     * The javascript module used by the presentation layer
     *
     * @return array
     */
    public function get_js_module() {
        return array(
            'name'      => 'block_flexpagenav',
            'fullpath'  => '/blocks/flexpagenav/javascript.js',
            'requires'  => array(
                'base',
                'node',
                'event-custom',
                'json-parse',
                'yui2-yahoo',
                'yui2-dom',
                'yui2-event',
                'yui2-element',
                'yui2-button',
                'yui2-container',
                'yui2-menu',
            ),
            'strings' => array(
                array('savechanges'),
            )
        );
    }

    /**
     * Manage menus modal content
     *
     * @param moodle_url $url
     * @param block_flexpagenav_model_menu[] $menus
     * @return string
     */
    public function manage_menus(moodle_url $url, array $menus) {
        $actions = array('editmenu', 'editlinks', 'delete');

        $output = html_writer::empty_tag('input', array('id' => 'addmenu', 'type' => 'button', 'value' => get_string('addmenudotdotdot', 'block_flexpagenav')));

        if (!empty($menus)) {
            $box = new course_format_flexpage_lib_box(array('class' => 'format_flexpage_box_managepages'));
            $row = $box->add_new_row(array('class' => 'format_flexpage_box_headers'));
            $row->add_new_cell(get_string('name', 'block_flexpagenav'))
                ->add_new_cell(get_string('manage', 'block_flexpagenav'))
                ->add_new_cell(get_string('usedastabs', 'block_flexpagenav'));

            foreach ($menus as $menu) {
                $options = array();
                foreach ($actions as $action) {
                    $actionurl = clone($url);
                    $actionurl->param('action', $action);
                    $actionurl->param('menuid', $menu->get_id());

                    $option = json_encode((object) array(
                        'action' => $action,
                        'url' => $actionurl->out(false),
                    ));
                    $options[$option] = get_string($action.'action', 'block_flexpagenav');
                }
                $actionselect = html_writer::select($options, 'actions', '', false, array(
                    'id'    => html_writer::random_id(),
                    'class' => 'block_flexpagenav_actions_select'
                ));

                $box->add_new_row()->add_new_cell(format_text($menu->get_name()))
                                   ->add_new_cell($actionselect, array('id' => html_writer::random_id()))
                                   ->add_new_cell(($menu->get_useastab() ? get_string('yes') : get_string('no')));
            }
            $output .= $this->render($box);
        }
        return $output;
    }

    /**
     * Edit menu modal content
     *
     * @param moodle_url $submiturl
     * @param block_flexpagenav_model_menu $menu
     * @return string
     */
    public function edit_menu(moodle_url $submiturl, block_flexpagenav_model_menu $menu) {
        $box       = new course_format_flexpage_lib_box(array('class' => 'block_flexpagenav_editmenu'));
        $labelattr = array('class' => 'format_flexpage_cell_label');

        $box->add_new_row()->add_new_cell(html_writer::label(get_string('name', 'block_flexpagenav'), 'id_name'), $labelattr)
                           ->add_new_cell(html_writer::empty_tag('input', array('id' => 'id_name', 'name' => 'name', 'type' => 'text', 'size' => 50, 'value' => $menu->get_name())));

        $box->add_new_row()->add_new_cell(html_writer::label(get_string('render', 'block_flexpagenav'), 'id_render'), $labelattr)
                           ->add_new_cell(html_writer::select(block_flexpagenav_model_menu::get_render_options(), 'render', $menu->get_render(), false, array('id' => 'id_render')));

        $box->add_new_row()->add_new_cell(html_writer::label(get_string('displayname', 'block_flexpagenav'), 'id_displayname'), $labelattr)
                           ->add_new_cell(html_writer::checkbox('displayname', 1, ($menu->get_displayname() == 1), '', array('id' => 'id_displayname')));

        $box->add_new_row()->add_new_cell(html_writer::label(get_string('useastab', 'block_flexpagenav'), 'id_useastab'), $labelattr)
                           ->add_new_cell(html_writer::checkbox('useastab', 1, ($menu->get_useastab() == 1), '', array('id' => 'id_useastab')));

        return html_writer::start_tag('form', array('method' => 'post', 'action' => $submiturl->out_omit_querystring())).
               html_writer::input_hidden_params($submiturl).
               $this->render($box).
               html_writer::end_tag('form');
    }
}