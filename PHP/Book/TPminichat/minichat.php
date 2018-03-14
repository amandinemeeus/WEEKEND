<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Minichat</title>
</head>

<style>
    form {text-align:center;}
</style>

<body>
    <form action="minichat_post.php" method="post"></form>
        <p>
            <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo"/><br>
            <label for="message">Message</label> : <input type="text" name="message" id="message"/><br>
            <input type="submit" value="Envoyer"/>
        </p>
    </form>

<?php 
//Connexion à la base de données
try
{   $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
    die('Erreur: '.$e->getMessage());
}
//Récupération des 10 derniers messages
$reponse = $bdd->query('SELECT pseudo, message FROM minichat ORDER BY ID DESC LIMIT 0, 10');
//Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
while ($donnees = $reponse->fetch())
{
    echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
}
$reponse->closeCursor();

?>

</body>
</html>