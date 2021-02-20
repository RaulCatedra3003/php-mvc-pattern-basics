<?php

//TODO: you need to create dbConstants.php in ./config/ .
//TODO: inside this file you need to define HOST(your database host), USER_NAME(database user name), PASSWORD(database password) and DB_NAME(database name).

require_once("./dbConstants.php");

$dataBase = mysqli_connect(HOST, USER_NAME, PASSWORD, DB_NAME);

define("CONTROLLERS", BASE_PATH . '/controllers/');

define("VIEWS", BASE_PATH . '/views/');

define("MODELS", BASE_PATH . '/models/');

define("RESOURCES", BASE_PATH . '/resources/');
