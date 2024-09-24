<?php
require_once 'config/database.php';
require_once 'controllers/notice_controller.php';
require_once 'controllers/admin_controller.php';

$action = $_GET['action'] ?? 'notice_index';

switch ($action) {
    case 'notice_index':
        notice_index($db);
        break;
    case 'notice_create':
        notice_create($db);
        break;
    case 'notice_edit':
        $id = $_GET['id'] ?? null;
        notice_edit($db, $id);
        break;
    case 'admin_index':
        admin_index($db);
        break;
    case 'admin_delete':
        $id = $_GET['id'] ?? null;
        admin_delete($db, $id);
        break;
    default:
        echo "404 Not Found";
        break;
}