<?php
/**
 * Flexpagenav Restore Task
 *
 * WARNING! This block's tables are being backed up by course/format/flexpage
 * as the format has more appropriate hooks for handling this data.
 *
 * @author Mark Nielsen
 * @package format_flexpage
 */
class restore_flexpagenav_block_task extends restore_default_block_task {
    /**
     * Need to remap menu IDs
     *
     * @return void
     */
    public function after_restore() {
        global $DB;

        if ($instance = $DB->get_record('block_instances', array('id' => $this->get_blockid()))) {
            $block = block_instance('flexpagenav', $instance);
            if (!empty($block->config->menuid)) {
                $info = restore_dbops::get_backup_ids_record($this->get_restoreid(), 'flexpage_menu', $block->config->menuid);

                if ($info) {
                    $meuid = $info->newitemid;
                } else {
                    $meuid = 0;
                }
                $block->instance_config_save((object) array('menuid' => $meuid));
            }
        }
    }
}