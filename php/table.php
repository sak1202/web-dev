<html>
    <head>
        <title>Database connection</title>
    </head>
    <body>
<?php
    $con=mysqli_connect("localhost","sakshi","");
    if(!$con){
        die("error");
    }
    else{
        echo "succcessful";
    }
    $table="CREATE TABLE student_details(sid INT NOT NULL ,name VARCHAR(40) NOT NULL,age INT )"; 
    if($con,$table){
        echo "table created";
    }
    else{
        echo "error";
    }

    ?>
    </body>

