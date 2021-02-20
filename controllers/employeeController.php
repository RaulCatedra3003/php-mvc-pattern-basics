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
  if (get()) {
    $employees = get();
    require_once "./views/employee/employeeDashboard.php";
  } else {
    error("A problem with database ocurred");
  }
}

function getEmployee($request)
{
  if (isset($request['id'])) {
    require_once MODELS . "employeeModel.php";
    if (getById($request['id'])) {
      $employee = getById($request['id']);
      require_once "./views/employee/employee.php";
    } else {
      error("A problem with database ocurred");
    }
  } else {
    error("You need parameters to run this action");
  }
}

function newEmployee()
{
  require_once "./views/employee/employee.php";
}

function createEmployee()
{
  require_once MODELS . "employeeModel.php";
}

function updateEmployee()
{
  require_once MODELS . "employeeModel.php";
}
