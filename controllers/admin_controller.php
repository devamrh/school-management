<?php
require_once 'models/notice_model.php';

function admin_index($db) {
    $notices = get_all_notices($db);
    include 'views/admin/dashboard.php';
}

function admin_delete($db, $id) {
    delete_notice($db, $id);
    header('Location: index.php?action=admin_index');
    exit;
}