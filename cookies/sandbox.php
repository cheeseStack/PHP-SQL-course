<?php 

// file system part 1: https://netninja.dev/courses/php-mysql-for-beginnners/lectures/31185248

// read a file:

// $quotes = readfile('readme.txt');
// echo $quotes;


// give the file a variable name
$file = 'readme.txt';

// check if the file exists:
if(file_exists($file)){
    // read file
    echo readfile($file);
} else {
    echo 'file does not exist' . '<br>';
}

// copy file 
copy($file, 'copyfile.txt');


// find absolute path of a file
echo realpath($file)  . '<br>';

// filesize 
echo filesize($file) .  '<br>';

//rename file 
// rename($file, 'renamed.txt');



?>