<html>
    <head>
        <title> Database connection</title>
</head>
<body>
    <?php
    $con=mysqli_connect("localhost","root","","sakshi");
    if(!$con){
        die("error");
    }
    else{
        echo "successful connection   ";
    }
    
    $table="CREATE TABLE emp(empid INT NOT NULL,empname VARCHAR(40) ,dept VARCHAR(40))";
    if(mysqli_query($con,$table)){
        echo "table created succesfully    ";
    }
    else{
        echo "error";
    }
    $query="INSERT INTO emp(empid,empname,dept)VALUES(1,'samart','IT')";
    $query1="INSERT INTO emp(empid,empname,dept)VALUES(2,'shivam','IT')";
    if(mysqli_query($con,$query)){
        echo "entered succesfully    ";
    }
    else{
        echo "error";
    }
    if(mysqli_query($con,$query1)){
        echo "entered succesfully    ";
    }
    else{
        echo "error";
    }
    $query2="SELECT * FROM emp";
    $link=mysqli_query($con,$query2);
    print "<table border cellpadding=1";
    print "<tr>";
    print "<th>EMPLOYEE ID</th>";
    print "<th>NAME</th>";
    print "<th>DEPARTMENT</th>";
    print "</tr>";
    while($info=mysqli_fetch_array($link)){
        print "<tr>";
        print "<td>".$info['empid']."</td>";
        print "<td>".$info['empname']."</td>";
        print "<td>".$info['dept']."</td>";
        print "</tr>";
    }
   
    ?>
    </body>
    </html>
    