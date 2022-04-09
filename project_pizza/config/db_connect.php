<?php 
// connect to the MySQL database: MySQLi (MySQL improved) or PDO (php data object(for more experienced users)): https://netninja.dev/courses/php-mysql-for-beginnners/lectures/31170397
// connect to whole database using MySQLi: MySQLi
$conn = mysqli_connect('localhost', 'keith', 'Spongebob@2019', 'ninja_pizza');

// check the connection works:
if(!$conn){
    echo 'connection error: ' . mysqli_connect_error();
}
?>