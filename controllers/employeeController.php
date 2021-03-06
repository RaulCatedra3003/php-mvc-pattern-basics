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

function createEmployee($request)
{
  require_once MODELS . "employeeModel.php";
  if ($message = newItem($request)) {
    header("Location:index.php?controller=employee&action=getAllEmployees&message=$message");
  } else {
    error("A problem with database ocurred");
  }
}

function updateEmployee($request)
{
  require_once MODELS . "employeeModel.php";
  if (isset($request['id'])) {
    if ($message = updateById($request)) {
      header("Location:index.php?controller=employee&action=getAllEmployees&message=$message");
    } else {
      error("A problem with database ocurred");
    }
  } else {
    error("You need parameters to run this action");
  }
}

function deleteEmployee($request)
{
  require_once MODELS . "employeeModel.php";
  if (isset($request['id'])) {
    if ($message = deleteById($request['id'])) {
      header("Location:index.php?controller=employee&action=getAllEmployees&message=$message");
    }
  }
}
