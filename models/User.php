<?php
//connect to database class
require_once (dirname(__FILE__)).'/../database/db_connection.php';

class User extends db_connection {
    // registers new user
    public function register($username, $email, $phone, $location, $password){
        $sql = "INSERT INTO `users`(`username`, `email`,`phoneNumber`,`location`, `password`) VALUES ('$username', '$email', '$phone', '$location','$password')";

        return $this->db_query($sql);


    }
    
}