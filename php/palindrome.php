<html>
    <head><title>Palindrome</title></head>
    <body>
        <?php
        $string="Hi We are BTS";
        $arr=array('Yo','we','are','BTS');
        $new="malayalam";
        echo "length of new is ".strlen($new);
        $array=explode(" ",$string);
        print_r($array);
        echo implode(" ",$arr);
        echo strpos($new,"ti");
        $rev=strrev($new);
        if($new==$rev){
            echo " is palindrome";
        }
        else{
            echo " not a palindrome";
        }
        ?>
    </body>
</html>