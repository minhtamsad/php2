

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Tên Sản phẩm</th>
      <th scope="col">Tên khách hàng</th>
      <th scope="col">Ngày bảo hành</th>
    </tr>
  </thead>
<?php
global $getdata;
$cout = 1;
foreach($getdata as $key){
    echo ' 

  <tbody>
    <tr>
      <th scope="row">'.$cout ++.'</th>
      <td>'.$key['Ten_SP'].'</td>
      <td>'.$key['Ten_KH'].'</td>
      <td>'.$key['ngay_BH'].'</td>
    </tr>
  </tbody>
';
}
?>
</table>
</div>
</body>
</html>


