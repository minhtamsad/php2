<?php


function getdatabase()
{
    global $connect;
    require_once './connect/index.php';
    
    $query = "SELECT * FROM phieu_bao_hanh";
    $result = $connect->query($query);
    if ($result) {
        $data = $result->fetch_all(MYSQLI_ASSOC);
        $result->free();
        return $data; 
    } else {
        echo 'Lỗi truy vấn: ' . $connect->error;
        return null;
    }
}
?>
