<?php 

require('user_validator.php');
// check if form os submitted:
    if(isset($_POST['submit'])){
        // validate entries 
        $validation = new UserValidator($_POST);
        $errors = $validation->validateForm();    
// save data to a database (not as part of this course)
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css" type="text/css">
    <title>Document</title>
</head>
<body>

    <div class="new-user">
        <h2>Create new user</h2>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

        <label>username: </label>
            <input type="text" name="username" value="<?php echo $_POST['username'] ?? '' ?>">
            <div class="error">
                <?php echo $errors['username'] ?? '' ?>
            </div>
            <label>email: </label>
            <input type="text" name="email" value="<?php echo $_POST['email'] ?? '' ?>">
            <div class="error">
                <?php echo $errors['email'] ?? '' ?>    
            </div>
            <input type="submit" value="submit" name="submit" >
        </form>
    </div>
    
</body>
</html>