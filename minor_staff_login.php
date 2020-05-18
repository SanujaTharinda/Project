<?php
include "EmployeeUser.php";

session_start();

print_r($_SESSION);
$user = new EmployeeUser($_SESSION['username'], $_SESSION['password']);

$_SESSION = array();


$user->viewMinorStaffDetails("minor_staff_details.php");