<?php
function isLoggedIn(){
    return isset($_SESSION['login'])?true:false;
}

function login($userId){
    if (is_null($userId)){
        return false;
    }
    $_SESSION['login'] = $userId;
    dd($_SESSION['login']);
    return true;
}
function logout(){
    unset($_SESSION['login']);
}
function getLoggInUser(){
    return $_SESSION['login'];
}