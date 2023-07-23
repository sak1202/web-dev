<html>
    <head><titleForeach</title></head>
    <body>
<?php
$car=array('tata'=>array('nexa','neo'),
    'maruti'=>array('suzuki','swift'));
    foreach($car as $key=>$value){
    foreach($value as $name){
        echo $key."=>".$name."\n,";
    }}
?>
</body>