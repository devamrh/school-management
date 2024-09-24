<?php
require_once 'models/notice_model.php';

function notice_index($db) {
    $notices = get_all_notices($db);
    include 'views/notice/create.php';
}

function notice_create($db) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $title = $_POST['title'];
        $content = $_POST['content'];
        $faculty_id = 1; // Assuming faculty ID is 1 for simplicity
        create_notice($db, $title, $content, $faculty_id);
        header('Location: index.php?action=notice_index');
        exit;
    }
}

function notice_edit($db, $id) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $title = $_POST['title'];
        $content = $_POST['content'];
        update_notice($db, $id, $title, $content);
        header('Location: index.php?action=notice_index');
        exit;
    } else {
        $notice = get_notice_by_id($db, $id);
        include 'views/notice/edit.php';
    }
}