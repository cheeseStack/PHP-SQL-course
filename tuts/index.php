<?php
    // echo 'hello, ninjas';
    // define('NAME', 'Yoshi');
    // $name ='yoshi';
    // $age = 30;
    
    // Stings tutorial: https://netninja.dev/courses/php-mysql-for-beginnners/lectures/31168589
    // $stringOne = 'my email is ';
    // $stringTwo = 'mario123@thenetninja.co.uk';

    // echo $stringOne.$stringTwo;

    // $name = 'mario';

    // echo 'Hey, my name is ' . $name;

    // echo "my name is $name";


    //escpaing characters inside strings
    // echo "the ninja screamed \"whaah\" ";
    
    // echo 'the ninja screamed again, "whaaaaa"'; 

    // finding characters by index:
    // echo $name[0];


    //String lengths: 
    // echo strlen($name);
    // echo strtoupper($name);
    // echo strtolower($name);
    // echo str_replace('m', 'w', $name);

    // Numbers: https://netninja.dev/courses/php-mysql-for-beginnners/lectures/31169912
    $radius = 25;
    $pi = 3.142;

    // basic: *, /, +. -, indices **,

    // echo $pi * $radius**2;

    // Order is BIDMAS as usual



    //increment and decrement operators: add or takeawy values

    //to add one:
//     $radius++;
//     echo $radius;


// // to minus one:
// $radius--;
// echo $radius;

// usual shorthands: 

// $age = 20;
// $age +=10;
// $age*=2;
// echo $age;

// echo floor($pi);

// $length = 7.9;
// echo floor($length);

// echo ceil($pi);

// echo pi();


// ARRAYS: https://netninja.dev/courses/php-mysql-for-beginnners/lectures/31169246


$peopleOne = ['shaun', 'crystal', 'ryu'];
// echo $peopleOne[0];

$peopleTwo = array('ken', 'chun-li');
// echo $peopleTwo[1];

$ages = [20, 30, 40, 50,];
// echo $ages does not work

// print a readable version
// print_r($ages);

// change elements inside arrays:
$aged[1] = 25;
// print_r($ages);

// to add a value: 
$ages[] = 60;
// print_r($ages);

array_push($ages, 70);

// echo count($ages);

// merge arrays together:

$peopleThree = array_merge($peopleOne, $peopleTwo);

// print_r($peopleThree);


// ASSOCIATIVE ARRAYS
// USE KEYS INSTEAD OF INDEXES

$ninjasOne = [
    'shaun' => 'black',
    'mario' => 'orange',
    'luigi' =>'brown'
];

// echo $ninjasOne['mario'];

// print_r($ninjasOne);

// arrays using array functions are
$ninjasTwo = array('bowser' => 'green', 'peach' => 'yellow');

// print_r($ninjasTwo);


// to add on a value in an array:
$ninjasTwo['toad'] = 'pink';
// print_r($ninjasTwo);

// to over-write a value:
$ninjasTwo['peach'] = 'orange';
// print_r($ninjasTwo);

// count the number of elements in an aray:
// echo count($ninjasOne);

// combinging arrays: array_merge

$ninjasThree = array_merge($ninjasOne, $ninjasTwo);
// print_r($ninjasThree);



// Multi-dimensional arrays: https://netninja.dev/courses/php-mysql-for-beginnners/lectures/31169244
//arrays within ARRAYS

// e.g. an array of blogs
// Below: indexed array
// $blogs = [
//     ['mario party', 'marion', 'lorem', 30],
//     ['mario kart cheats', 'toad', 'lorem', 25],
//     ['zelda hidden chests', 'link', 'lorem', 50]
// ];

//Below: associative array
$blogs = [
    ['title' => 'mario party', 'author' => 'mario', 'content' => 'lorem', 'likes' => 30],
    ['title' => 'mario kart cheats', 'author' => 'toad', 'content' =>'lorem', 'likes' => 25],
    ['title' => 'zelda hidden chests', 'author' => 'link', 'content' =>'lorem','likes' => 50]
];

// print_r($blogs);

// selecting by index: $blogs[blog no.][value index needed]
// print_r($blogs[1][1]);
// echo $blogs[2]['author'];

//count blogs:
// echo count($blogs);

$blogs[] = ['title' => 'castle party', 'author' => 'peach', 'content' => 'lorem', 'likes' => 100];
// print_r($blogs);

// to remove LAST items from an array: pop method

$popped = array_pop($blogs);
// print_r($popped); 



//LOOPS: https://netninja.dev/courses/php-mysql-for-beginnners/lectures/31169245

// for loops 
// $blogs = [blog1, blog22, blog3, blog4, ....]

// for ($i = 0; $i < count($blogs); $i++) {
//     // echo 'something'
// };

// //foreach method:
//     foreach($blogs as blog){
//         // echo 'something'
//     };

$ninjas = ['shaun', 'ryu', 'yoshi'];

