<?php
//Open directory
$dir = dir("widgets/");

//List files in directory
while (($file = $dir->read()) !== false){
        //Make sure it's a .txt file
        if(strlen($file) < 5 || substr($file, -4) != '.txt')
                continue;
        $filename = (string)$file;
        echo "filename: " . substr($filename,0,-4). "<br />";
}

$dir->close();
?>