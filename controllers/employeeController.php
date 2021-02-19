<?php

//OBTAIN THE ACCION PASSED IN THE URL AND EXECUTE IT AS A FUNCTION

//Keep in mind that the function to be executed has to be one of the ones declared in this controller
// TODO Implement the logic

if (isset($_REQUEST['action'])) {
  if (function_exists($_REQUEST['action'])) {
    call_user_func($_REQUEST['action']);
  } else {
    $errorMsg = "this action does not exist";
    error($errorMsg);
  }
} else {
  $errorMsg = "there is not action defined";
  error($errorMsg);
}


/* ~~~ CONTROLLER FUNCTIONS ~~~ */

require_once MODELS . "employeeModel.php";

/**
 * This function calls the corresponding model function and includes the corresponding view
 */
function getAllEmployees()
{
  echo "getAllEmployees";
}

/**
 * This function calls the corresponding model function and includes the corresponding view
 */
function getEmployee($request)
{
  echo "getEmployee";
}

/**
 * This function includes the error view with a message
 */
function error($errorMsg)
{
  require_once VIEWS . "/error/error.php";
}
