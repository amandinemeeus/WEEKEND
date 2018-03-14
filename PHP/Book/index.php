<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Maxim's effect</title>
</head>
<body>
    <h1>What is the date?</h1>
    <p>Today we are the <?php date_default_timezone_set('Europe/Brussels'); echo date('l d/m/Y h:i:s'); ?> </p>
</body>
</html>

<!-- LES BOUCLES EN PHP: 
    Use WHILE if you don't know the number 
    and FOR if you know it 
-->

<?php 
    $nombre_rep = 1;
    while($nombre_rep <= 12)
        {   echo 'Volhouden';
            $nombre_rep++;
        }
?>

<?php
    for ($nombre_rep = 1; $nombre_rep <= 12; $nombre_rep ++)
        { echo 'Dit is de herhaling nummer ' . $nombre_rep . '<br/>';
        }
?>

<!-- LES TABLEAUX -->

<?php
    $prenoms = array ('Maxim', 'Amandine', 'Nino');

        for ($nummer = 0; $nummer < 3; $nummer++)
        {echo $prenoms[$nummer] . '<br>'; 
        }
        foreach ($prenoms as $element)
        {echo $element . '<br>';
        }

    $coordonnees = array (
        'voornaam' => 'Maxim',
        'naam' => 'De Ridder',
        'stad' => 'Grimbergen',
        'vriendin' => 'Amandine'
    );
    $coordonnees['voornaam'] = 'Maxim';

        foreach ($coordonnees as $element)
        {echo $element . '<br>';
        }

        foreach ($coordonnees as $cle => $element)
        {echo '[' . $cle . '] vaut ' . $element . '<br>';
        }

        echo '<pre>';
        print_r($coordonnees);
        echo '</pre>';

        if (array_key_exists('voornaam', $coordonnees))
        {echo 'La clé voornaam se trouve dans la variable coordonnees';
        }
?> 

<br> 
    
<?php
    $love = array ('Maxim', 'Piloga', 'Piano', 'Fruits', 'Légumes', 'Vélo', 'Tennis', 'Dessiner', 'Lire');
    if (in_array('Maxim', $love))
    {echo 'Maxim est dans le tableau à la première place';
    }
    ?> 

<br> 
    
<?php
    $love = array ('Maxim', 'Piloga', 'Piano', 'Fruits', 'Légumes', 'Vélo', 'Tennis', 'Dessiner', 'Lire');
    $position = array_search('Piano', $love);
    echo 'Le piano se trouve en position ' . $position . '<br>';
?>

<!-- LES FONCTIONS -->

<?php 

    $volume = (5*5)*3.14*2*(1/3);
    echo 'Le volume du cône de rayon 5 et de hauteur 2 est :  ' . $volume . 'cm<sup>3</sup><br>';

    function volumeCone ($rayon, $hauteur)
        {   $volume = ($rayon * $rayon) * 3.14 * $hauteur * (1/3);
            return $volume;
        }
    $volume = volumeCone (3,1);
    echo 'Le volume d\'un cône de rayon 3 et de hauteur 1 est de ' . $volume . 'cm<sup>3</sup><br>';


?>