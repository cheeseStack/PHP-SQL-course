<!-- Developer site: http://localhost/project_pizza/ -->

<?php 

// connect to the MySQL database: MySQLi (MySQL improved) or PDO (php data object(for more experienced users)): https://netninja.dev/courses/php-mysql-for-beginnners/lectures/31170397
// connect to whole database using MySQLi: MySQLi
// $conn = mysqli_connect('localhost', 'keith', 'Spongebob@2019', 'ninja_pizza');

// // check the connection works:
// if(!$conn){
//     echo 'connection error: ' . mysqli_connect_error();
// } // this code is now in config/db_connect.php file and is included below:

include('config/db_connect.php');


// write query for all pizzas; pizzas is the tale
$sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';

$result = mysqli_query($conn, $sql);
//make query and get result

// fetch the requlting rows as an array
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);
// $pizzas = mysqli_fetch_assoc($result);

// free the reqult from memory
mysqli_free_result($result);

// close the SQL connection:
mysqli_close($conn);

// below, just to see that the array prints to the screen and data is provided
// print_r($pizzas);

// explode function to make ingredients into an array to then display as a list:https://netninja.dev/courses/php-mysql-for-beginnners/lectures/31185054
// explode(',', $pizzas[0]['ingredients']);


?>


<!DOCTYPE html>
<html>

<?php include('templates/header.php'); ?>


<h4 class="center grey-text">Pizzas</h4>

<div class="container">
    <div class="row">
        <!-- here we will cycle through the array of pizzas in thte database -->
        <?php foreach($pizzas as $pizza): ?>
            <div class="col s6 m4">
                <div class="card z-depth-0">
                    <img src="img/pizza.svg" alt="pizza" class="pizza">
                    <div class="card-content center">
                        <h6><?php echo htmlspecialchars($pizza['title']);?></h6>
                        <!-- <div><?php echo htmlspecialchars($pizza['ingredients']);?></div> -->
                        <!-- below: output th eingredients as a column list instead of comma-separated list -->
                        <?php foreach(explode(',', $pizza['ingredients']) as $ing): ?>
                            <li><?php echo htmlspecialchars($ing)?></li>
                        <?php endforeach ?>
                    </div>
                    <!-- below: link to take us to an individual details page -->
                    <div class="card-action right-align">
                        <a class = "brand-text" href="details.php?id=<?php echo $pizza['id']?>">more info</a>
                    </div>
                </div>
            </div>
        <?php endforeach ?>

        <?php if(count($pizzas) >= 2): ?>
            <p>there are 2 or more pizzas</p>
        <?php else: ?>
            <p>there are less than 2 pizzas</p>            
        <?php endif;?>

    </div>
</div>

<?php include('templates/footer.php'); ?>

    



</html>