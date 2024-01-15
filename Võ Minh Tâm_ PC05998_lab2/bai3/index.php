<?php


spl_autoload_register(function($class){
    var_dump($class);
    require  $class.'.php';
});

use app\Database as cat;

$db = new cat();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    nhà tôi
</body>
</html>
