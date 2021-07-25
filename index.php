<?php
include 'bootstrap/init.php';

if (isset($_GET['logout']) ){
    logout();
}

if(!isLoggedIn()){
    // redirect to aut form
    redirect(site_url('auth.php'));
}
$user = getLoggInUser();
$folders = [];
if ($userId){
    $basePath = BASE_PATH.$userId.'/';
    $lastParent = $basePath;
}


if (isset($_GET['folderName']) && !is_null($_GET['folderName'])){
    $parent = (isset($_GET['parent']))?$_GET['parent']:null;
    $lastParent = $lastParent.$parent;
    $basePath = $lastParent.'/'.$_GET['folderName'] ;
    $folders= getAllfolders($basePath);
    $lastParent = $basePath;
}else{
    $folders = getAllfolders($lastParent);
}


include 'view/folders.php';
