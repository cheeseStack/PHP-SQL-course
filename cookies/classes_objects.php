<?php 
// classes and objects: https://netninja.dev/courses/php-mysql-for-beginnners/lectures/31185246

class User {

    // initially set to Public so they canbe changed anywhere
    // properties:
    private    $email;
    private $name;

    // constructors: underscore, underscore, construct: __constrtuct
    public function __construct($name, $email){
        // $this->email = 'mario@thenetninja.co.uk'; // hard-coded
        // $this->name = 'mario';
        $this->email = $email;
        $this->name = $name;
    }

    //functions 
    public  function login(){
        echo $this->name . ' has logged in';
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        if(is_string($name) && strlen($name) > 1){
            $this->name = $name;
            return "the name has been updated to $name";
        } else {
            return "$name is not a valid name";
        }
        
    }
}

 // instances: create a variable with the class User:
//  $userOne = new User();

 // to use a function: ->
//  $userOne->login(); // brackets at the end as it is a function
//  echo $userOne->name; // no brackets as not a function, just a property
//  echo $userOne->email; // no brackets as not a function, just a property

 $userTwo = new User('Keith', 'rochfort.keith@gmail.com');


//  echo $userTwo->getName() . '<br>';
 echo $userTwo->setName('Keith Rochfort') . '<br>';
 echo $userTwo->getName();


//  echo $userTwo->email;
//  echo '<br>';
//  echo $userTwo->name;
//  echo '<br>';

//  $userTwo->login(); // brackets for functions


 // creating private classes so that values cannot be updated outside the class: https://netninja.dev/courses/php-mysql-for-beginnners/lectures/31185249



?>