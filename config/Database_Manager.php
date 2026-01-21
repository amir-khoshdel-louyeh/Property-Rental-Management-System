<?php

    $db_server = getenv('DB_SERVER') ?: 'localhost';
    $db_user = getenv('DB_USER') ?: 'root';
    $db_pass = getenv('DB_PASS') ?: '';
    $db_name = getenv('DB_NAME') ?: 'project_database';
    $conn = "";

    try{
    $conn = mysqli_connect( $db_server,
                            $db_user,
                            $db_pass,
                            $db_name) ;
    }
    catch(mysqli_sql_exception)
    {
        echo ("Could not connect to the database!! <br>");
    }
    if($conn)
    {
        //echo "** DataBase is Connected **<br>"; 
    }

?>