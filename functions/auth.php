<?php

function is_logged_in() {
    if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
        foreach (file_to_array(DB_FILE) as $user) {
            if ($user['username'] === $_SESSION['username'] && $user['password'] === $_SESSION['password']) return true;
        }
        session_destroy();
        header('location:' . ROOT_URL . '/pages/login.page.php');
    }
    return false;
}

function logout($redirect = false) {
    session_destroy();
    setcookie(session_name(), '', time() -1, '/');
    if ($redirect) header('location:' . ROOT_URL . 'pages/login.page.php');
}