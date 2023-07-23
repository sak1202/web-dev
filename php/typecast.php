<html>
    <head><title>Typecast</title></head>
    <body>
        <?php
         
        echo "automatic type cast"."<br/>";
        $a="9";
         echo gettype($a)."<br/>";
        $a+=1;
        echo gettype($a)."<br/>";
        $a+=1.5;
        echo gettype($a)."<br/>";
        echo "explicit type casting"."<br/>";
        $x="9";
        echo gettype($x)."<br/>";
        $x=(boolean)$x;
        echo gettype($x)."<br/>";
        $x=(integer)$x;
        echo gettype($x)."<br/>";
        $x=(float)$x;
        echo gettype($x)."<br/>";
        ?>
        </body>
        </html>
