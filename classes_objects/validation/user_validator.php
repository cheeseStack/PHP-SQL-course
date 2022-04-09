<?php 

// create a user validator to handle validation

// construct(or) which takes in POST data from a form and

// check required "fields to check" are present in the data

// create methods to validate individual fields

// -- a method to validate a username and password

// -- a method to validate an email and password

// return an erroy array once all checks are done if there are errors

class UserValidator {

    private $data;
    private $errors = [];
    private static $fields = ['username', 'email'];


    public function __construct($post_data){
        $this->data = $post_data;
    }


    // methods:

    // validate form to get data and check fields are in there, then call the next 2 methods
    public function validateForm(){
        foreach(self::$fields as $field){
            if(!array_key_exists($field, $this->data)){ // we just want to do something if it does not exist, hence !
                trigger_error("$field is not present in the data");
                return;
            }
        }
        
        $this->validateUsername();
        $this->validateEmail();
        return $this->errors;
    }

    // validate username field. private as it will only be called from inside the function
    private function validateUsername(){
        
        $val = trim($this->data['username']);
        
        if(empty($val)){
            $this->addError('username', 'username cannnot be empty');
        } else { // regex https://www.php.net/manual/en/function.preg-match.php
            if(!preg_match('/^[a-zA-Z0-9]{6,12}$/', $val)){
                $this->addError('username', 'username must be between 6 and 12 characters long, and be only letters and numbers');
            }
        }
    }

    // validate email field. private as it will only be called from inside the function
    private function validateEmail(){
        $val = trim($this->data['email']);

        if(empty($val)){
            $this->addError('email', 'email cannot be empty');
        } else {
            if(!filter_var($val, FILTER_VALIDATE_EMAIL)){ // built-in email validation filter
                $this->addError('email', 'must be a valid email');
            }
        }
    }

    // add error message
    private function addError($key, $val){
        $this->errors[$key] = $val;
    }
}



?>