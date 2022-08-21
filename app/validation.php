<?php
    function validateAdmin()
    {
        validateAll();
        
        
        $userType = $_SESSION["userType"];
        if($userType != "admin")
        {
            header('Location: ../login/index.php');//redirect
        }
        
        
    }
    function validateAll()
    {
        if(isset($_SESSION["userType"]) == null)
        {
            header('Location: ../login/index.php');//redirect
        }
    }