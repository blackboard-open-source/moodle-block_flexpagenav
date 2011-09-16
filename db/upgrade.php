<?php

function xmldb_block_flexpagenav_upgrade($oldversion=0) {
    global $DB;

    $dbman  = $DB->get_manager();
    $result = true;

    if ($oldversion < 2011091600) {

        // Define table block_flexpagenav to be created
        $table = new xmldb_table('block_flexpagenav');

        // Adding fields to table block_flexpagenav
        $table->add_field('id', XMLDB_TYPE_INTEGER, '10', XMLDB_UNSIGNED, XMLDB_NOTNULL, XMLDB_SEQUENCE, null);
        $table->add_field('instanceid', XMLDB_TYPE_INTEGER, '10', XMLDB_UNSIGNED, XMLDB_NOTNULL, null, null);
        $table->add_field('menuid', XMLDB_TYPE_INTEGER, '10', XMLDB_UNSIGNED, XMLDB_NOTNULL, null, null);

        // Adding keys to table block_flexpagenav
        $table->add_key('primary', XMLDB_KEY_PRIMARY, array('id'));
        $table->add_key('instanceid', XMLDB_KEY_FOREIGN, array('instanceid'), 'block_instances', array('id'));
        $table->add_key('menuid', XMLDB_KEY_FOREIGN, array('menuid'), 'block_flexpagenav_menu', array('id'));

        // Conditionally launch create table for block_flexpagenav
        if (!$dbman->table_exists($table)) {
            $dbman->create_table($table);
        }

        // flexpagenav savepoint reached
        upgrade_block_savepoint(true, 2011091600, 'flexpagenav');
    }

    if ($oldversion < 2011091602) {
        $instances = $DB->get_recordset('block_instances', array('blockname' => 'flexpagenav'));
        foreach ($instances as $instance) {
            if (!empty($instance->configdata)) {
                $config = unserialize(base64_decode($instance->configdata));
                if (!empty($config->menuid)) {
                    $DB->insert_record('block_flexpagenav', (object) array('instanceid' => $instance->id, 'menuid' => $config->menuid));
                }
            }
        }

        // flexpagenav savepoint reached
        upgrade_block_savepoint(true, 2011091602, 'flexpagenav');
    }

    return $result;
}