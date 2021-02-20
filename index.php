<?php

define("BASE_PATH", dirname(__FILE__));
include_once "config/constants.php";
include_once "helpers/helpers.php";

if (isset($_REQUEST['controller'])) {
  file_exists(CONTROLLERS . $_REQUEST['controller'] . "Controller.php") ?
    require_once(CONTROLLERS . $_REQUEST['controller'] . "Controller.php") :
    error("This controller does not exists");
} else {
  empty($_REQUEST) ?
    require(VIEWS . "main/main.php") :
    header("Location: index.php");
}
