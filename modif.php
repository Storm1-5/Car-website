<?php
include 'user.php';

if (!isset($_GET['id'])) {
    die('ID de l\'article non spécifié.');
}

$id = $_GET['id'];

$stmt = $pdo->prepare("SELECT * FROM articles WHERE id = :id");
$stmt->execute(['id' => $id]);
$article = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$article) {
    die('Article non trouvé.');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titre = $_POST['titre'];
    $contenu = $_POST['contenu'];

    $stmt = $pdo->prepare("UPDATE articles SET titre = :titre, contenu = :contenu WHERE id = :id");
    $stmt->execute(['titre' => $titre, 'contenu' => $contenu, 'id' => $id]);

    header('Location: articles.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Éditer l'article</title>
</head>
<body>
    <h1>Éditer l'article</h1>
    <form action="modif.php?id=<?= $article['id'] ?>" method="POST">
        <label for="titre">Titre:</label>
        <input type="text" name="titre" id="titre" value="<?= htmlspecialchars($article['titre']) ?>" required><br>

        <label for="contenu">Contenu:</label>
        <textarea name="contenu" id="contenu" required><?= htmlspecialchars($article['contenu']) ?></textarea><br>

        <button type="submit">Mettre à jour</button>
    </form>
    <a href="articles.php">Retour à la liste</a>
</body>
</html>
