<?php

//TODO: you need to create dbConstants.php in ./config/ .
//TODO: inside this file you need to define HOST(your database host), USER_NAME(database user name), PASSWORD(database password) and DB_NAME(database name).

define("BASE_PATH", dirname(__FILE__));
require_once "config/constants.php";
require_once "helpers/helpers.php";

if (isset($_REQUEST['controller'])) {
  file_exists(CONTROLLERS . $_REQUEST['controller'] . "Controller.php") ?
    require_once(CONTROLLERS . $_REQUEST['controller'] . "Controller.php") :
    error("This controller does not exists");
} else {
  empty($_REQUEST) ?
    require(VIEWS . "main/main.php") :
    header("Location: index.php");
}
