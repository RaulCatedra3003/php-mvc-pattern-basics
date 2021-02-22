<?php


require_once "config/constants.php";


function get()
{
  try {
    global $dataBase;
    $response = mysqli_query($dataBase, 'SELECT * FROM employees');
    return mysqli_fetch_all($response);
  } catch (Throwable $th) {
    return false;
  }
}

function getById($id)
{
  try {
    global $dataBase;
    $response = mysqli_query($dataBase, "SELECT * FROM employees WHERE id = $id");
    return mysqli_fetch_array($response);
  } catch (Throwable $th) {
    return false;
  }
}

function newItem($request)
{
  try {
    global $dataBase;
    $newUser = mysqli_query($dataBase, "SELECT * FROM employees WHERE name = '$request[name]' AND lastName = '$request[lastName]' AND email = '$request[email]'");
    if (mysqli_num_rows($newUser) > 0) {
      return "This employee already exists";
    } else {
      mysqli_query($dataBase, "INSERT INTO employees (name, lastName, email, gender, age, streetAddress, city, state, PC, phoneNumber) VALUES ('$request[name]', '$request[lastName]', '$request[email]', '$request[gender]', '$request[age]', '$request[streetAddress]', '$request[city]', '$request[state]', '$request[PC]', '$request[phoneNumber]')"); 
      return "New employee created correctly"; 
    }
  } catch (Throwable $th) {
    return false;
  }
}

function updateById($request)
{
  try {
    global $dataBase;
    $exists = mysqli_query($dataBase, "SELECT * FROM employees WHERE id = '$request[id]'");
    if (mysqli_num_rows($exists) == 0) {
      return "This employee does not exists";
    } else {
      mysqli_query($dataBase, "UPDATE employees SET name = '$request[name]', lastName = '$request[lastName]', email = '$request[email]', gender = '$request[gender]', age = '$request[age]', streetAddress = '$request[streetAddress]', city = '$request[city]', state = '$request[state]', PC = '$request[PC]', phoneNumber = '$request[phoneNumber]' WHERE id = '$request[id]'");
      return "Employee updated correctly"; 
    }
  } catch (Throwable $th) {
    return false;
  }
}

function deleteById($id)
{
  try {
    global $dataBase;
    $exists = mysqli_query($dataBase, "SELECT * FROM employees WHERE id = $id");
    if (mysqli_num_rows($exists) == 0) {
      return "This employee does not exists";
    } else {
      mysqli_query($dataBase, "DELETE FROM employees WHERE id = $id");
      return "Employee deleted correctly";
      
    }
  } catch (Throwable $th) {
    return false;
  }
}
