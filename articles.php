<?php
include 'user.php';

$stmt = $pdo->query("SELECT * FROM articles ORDER BY date_creation DESC");
$articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des articles</title>
</head>
<body>
    <h1>Liste des articles</h1>
    <a href="creer.php">Ajouter un nouvel article</a>
    <table border="1">
        <tr>
            <th>Titre</th>
            <th>Date de création</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($articles as $article): ?>
            <tr>
                <td><?= htmlspecialchars($article['titre']) ?></td>
                <td><?= $article['date_creation'] ?></td>
                <td>
                    <a href="modif.php?id=<?= $article['id'] ?>">Éditer</a> | 
                    <a href="suppr.php?id=<?= $article['id'] ?>" onclick="return confirm('Voulez-vous vraiment supprimer cet article ?')">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
