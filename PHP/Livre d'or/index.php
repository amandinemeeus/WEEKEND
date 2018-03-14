<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livre d'or</title>
</head>

<body>
    <h1>Livre d'or</h1>
    <h2>Les messages</h2>

<form method="POST" action="addmessage.php">
<input type="text" name="titre" placeholder="titre"/><br>
<input type="text" name="message" placeholder="message" /><br>
<button type="submit">Envoyer</button>
</form>




<?php
    
    $host = "localhost";
    $bd = "weekend";
    $user = "root";
    $password = "root";
     
    try {
        $connexion = new PDO("mysql:host=$host; dbname=$bd", $user, $password);
        $requete = $connexion -> prepare ("SELECT * FROM livre_d_or");
        $requete -> execute();
        $requete -> setFetchMode (PDO::FETCH_ASSOC);
        foreach ($requete -> fetchAll() as $message) {
            ?>
            <p>
                <strong>
                    <?php echo $message["titre"] . " (" . $message["date"] . ")" ?>
                </strong>
                <br>
                    <?php echo $message["texte"]?>
            </p><?php
        }
    }
    catch (PDOException $e){
        die ("No connexion : " . $e -> getMessage());
    }
?>


</body>


</html>