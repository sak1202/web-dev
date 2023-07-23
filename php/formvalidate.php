<html>
    <head><title>FormValidate</title></head>
    <body>
        <?php
        $flag="OK";
        $msg="";
        $reg='[^a-z]';
        if(!$_POST["name"]){
            if(preg_match($reg,$_POST["name"])){
                $flag="NOTOK";
                $msg="Enter name in lowercase only";
            }
        }
        else if(!$_POST['age']){
            if($_POST["age"]>30||$_POST["age"]<17){
                $flag="NOTOK";
                $msg="Age not appropriate";
            }

        }
        else if(!$_POST["email"]){
              $flag="NOTOK";
                $msg="Enter email";
            
        }

        if($flag=="NOTOK"){
            echo "<h2>".$msg."</h2>"."<input type='button' value='back' onclick='history.go.(-1)'>";
                }
                else{
                    echo "All entries are correct";
                }
        ?>
</body>
</html>