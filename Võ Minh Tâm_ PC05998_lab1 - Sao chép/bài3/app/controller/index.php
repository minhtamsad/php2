<?php
require_once './model/model.php';

$getdata = getdatabase();

$Ten_SP = $_POST['Ten_SP'] ?? "";
$Ten_KH = $_POST['Ten_KH'] ?? "";
if (isset($_POST['minhtam'])){
    $updata = updata($Ten_SP, $Ten_KH);
}else{
    echo 'Bạn hãy nhập dữ liệu';
}

require_once './view/index.php';