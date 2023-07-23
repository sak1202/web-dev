<html>
    <head><title>readwrite</title></head>
    <body>
        <?php
        $write=fopen("write.txt","w+") or die("unable to open file");
        echo "succesfully opened file";
        $file=file_get_contents("read.txt");
        fwrite($write,$file,20) or die("unable to write");
        echo "succesfully written";
        fclose($write)or die("unable to close");
        echo "successfully closed";
        ?>
</body>
</html>