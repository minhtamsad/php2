<?php

namespace App;

use mysqli;

class Database
{
    public function __construct()
    {
        $servername = "localhost";
        $username = "root";
        $password = "minhtam2";

        //$conn = mysql_connect($servernaem,$username,$password);
        $conn = new mysqli($servername, $username, $password);

        if (!$conn) {
            //die("Connection failed: " . mysqli_connect_error());
            die("Connection failed: " . $conn->connect_error());
        }

        echo "Connection successful<br/>";
    }
    public function HelloWord()
    {
        echo "Hello Word";
    }
}