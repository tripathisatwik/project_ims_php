<?php
// global variable in php
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "project_ims_php");

// databse connection config class
class DbConfig{
    // database connection function
    public static function getConnection(){

        // creating db connection in OOP PHP
        $connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        return $connection;
    }
}