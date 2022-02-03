<?php
//connect to database class
require_once (dirname(__FILE__)).'/../controllers/UserController.php';

// keeping track of errors
$errors = array();

// check if button is clicked
if(isset($_POST["submit"])){
    // grab form data
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $location = $_POST["location"];
     $contact = $_POST["contact"];


    // validate data

    // check if fields are empty
    if(empty($username)){array_push($errors, "name is required");}
    if(empty($email)){array_push($errors, "email is required");}
    if(empty($password)){array_push($errors, "password is required");}

    // check if fields are of appropriate length
    if(strlen($username) > 100){array_push($errors, "name must be under 100 characters");}
    if(strlen($email) > 100){array_push($errors, "email must be under 100 characters");}

    // check if passwords are the same
    
    // validate email with regex
    $regex = "/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";
    // set error if not an email
    if(!preg_match($regex, $email)){array_push($errors, "enter a valid email");}
    
 
  
    // if form is fine
    if(count($errors) == 0){
        // upload image

        // check if uploaded successfully and then add new user
        // note we are storing the path to the image in the database
        
            $register_user = register_new_user($username, $email, $password, $location, $contact);

            // check if user is registered
            if(!$register_user){
                echo "failed";
            }else{
                // redirect
                echo "success";
                header("location: login.php");

            }
        
    }
    
}