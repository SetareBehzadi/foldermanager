<?php
include 'bootstrap/init.php';
$result = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = $_GET['action'];
    $params = $_POST;
    if ($action == "login") {
        $result = login($params['user_id']);
        if (!$result) {
            message('loggin is failed!');
        } else {
            redirect(site_url());
        }
    }
}
include 'view/login.php';
