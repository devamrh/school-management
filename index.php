<?php
require_once 'config/database.php';
require_once 'controllers/notice_controller.php';
require_once 'controllers/admin_controller.php';
require_once 'admin_auth.php';

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
    case 'admin_login':
        admin_login_page();
        break;
    case 'admin_login_submit':
        admin_login_submit();
        break;
    case 'admin_logout':
        admin_logout();
        header('Location: index.php');
        exit();
    case 'admin_index':
        require_admin();
        admin_index($db);
        break;
    case 'admin_delete':
        require_admin();
        $id = $_GET['id'] ?? null;
        admin_delete($db, $id);
        break;
    default:
        echo "404 Not Found";
        break;
}