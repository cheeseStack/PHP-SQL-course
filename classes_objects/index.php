<!-- localhost: http://localhost/classes_objects/index.php -->
<!-- GitHub https://github.com/iamshaunjp/object-oriented-php -->

<?php 

// classes: https://netninja.dev/courses/object-oriented-php/lectures/31558148

class User {
    // properties & methods
    private $username; 
    private $email; 

    public function __construct($username, $email){
        $this->username = $username;
        $this->email = $email;
    }

    //function to add friend information
    public function addFriend(){
        return "$this->username added a new friend";
    }

    public function getName(){
        
    }
}

$userOne = new User('keith', 'rochfort.keith@gmail.com');
// $userTwo = new User();
echo $userOne->username;


// echo 'the class is ' . get_class($userOne);
echo $userOne->username . '<br>'; // without the dollar sign
echo $userOne->email . '<br>'; // without the dollar sign
echo $userOne->addFriend() . '<br>';

// print_r(get_class_vars('User'));
// print_r(get_class_methods('User'));


echo $userTwo->username . '<br>'; // without the dollar sign
echo $userTwo->email . '<br>'; // without the dollar sign
echo $userTwo->addFriend() . '<br>';

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
</head>
<body>
    
</body>
</html>