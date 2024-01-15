<?php


function getdatabase()
{
    global $connect;
    require_once './connect/index.php';
    
    $query = "SELECT * FROM phieu_bao_hanh";
    $result = $connect->query($query);
    if ($result) {
        $data = $result->fetch_all(MYSQLI_ASSOC);
        return $data; 
    } else {
        echo 'Lỗi truy vấn: ' . $connect->error;
        return null;
    }
}


function updata($Ten_SP, $Ten_KH)
{
    global $connect;
    require_once './connect/index.php';
    
    $query = "INSERT INTO `phieu_bao_hanh` (`Ten_SP`, `Ten_KH`) VALUES ('$Ten_SP', '$Ten_KH')";
    $result = $connect->query($query);
    if ($result == true) {
        echo "Thành công";
        return true;
    } else {
        echo 'Lỗi truy vấn: ' . $connect->error;
        return null;
    }
}
?>
