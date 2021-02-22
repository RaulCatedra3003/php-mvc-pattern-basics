<?php
function get()
{
  try {
    global $dataBase;
    $response = mysqli_query($dataBase, 'SELECT employees.name,employees.lastName,cities.name,travels.id FROM employees INNER JOIN travels ON employees.id = travels.user_id INNER JOIN cities ON travels.city_id = cities.id');
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
