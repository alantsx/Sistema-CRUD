<?php
include 'partials/header.php';
require __DIR__.'/usuarios/users.php';

    if(!isset ($_GET['id'])) {
        include 'partials/not_found.php';
        exit;
    }

$userId = $_GET['id'];

$user = getUserById($userId);
    if (!$user) {
        include 'partials/not_found.php';
        exit;
    }

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    updateUser($_POST, $userId);
    header ("Location: index.php");
}


?>

<?php include '_form.php'; ?>
