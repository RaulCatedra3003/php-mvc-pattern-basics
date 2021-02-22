<?php


define("CONTROLLERS", BASE_PATH . '/controllers/');

define("VIEWS", BASE_PATH . '/views/');

define("MODELS", BASE_PATH . '/models/');

define("RESOURCES", BASE_PATH . '/resources/');

$dataBase = mysqli_connect(HOST, USER_NAME, PASSWORD, DB_NAME);