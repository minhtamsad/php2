<body>
<table border="1">
<?php
global $getdata;
foreach($getdata as $key){
    echo ' 
    <tr>
        <td>'.$key['Ten_KH'].'</td>
    </tr>
';
}
global $updata;
echo $updata ?? "";
?>
<form method = "post">
    <input type="text" name = "Ten_SP">
    <input type="text" name = "Ten_KH">
    <input type="submit" name = "minhtam">
</form>

</table>
</body>
