<!-- course files https://netninja.dev/courses/object-oriented-php/lectures/31558138 -->

<!-- page at <!-- localhost: http://localhost/classes_objects/constructor.php --> 

<?php 

class User {

    public $username;
    protected $email;
    public $role = 'member';

    // public $username;
    // public $email;

    public function __construct($username, $email){
        $this->username = $username;
        $this->email = $email;
    }

    public function __destruct(){
        echo "the user $this->username was removed <br>";
    }

    public function __clone(){
        $this->username = $this-> username . '(cloned) <br>';
    }

    public function addFriend(){
        return "$this->username added a new friend";
    }

    public function message(){
        return "$this->email, an admin, sent a new message";
    }

    public function getUsername(){
        // return $this->username;
        return $this->username;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        if(is_string($email) && strlen($email) > 2 && strpos($email, '@') > -1){
            $this->email = $email;
            return "the email has been updated to $email";
        } else {
            return "the email you entered ($email) is not valid";
        }
    }
}

// inheritance: extending a class with all properties and methods

class AdminUser extends User {

    public $level;
    public $role = 'admin';

    public function __construct($username, $email,$level){
        $this->username = $username;
        parent::__construct($username, $email);
    }

    public function message(){
        return "$this->email sent a new message";
    }


}


$userOne = new User('keith', 'rochfort.keith@gmail.com');
$userTwo = new User('spongebob', 'spongebob@gmail.com');
$userThree = new AdminUser('patrick', 'patrick@gmail.com', 5);

$userFour = clone $userOne;
echo $userFour->username;

echo $userThree->getUsername() . '<br>';
echo $userThree->getEmail() . '<br>'; 
echo $userOne->message() . '<br>'; 
echo $userTwo->message() . '<br>'; 
echo $userThree->message() . '<br>'; 



// echo $userOne->getUsername() . '<br>';
// echo $userOne->getEmail() . '<br>';
// echo $userOne->addFriend() . '<br>';

// echo $userTwo->getUsername() . '<br>';
// echo $userTwo->getEmail() . '<br>';
// echo $userTwo->addFriend() . '<br>';


// // set email:
// echo $userOne->setEmail('infokrcab.co.uk') . '<br>'; // this will give an error message as does not include @
// echo $userOne->getEmail() . '<br>';


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