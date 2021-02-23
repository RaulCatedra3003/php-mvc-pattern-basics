<?php

function get()
{
  try {
    global $dataBase;
    $response = mysqli_query($dataBase, 'SELECT employees.name,employees.lastName,cities.name,travels.id,cities.id FROM employees INNER JOIN travels ON employees.id = travels.user_id INNER JOIN cities ON travels.city_id = cities.id');
    return mysqli_fetch_all($response);
  } catch (Throwable $th) {
    return false;
  }
}

function getById($id)
{
  try {
    global $dataBase;
    $response = mysqli_query($dataBase, "SELECT * FROM travels WHERE id = $id");
    return mysqli_fetch_array($response);
  } catch (Throwable $th) {
    return false;
  }
}

function getAllEmployees()
{
  try {
    global $dataBase;
    $response = mysqli_query($dataBase, 'SELECT id,name,lastName FROM employees');
    return mysqli_fetch_all($response);
  } catch (Throwable $th) {
    return false;
  }
}

function getAllCities()
{
  try {
    global $dataBase;
    $response = mysqli_query($dataBase, 'SELECT id,name FROM cities');
    return mysqli_fetch_all($response);
  } catch (Throwable $th) {
    return false;
  }
}

function newItem($request)
{
  try {
    global $dataBase;
    mysqli_query($dataBase, "INSERT INTO travels (user_id, city_id) VALUES ('$request[user_id]', '$request[city_id]')");
    return "New travel created correctly";
  } catch (Throwable $th) {
    return false;
  }
}

function deleteById($id)
{
  try {
    global $dataBase;
    $exists = mysqli_query($dataBase, "SELECT * FROM travels WHERE id = $id");
    if (mysqli_num_rows($exists) == 0) {
      return "This travel does not exists";
    } else {
      mysqli_query($dataBase, "DELETE FROM travels WHERE id = $id");
      return "Travel deleted correctly";
    }
  } catch (Throwable $th) {
    return false;
  }
}

function updateTravelById($request)
{
  try {
    global $dataBase;
    $exists = mysqli_query($dataBase, "SELECT * FROM travels WHERE id = '$request[id]'");
    if (mysqli_num_rows($exists) == 0) {
      return "This travel does not exists";
    } else {
      mysqli_query($dataBase, "UPDATE travels SET user_id = '$request[user_id]' , city_id = '$request[city_id]' WHERE id = '$request[id]'");
      return "Travel updated correctly";
    }
  } catch (Throwable $th) {
    return false;
  }
}

function getCityTravelsById($id)
{
  try {
    global $dataBase;
    $response = mysqli_query($dataBase, "SELECT employees.name,employees.lastName,cities.name FROM employees INNER JOIN travels ON employees.id = travels.user_id INNER JOIN cities ON travels.city_id = cities.id WHERE cities.id = $id");
    return mysqli_fetch_all($response);
  } catch (Throwable $th) {
    return false;
  }
}
