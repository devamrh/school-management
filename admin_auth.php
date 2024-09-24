<?php


session_start();

function is_admin()
{
    return isset($_SESSION['is_admin']) && $_SESSION['is_admin'] === true;
}

function require_admin()
{
    if (!is_admin()) {
        header('Location: index.php?action=admin_login');
        exit();
    }
}

function admin_login($username, $password)
{

    if ($username === 'admin' && $password === '123') {
        $_SESSION['is_admin'] = true;
        return true;
    }
    return false;
}

function admin_logout()
{
    unset($_SESSION['is_admin']);
    session_destroy();
}
