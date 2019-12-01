<?php
include 'partials/header.php';
require __DIR__.'/usuarios/users.php';

$user = [
    'id' => '',
    'nome' => '',
    'email' => '',
    'senha' => '',
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = createUser($_POST);

    header ("Location: index.php");
}

?>

<?php include '_form.php'; ?>