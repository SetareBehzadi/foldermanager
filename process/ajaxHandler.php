<?php
include "../bootstrap/init.php";
if ($_POST['user_id']){
    $userId = $_POST['user_id'];
    $basePath = BASE_PATH.$userId.'/';
}
$files = array_diff(scandir($basePath), array('.', '..'));
var_dump($files);