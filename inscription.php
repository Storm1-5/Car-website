<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project1";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, name, price FROM products";
$result = $conn->query($sql);
?>

<form action="" method='post'>
    <input type="text" name='pseudo'>
    <input type="password" name='password'>
    <input type='submit' name="valider" value="S'inscrire"></input>
</form>
<?php
    if (isset($_POST["valider"])){
        
        $pseudo = $_POST['pseudo'];
        $pass = $_POST['password'];
        if($pseudo != "" && $pass != ""){
            
            $pwd=hash('sha256',$pass);
            
            $sql = "INSERT INTO `user` (`id`, `Name`, `Date of Birth`, `Country`, `password`) VALUES (NULL,'$pseudo',NULL,NULL,'$pwd')";

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } 
            else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
    }
    $conn->close();
        
} //
?>

