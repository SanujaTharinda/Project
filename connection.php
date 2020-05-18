
<?php
    include "Validator.php";
    include 'LoginDatabase.php';

    $userEmail=$_POST['email'];
    $userPassword=$_POST['password'];

    if($userEmail == null || $userPassword == null) {
        echo "<script>alert('Please Enter Both Username and Password');
              window.location.href='index.php';
              </script>";
        return;
    }

    $loginDatabase = new LoginDatabase("localhost",'root','1234','login');
    echo "Login Database Created";


    $isValid = Validator::validateAuthentication($loginDatabase, $userEmail, $userPassword);

    if(!$isValid) {
        echo "<script>alert('Wrong Username Or Password');
              window.location.href='index.php';
              </script>";
        return;
    }

    $userType = $loginDatabase->getItem("userdetails","email",$userEmail,"usertype");
    session_start();
    $_SESSION = array();

    $_SESSION["username"] = $userEmail;
    $_SESSION["password"] = $userPassword;

    $location;

    switch (strtoupper($userType)){
        case "ADMIN":
            $location = "admin_user_login.php";
            break;
        case "MAIN":
            $location = "main_user_login.php";
            break;
        case "EMPLOYEE":
            $location = "minor_staff_login.php";
            break;

    }

    header("location: $location");











