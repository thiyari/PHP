<?php
// Start Session
session_start();

// Config File
require_once 'config.php';

// Include Helpers
require_once 'helpers/system_helper.php';

// Autoloader
function _autoload($className) {
        require_once 'lib/'.$className. '.php';
    }
spl_autoload_register("_autoload");


