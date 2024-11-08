<?php
include 'user.php';

if (!isset($_GET['id'])) {
    die('ID de l\'article non spécifié.');
}

$id = $_GET['id'];

$stmt = $pdo->prepare("DELETE FROM articles WHERE id = :id");
$stmt->execute(['id' => $id]);

header('Location: articles.php'); // Redirection après suppression
exit();
?>
