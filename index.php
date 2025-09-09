<?php
// index.php
require_once 'config/database.php';
require_once 'models/User.php';
require_once 'controllers/UserController.php';

// Basit routing
$action = $_GET['action'] ?? 'index';
$controller = new UserController();

switch ($action) {
    case 'create':
        $controller->create();
        break;
    case 'store':
        $controller->store();
        break;
    case 'edit':
        $controller->edit();
        break;
    case 'update':
        $controller->update();
        break;
    case 'delete':
        $controller->delete();
        break;
    default:
        $controller->index();
        break;
}
?>

