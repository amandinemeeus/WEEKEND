<?php
    
    $host = "localhost";
    $bd = "weekend";
    $user = "root";
    $password = "root";
     
    try {
        $connexion = new PDO("mysql:host=$host; dbname=$bd", $user, $password);
        $requete = $connexion -> prepare("INSERT INTO livre_d_or (date, titre, texte) 
                                            VALUES (CURRENT_DATE(), :titre, :message)"); 
       $requete -> bindParam(":titre", htmlspecialchars($_POST["titre"]));
       $requete -> bindParam(":message", htmlspecialchars($_POST["message"]));
       $requete -> execute();
       header("Location: index.php");
    }
    catch (PDOException $e){
        die ("No connexion : " . $e -> getMessage());
    }
?>