<?php
include_once 'baseController.php';

//saving to data base
if(isset($_REQUEST['submit']))
{
    login();
}
function login()
{
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    
    $s = "select * from employees where username='$username' and password='$password'";
    
    $json = readQuery($s);                  //json
    $data = json_decode($json);             //array

    if($data == null)
    {
        $_SESSION["msg"] = "USERNAME OR PASSWORD WRONG";
        return;
    }
    else
    {
        $_SESSION["userId"] = $data[0]->id;
        $_SESSION["userType"] = $data[0]->type;
        header('Location: ../dashboard/index.php');//redirect
        
        
    }

    return;

}


function logout()
{
    session_destroy();
    header('Location: ../login/index.php');
}

