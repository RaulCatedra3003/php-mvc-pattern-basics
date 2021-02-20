<?php

if (isset($_REQUEST['action'])) {
  function_exists($_REQUEST['action']) ?
    call_user_func($_REQUEST['action'], $_REQUEST) :
    error("this action does not exist");
} else {
  error("there is not action defined");
}


function getAllEmployees()
{
  require_once MODELS . "employeeModel.php";
  $employees = get() ?
    require_once "../views/employee/employeeDashboard.php" :
    error("A problem with database ocurred");
}

function getEmployee($request)
{
  if (isset($request['id'])) {
    require_once MODELS . "employeeModel.php";
    $employee = getById($request['id']) ?
      require_once "../views/employee/employee.php" :
      error("A problem with database ocurred");
  } else {
    error("You need parameters to run this action");
  }
}
