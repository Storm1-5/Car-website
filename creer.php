<?php
include 'user.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titre = $_POST['titre'];
    $contenu = $_POST['contenu'];

    $stmt = $pdo->prepare("INSERT INTO articles (titre, contenu) VALUES (:titre, :contenu)");
    $stmt->execute(['titre' => $titre, 'contenu' => $contenu]);

    header('Location: articles.php'); // Redirection après l'ajout
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un article</title>
</head>
<body>
    <h1>Ajouter un nouvel article</h1>
    <form action="creer.php" method="POST">
        <label for="titre">Titre:</label>
        <input type="text" name="titre" id="titre" required><br>

        <label for="contenu">Contenu:</label>
        <textarea name="contenu" id="contenu" required></textarea><br>

        <button type="submit">Ajouter</button>
    </form>
    <a href="articles.php">Retour à la liste</a>
</body>
</html>
