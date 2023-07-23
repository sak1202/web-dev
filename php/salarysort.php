<html>
    <head><title>salarysort</title></head>
    <body>
        <?php
        $salary=  array('Bob'=>'10000','Mary'=>'3000','Rishi'=>'6000');
        asort($salary);
        foreach($salary as $key=>$value){
            echo $key."->".$value." ";
            }
        //ksort-desc krsort-asc asort-asc arsort-desc
        ?>
</body>
</html>