<!DOCTYPE html>
<?php
include 'models/Database.php';
include 'models/homemodel.php';
include 'pages/page.php';
include 'pages/home.php';
$page = isset($_GET['page']) && $_GET['page'] ? $_GET['page'] : 'home';
$action = isset($_GET['action']) && $_GET['action'] ? $_GET['action']: 'index';

$page = ucfirst(strtolower($page));
$action= strtolower($action);

if (class_exists($page)) {
    $p = new $page();
    if (method_exists($page, $action)) {
        $p ->$action();
    } else {
        echo "error";
    }
} else {
    echo "error";
}
?>
