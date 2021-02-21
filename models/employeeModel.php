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
  require_once "config/dbConstants.php";
  $dataBase = mysqli_connect(HOST, USER_NAME, PASSWORD, DB_NAME);
  if (!$dataBase) {
    return false;
  } else {
    $newUser = mysqli_query($dataBase, "SELECT * FROM employees WHERE name = '$request[name]' AND lastName = '$request[lastName]' AND email = '$request[email]'");
    if (mysqli_num_rows($newUser) > 0) {
      return "This employee already exists";
    } else {
      if (mysqli_query($dataBase, "INSERT INTO employees (name, lastName, email, gender, age, streetAddress, city, state, PC, phoneNumber) VALUES ('$request[name]', '$request[lastName]', '$request[email]', '$request[gender]', '$request[age]', '$request[streetAddress]', '$request[city]', '$request[state]', '$request[PC]', '$request[phoneNumber]')")) {
        return "New employee created correctly";
      } else {
        return false;
      }
    }
  }
}

function updateById($request)
{
  require_once "config/dbConstants.php";
  $dataBase = mysqli_connect(HOST, USER_NAME, PASSWORD, DB_NAME);
  if (!$dataBase) {
    return false;
  } else {
    $exists = mysqli_query($dataBase, "SELECT * FROM employees WHERE id = '$request[id]'");
    if (mysqli_num_rows($exists) == 0) {
      return "This employee does not exists";
    } else {
      if (mysqli_query($dataBase, "UPDATE employees SET name = '$request[name]', lastName = '$request[lastName]', email = '$request[email]', gender = '$request[gender]', age = '$request[age]', streetAddress = '$request[streetAddress]', city = '$request[city]', state = '$request[state]', PC = '$request[PC]', phoneNumber = '$request[phoneNumber]' WHERE id = '$request[id]'")) {
        return "Employee updated correctly";
      } else {
        return false;
      }
    }
  }
}

function deleteById($id)
{
  require_once "config/dbConstants.php";
  $dataBase = mysqli_connect(HOST, USER_NAME, PASSWORD, DB_NAME);
  if (!$dataBase) {
    return false;
  } else {
    $exists = mysqli_query($dataBase, "SELECT * FROM employees WHERE id = $id");
    if (mysqli_num_rows($exists) == 0) {
      return "This employee does not exists";
    } else {
      if (mysqli_query($dataBase, "DELETE FROM employees WHERE id = $id")) {
        return "Employee deleted correctly";
      } else {
        return false;
      }
    }
  }
}
