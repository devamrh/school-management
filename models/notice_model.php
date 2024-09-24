<?php
function create_notice($db, $title, $content, $faculty_id) {
    $sql = "INSERT INTO notices (title, content, faculty_id) VALUES (?, ?, ?)";
    $stmt = $db->prepare($sql);
    $stmt->execute([$title, $content, $faculty_id]);
}

function update_notice($db, $id, $title, $content) {
    $sql = "UPDATE notices SET title = ?, content = ? WHERE id = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$title, $content, $id]);
}

function delete_notice($db, $id) {
    $sql = "DELETE FROM notices WHERE id = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$id]);
}

function get_all_notices($db) {
    $sql = "SELECT * FROM notices";
    $stmt = $db->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function get_notice_by_id($db, $id) {
    $sql = "SELECT * FROM notices WHERE id = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}