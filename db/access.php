<?php
/**
 * Plugin Capabilities
 *
 * @author Mark Nielsen
 * @package block_flexpagenav
 */
$capabilities = array(

    'block/flexpagenav:view' => array(

        'captype' => 'read',
        'contextlevel' => CONTEXT_BLOCK,
        'archetypes' => array(
            'guest' => CAP_ALLOW,
            'user' => CAP_ALLOW,
            'student' => CAP_ALLOW,
            'teacher' => CAP_ALLOW,
            'editingteacher' => CAP_ALLOW,
            'coursecreator' => CAP_ALLOW,
            'manager' => CAP_ALLOW
        )
    ),

    'block/flexpagenav:manage' => array(

        'riskbitmask' => RISK_XSS,

        'captype' => 'write',
        'contextlevel' => CONTEXT_BLOCK,
        'archetypes' => array(
            'editingteacher' => CAP_ALLOW,
            'coursecreator' => CAP_ALLOW,
            'manager' => CAP_ALLOW
        )
    ),
);