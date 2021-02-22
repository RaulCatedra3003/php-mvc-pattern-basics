<?php

if (isset($_REQUEST['action'])) {
    function_exists($_REQUEST['action']) ?
      call_user_func($_REQUEST['action'], $_REQUEST) :
      error("this action does not exist");
} else {
    error("there is not action defined");
}
function getAllTravels()
{
    require_once MODELS . "travelModel.php";
    if ($travels = get()) {
        require_once './views/travel/travelDashboard.php';
    }else{
        error("A problem with database ocurred");
    }
}
function newTravel()
{
    require_once MODELS . "travelModel.php";
    try {
        $employees = getAllEmployees();
        $cities = getAllCities();
        require_once "./views/travel/travel.php";
        
    } catch (Throwable $th) {
        error("A problem with database ocurred");
    }
}
function getTravel($request) 
{
    if (isset($request['id'])) {
        require_once MODELS . "travelModel.php";
        try {
            $travel = getById($request['id']);
            $employees = getAllEmployees();
            $cities = getAllCities();
            require_once VIEWS . "travel/travel.php";
        } catch (Throwable $th) {
            error("A problem with database ocurred");
        }
    }
}

