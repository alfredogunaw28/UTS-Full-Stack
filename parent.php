<?php

define("SERVER_NAME", "localhost");
define("DB_NAME", "uts-full-stack");
define("USER_NAME", "root");
define("PASSWORD", "");

class orangtua
{
    protected $mysqli;
    public function __construct()
    {
        $this->mysqli = new mysqli(SERVER_NAME, USER_NAME, PASSWORD, DB_NAME);
    }

    function __destruct()
    {
        $this->mysqli->close();
    }
}
