<html>
    <head><title>Iterator</title></head>
    <body>
<?php
 $car=array('tata'=>array('nexa','neo'),
 'maruti'=>array('suzuki','swift'));
          $iter=new ArrayIterator($car);
    $iter->rewind();
    while($iter->valid()){
        echo $iter->key()." has ".$iter->current()."\n,";
        $iter->next();
    }
?>
</body>
</html>