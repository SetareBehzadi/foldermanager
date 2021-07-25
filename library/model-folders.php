<?php
 $userId = (isset($_SESSION['login']))?$_SESSION['login']:null;
function getAllfolders($basePath=null){

    if (!is_dir($basePath)){
        echo ($basePath);
    }else{
        $lastParent = $basePath;
        $result = $files = array_diff(scandir($basePath,1), array('.', '..'));
    //    dd($result);
        return (array)$result ;
    }
}