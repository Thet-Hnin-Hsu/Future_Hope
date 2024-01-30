<?php
    define("dbhost", "localhost");
    define("dbuser", "root");
    define("dbpass", "");
    define("dbname", "project-2");
    $db_connection = mysqli_connect(dbhost, dbuser, dbpass, dbname);
    if (!$db_connection) {
        echo "db not found";
    }
    
?>