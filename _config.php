<?php


use SilverStripe\Core\Config\Config;

//define global path to Components' root folder
if (!defined('BLOCKS_DIR')) {
    define('BLOCKS_DIR', rtrim(basename(dirname(__FILE__))));
}

Config::modify()->update('SilverStripe\Admin\LeftAndMain', 'extra_requirements_javascript', array('vendor/sheadawson/silverstripe-blocks/client/javascript/blocks-cms.js'));
Config::modify()->update('SheaDawson\Blocks\Controllers\BlockAdmin', 'menu_icon_class', 'font-icon-block-banner');

