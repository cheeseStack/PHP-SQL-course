<?php 

include('config/db_connect.php');
// the code here will handle the inputted data: isset checks if data has been sent
$email = $title = $ingredients = '';
// code to make the form error messages appear in the form itself: https://netninja.dev/courses/php-mysql-for-beginnners/lectures/31170399
$errors = array('email' => '', 'title' => '', 'ingredients' => '');


// below: POST method to hide the information inputted
if(isset($_POST['submit'])){


// Basic Form Validation: https://netninja.dev/courses/php-mysql-for-beginnners/lectures/31170299
//checking that the EMAIL has been inputted
    if(empty($_POST['email'])){ 
        $errors['email'] = 'An email is required <br>';
    } else {
        $email = $_POST['email']; // the email is stored as a variable, $email
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){ // built-in PHP validation. if the email is NOT valid, then ! makes it return true and gives user feedback
            $errors['email'] = 'email must be a valid email address';
        }
    }
    //checking that the TITLE has been inputted
    if(empty($_POST['title'])){ 
        $errors['title'] = 'A  title is required <br>';
    } else { //
        $title = $_POST['title']; 
        // regex: ^ = start; $ = end; \s is spaces; + is as many letters as the user wants
        if(!preg_match('/^[a-zA-Z\s]+$/', $title)){//preg means parameter regular expression, then match it to itself
            $errors['title'] = 'title must be letters and spaces only';      
        }
    }
    //checking that the INGREDIENTS has been inputted
    if(empty($_POST['ingredients'])){ 
        $errors['ingredients'] = 'Ingredients are required <br>';
    } else {
        $ingredients = $_POST['ingredients']; 
        // regex: ^ = start; $ = end; \s is spaces; + is as many letters as the user wants
        if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){//preg means parameter regular expression, then match it to itself
            $errors['ingredients'] = 'Ingredients must be separated by a comma, and be letters and spaces only';      
        }
    }
    // redirecting users to the homepage once a form has been submitted: https://netninja.dev/courses/php-mysql-for-beginnners/lectures/31170395
    // check if there are any errors using array_filter() function
    if(array_filter($errors)){ // this returns True if there are errors in the form; false if the string is empty
        // echo 'there are errors in the form';
    } else {
        // saving inputted data to the database: https://netninja.dev/courses/php-mysql-for-beginnners/lectures/31185052
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $ingredients = mysqli_real_escape_string($conn, $_POST['ingredients']);
        
        //create sql 
        $sql = "INSERT INTO pizzas(title, email, ingredients) VALUES('$title', '$email', '$ingredients')"; 
        
        // save to db and check:
        if(mysqli_query($conn, $sql)){
            // success: redirect to the hompage where the pizza will be added
            header('Location: index.php');
        } else {
            //error
            echo 'query error: ' . mysqli_error($conn);
        }
    }
// once there are no errors, the data can be added to the database: https://netninja.dev/courses/php-mysql-for-beginnners/lectures/31185052
// we need to save: email, title, ingredients, description

}// end of the POST check


?>


<!DOCTYPE html>
<html>
<!-- Below: header -->
<?php include('templates/header.php'); ?>

<!-- Below: Add pizza form; container with Materialize CSS -->
<section class="container grey-text">
    <h4 class="center">Add a Pizza</h4>
    <!-- Below:: form sent with GET request: data shown in search bar -->
    <!-- <form class="white" action="add.php" method="GET"> -->
    <!-- form sent with POST request: data shown in search bar -->
    <form class="white" action="add.php" method="POST">
    <!-- form sent with GET request: data shown in search bar -->
    <form class="white" action="add.php" method="GET">
        <!-- Below: input for email with valuidation from W4 schools: https://www.w3schools.com/tags/att_input_pattern.asp -->
        <label for="email">Your Email:</label>
        <div class="red-text"><?php echo $errors['email']; ?></div>
        <input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>"> 
        <!-- email validation HTML 5: pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" -->
        <!-- below: input for pizza name / title -->
        <label for="title">Pizza Title:</label>
        <div class="red-text"><?php echo $errors['title']; ?></div>
        <input type="text" name="title" value="<?php echo htmlspecialchars($title) ?>">
        <!-- below: input for ingredients -->
        <label for="ingredients">Ingredients (comma separated):</label>
        <div class="red-text"><?php echo $errors['ingredients']; ?></div>
        <input type="text" name="ingredients" placeholder="e.g. cheese, tomato, mushroom" value="<?php echo htmlspecialchars($ingredients) ?>">
        <!-- Below: submit button -->
        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>

<!-- Below: footer import-->
<?php include('templates/footer.php'); ?>

    
</html>