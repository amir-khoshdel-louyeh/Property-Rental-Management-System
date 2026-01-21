<?php

    $db_server = getenv('DB_SERVER') ?: 'localhost';
    $db_user = getenv('DB_USER') ?: 'root';
    $db_pass = getenv('DB_PASS') ?: '';
    $db_name = getenv('DB_NAME') ?: 'project_database';
    $conn = "";
    $error_log = [];

    try{
    $conn = mysqli_connect( $db_server,
                            $db_user,
                            $db_pass,
                            $db_name) ;
    
    if (!$conn) {
        throw new Exception("Connection failed: " . mysqli_connect_error());
    }
    }
    catch(Exception $e)
    {
        $error_log[] = "Database Error: " . $e->getMessage();
        error_log("Database Connection Error: " . $e->getMessage());
        die("Database connection failed. Please contact support.");
    }
    if($conn)
    {
        //echo "** DataBase is Connected **<br>"; 
    }

?>