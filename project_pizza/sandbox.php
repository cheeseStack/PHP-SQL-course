<?php

//ternary operators: like a concise if statement

// $score = 50;

//using if statement
// if($score >40){
//     echo 'high score!! :)';
// } else {
//     echo 'low score :(';
// }

//ternary operators: 
// echo $score > 40 ? 'high score!' : 'low score :(';


// superglobals: 
//eg.  $_GET['name'], $$_POST['name']
// format: $_NAME_IN_CAPS

// get server name
// echo $_SERVER['SERVER_NAME'] . '<br>';
// echo $_SERVER['REQUEST_METHOD'] . '<br>';
// echo $_SERVER['SCRIPT_FILENAME'] . '<br>';
// echo $_SERVER['PHP_SELF'] . '<br>'; // usefuul when creating forms

if(isset($_POST['name'])){

    //cookie for gender: name of cookie, value of cookie, how long saved for in seconds after time now.
    setcookie('gender', $_POST['gender'], time() + 86400);

    // start a session 
    session_start();

    // store the user input as the global variable $_SESSION
    $_SESSION['name'] = $_POST['name'];

    // redirect the user:
    header('Location: index.php');

    // echo $_SESSION['name'];
}


?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- <h1><?php echo $score > 40 ? 'high score!' : 'low score :('; ?></h1> -->

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    <label class="grey-text" for="name">Please enter your name below:</label><br>
    <input type="text" name="name">
<!-- cookies: https://netninja.dev/courses/php-mysql-for-beginnners/lectures/31185243 -->
    <select name="gender" id="">
        <option value="male">male</option>
        <option value="female">female</option>
    </select>
    <!-- submit button -->
    <input type="submit" name="submit" value="Submit">
</form>
    
</body>
</html>