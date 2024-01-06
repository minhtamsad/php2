<?php

$connect = new mysqli('localhost', 'root', 'minhtam2', 'quanlybaohanhsanpham');


if ($connect->connect_error) {
    die('Kết nối không thành công: ' . $connect->connect_error);
}