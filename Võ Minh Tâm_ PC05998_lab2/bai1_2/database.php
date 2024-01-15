<?php
namespace app; 

use mysqli;

class Database 
{
    public function __construct()
    {
        $servername = "localhost";
        $username = "root";
        $password = "minhtam2";


        $conn = new mysqli($servername, $username, $password);
        if (!$conn){
            die("Lỗi kết nói" .$conn->connect_error());
        }
        echo "kết nói thành công";
    }
}