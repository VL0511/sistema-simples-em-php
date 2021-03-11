<?php

/**
 * Class of connection to the database.
 * session_start() indicates that we are starting a session to the database.
*/

session_start();

class Connection
{

    public static $instace;
    
    public static function getConnection()
    {
        /**
         * Database connection function
         * Variable "$instance" receives a reference to the database connection within the getConnection function.
        */
        if(!isset(self::$instace))
        {
            self::$instace = new PDO("mysql:host=localhost;dbname=snowl", "zury", "root");
            self::$instace->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }return self::$instace;
    }
}