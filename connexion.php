<?php
$conn = new mysqli("localhost","root","","project1");

if ($conn->connect_error){
    die("Connexion echouée: " . $conn->connect_error);
}

$sql = "SELECT id, Name, password FROM user";
$result = $conn->query($sql);
?>

<form action="" method='post'>
    <input type="text" name='user'>
    <input type="password" name='password'>
        <button type='submit'>Se connecter</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['user'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, password FROM user WHERE Name = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $pwd=hash('sha256',$password);
        $stmt->bind_result($id, $hashed_password);
        $stmt->fetch();
        $sql = "INSERT INTO `user` (`id`, `Name`, `Date of Birth`, `Country`, `password`) VALUES (NULL,'$username',NULL,NULL,'$pwd')";
        
        if (password_verify($password, $hashed_password)) {
            echo "Connexion réussie ! Bienvenue, " . htmlspecialchars($username) . "!";
        } else {
            echo "Mot de passe incorrect.";
        }
    } else {
        echo "Nom d'utilisateur non trouvé.";
    }

    $stmt->close();
}

$conn->close();
?>



