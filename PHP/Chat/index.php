<?php
    
if (isset($_POST["user"])){

    $host = "localhost";
    $bd = "weekend";
    $user = "root";
    $password = "root";
     
    try {
        $connexion = new PDO("mysql:host=$host; dbname=$bd", $user, $password);
        $requete = $connexion -> prepare("INSERT INTO chat (time, user, message) 
                                            VALUES (CURRENT_TIME(), :user, :message)"); 
       $user = htmlspecialchars($_POST["user"]);
       $message = htmlspecialchars($_POST["message"]);
       $requete -> bindParam(":user", $user);
       $requete -> bindParam(":message", $message);
       $requete -> execute();
       header("Location: index.php");
    }
    catch (PDOException $e){
        die ("No connexion : " . $e -> getMessage());
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat</title>
</head>
<body>
    
<h1>Chat</h1>
<form method="POST">
    <input type="text" name="user">
    <input type="text" name="message">
    <button type="submit">Envoyer</button>
</form>

<?php
    $host = "localhost";
    $bd = "weekend";
    $user = "root";
    $password = "root";
     
    try {
        $connexion = new PDO("mysql:host=$host; dbname=$bd", $user, $password);
        $requete = $connexion -> prepare ("SELECT * FROM chat");
        $requete -> execute();
        $requete -> setFetchMode (PDO::FETCH_ASSOC);
        foreach ($requete -> fetchAll() as $message) {
            ?>
            <p>
                
                <?php echo $message["time"]?>: <strong><?php echo $message["user"]; ?></strong>
                
                <?php echo $message["message"];?>
            </p><?php
        }
    }
    catch (PDOException $e){
        die ("No connexion : " . $e -> getMessage());
    }
?>
</body>
</html>