// for($i = 0; $i < count($ninjas); $i++){
//     // echo $ninjas[$i] . '<br />';
//     // echo $ninjas[$i] . '<br>';
// }


// foreach($ninjas as $ninja){
//     // echo $ninja . '<br>';
// };


// $products = [
//     ['name' => 'shiny star', 'price' => 20],
//     ['name' => 'green shell', 'price' => 10],
//     ['name' => 'red shell', 'price' => 15],
//     ['name' => 'gold coin', 'price' => 5],
//     ['name' => 'lightning bolt', 'price' => 40],
//     ['name' => 'banana skin', 'price' => 2]
// ];


// foreach($products as $product){
//     echo $product['name'] . ': ' . $product['price'];
//     echo '<br>';
// };

// while loops:
    // $i = 0;
    // while ($i < count($products)){
    //     echo $products[$i]['name'];
    //     echo '<br>';
    //     $i++;
    // }


    // Booleans and Comparisons: https://netninja.dev/courses/php-mysql-for-beginnners/lectures/31170166
        // echo true;


        //comparisons

        // echo 5 < 10;
        // echo 5 > 10;
        // echo 5 == 10;


        // echo 10 == 10;
        // echo 5 != 10;
        // echo (2*5) == (50/5);
        // echo 5 >= 3;

        // string Comparisons
        // echo 'shaun' < 'yoshi';
        // echo 'shaun' > 'yoshi';
        // echo 'shaun' > 'Shaun';
        // echo 'mario' =='mario';
        // echo 'mario' == 'Mario';


        // // STRICT equal comparison: === looks at the data type.
        // echo 5 == '5'; // this will show true if the
        // echo 5 === '5' // this will show false

        // echo true == '1'; // this will show true 
        // echo false == ''; //this will show true too
        
        

        // CONDITIONAL STATEMENTS: https://netninja.dev/courses/php-mysql-for-beginnners/lectures/31170168

        // $price = 20;

        // if ($price < 10){
        //     echo 'the condition is met';
        // } elseif ($price < 30){
        //     echo 'elseif condition is met';
        // } else {
        //     echo 'the condition is not met';
        // }


$products = [
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'lightning bolt', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2]
];

// foreach($products as $product){

//     // if ($product['price'] < 15 && $product['price'] > 2) {
//     //     echo $product['name'] . '<br />';
//     // }
//     if ($product['price'] > 20 || $product['price'] < 10) {
//         echo $product['name'] . '<br />';
//     }
// }


// Continue and break: https://netninja.dev/courses/php-mysql-for-beginnners/lectures/31170165

// foreach ($products as $product){
//     if ($product['name'] === 'lightning bolt'){
//         break;
//     }

//     if($product['price'] > 15){
//         continue; //the continue keyword would SKIP the code where the price is >15
//     }
//     echo $product['name'] . '<br />';
// }


// FUNCTIONS : https://netninja.dev/courses/php-mysql-for-beginnners/lectures/31170167

function sayHello($name = 'shaun', $time = 'morning'){ // shaun is set as the default value
    // echo "good $time, $name";
}

// sayHello('mario', 'night');
// sayHello('yoshi');

// sayHello(); //the default value will be printed out

function formatProduct($product){
    // echo "the {$product['name']} costs £{$product['price']} to buy <br>"; // send to the HTML page
    return "the {$product['name']} costs £{$product['price']} to buy <br>"; // return allows it to be used in a variable elsewhere
}

// $formatted = formatProduct(['name' => 'gold star', 'price' => 20]);
// echo $formatted;


// Include and require: https://netninja.dev/courses/php-mysql-for-beginnners/lectures/31170169

// $ninjas = ['shaun', 'ryu', 'yoshi'];
//     echo $ninjas[1] . '<br>';

include('./ninjas.php');
require('./ninjas.php');

echo 'end of php'

?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my first PHP file</title>
</head>
<body>
    <!-- looping through items in an array to output a HTML template for each product -->

    <!-- <h1>Products</h1> -->

    <!-- <ul> -->
        <!-- Open the loop with the php tag and the opening bracket: {
            then close the loop with the closing bracket: } at the end
                then add the HTML template between-->
       <!-- <?php foreach($products as $product){ ?>

            <h3><?php echo $product['name'];?></h3>
            <p>£ <?php echo $product['price'];?></p>

       <?php } ?>
    </ul> -->


    <!-- Conditional Statements -->
    <!-- <div>
        <ul>
            <?php foreach($products as $product){ ?>
              <?php if($product['price'] > 15){ ?> 
                <li><?php echo $product['name'];?></li>
               <?php }?>
            <?php } ?>
        </ul>
    </div> -->
    

    <!-- Include and require, using the content.php file -->
    <?php include('content.php'); ?>
    <?php include('content.php'); ?>
    <?php include('content.php'); ?>
</body>
</html>


