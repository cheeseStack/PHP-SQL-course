<?php 

// file system part 2:https://netninja.dev/courses/php-mysql-for-beginnners/lectures/31185244

$file = 'readme.txt';

// opening a file for reading
$handle = fopen('readme.txt', 'r');

// opening a file for reading and writing over : r+
$handle = fopen('readme.txt', 'r+');

// opening a file for reading and writing and appending at the END: a+
$handle = fopen('readme.txt', 'a+');


// read the file and
// echo fread($handle, filesize($file)) . '<br>' ; // read all
// echo fread($handle, 112) . '<br>' ; /// read 112 bytes


// // read a single line and
// echo fgets($handle) . '<br />';
// echo fgets($handle) . '<br />';


// // read a single character and
// echo fgetc($handle) . '<br />';
// echo fgetc($handle) . '<br />';


// writing to a file
fwrite($handle, "\nEverything popular is wrong" );

// close file:
fclose($handle);


// delete file
unlink($file);




?>