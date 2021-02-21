<?php

function get()
{
  require_once "config/dbConstants.php";
  $dataBase = mysqli_connect(HOST, USER_NAME, PASSWORD, DB_NAME);
  if (!$dataBase) {
    return false;
  } else {
    $response = mysqli_query($dataBase, 'SELECT * FROM employees');
    if ($response) {
      $data = mysqli_fetch_all($response);
      return $data;
    } else {
      return false;
    }
  }
}

function getById($id)
{
  require_once "config/dbConstants.php";
  $dataBase = mysqli_connect(HOST, USER_NAME, PASSWORD, DB_NAME);
  if (!$dataBase) {
    return false;
  } else {
    $response = mysqli_query($dataBase, "SELECT * FROM employees WHERE id = $id");
    if ($response) {
      $data = mysqli_fetch_array($response);
      return $data;
    } else {
      return false;
    }
  }
}

function newItem($request)
{
  return "new";
}

function updateById($request)
{
  return "update";
}

function deleteById($id)
{
  return "delete";
}
