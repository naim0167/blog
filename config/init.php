<?php
session_start();
require_once 'config.php';

require_once 'helpers/system_helper.php';

function __autoload($class_name){
    require_once 'classes/'.$class_name.'.php';
}
