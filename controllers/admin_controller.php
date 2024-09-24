<?php
require_once 'models/notice_model.php';
require_once 'admin_auth.php';

function admin_login_page() {
    include 'views/admin/login.php';
}

function admin_login_submit() {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    
    if (admin_login($username, $password)) {
        header('Location: index.php?action=admin_index');
        exit();
    } else {
        $_SESSION['login_error'] = 'Invalid username or password';
        header('Location: index.php?action=admin_login');
        exit();
    }
}

function admin_index($db) {
    $notices = get_all_notices($db);
    include 'views/admin/dashboard.php';
}

function admin_delete($db, $id) {
    delete_notice($db, $id);
    header('Location: index.php?action=admin_index');
    exit;
}