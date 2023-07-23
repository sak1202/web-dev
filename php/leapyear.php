<html>
    <head><title>Leap year</title></head>
    <body>
        <?php
            $year=2004;
            if($year%400==0||($year%4==0&&$year%100!=0)){
                echo $year."is leap year";
            }
            else{
                echo $year."not a leap year";
            }
        ?>
</body>
</html>