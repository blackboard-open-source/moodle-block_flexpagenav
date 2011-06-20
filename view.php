<?php
/**
 * View renderer
 *
 * @author Mark Nielsen
 * @package block_flexpagenav
 */

require_once('../../config.php');
require($CFG->dirroot.'/local/mr/bootstrap.php');

mr_controller::render('blocks/flexpagenav', 'pluginname', 'block_flexpagenav');