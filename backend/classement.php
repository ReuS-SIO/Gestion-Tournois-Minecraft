<?php
session_start();
$estConnecte = isset($_SESSION['id_joueur']);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>MSIO</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="classement">
    <header>
        <h1>MSIO</h1>
        <nav>
           <ul>
                <li><a href="/equipe.php">Equipe</a></li>
                <li><a href="/tournoi.php">Tournoi</a></li>
                <li><a href="/login.php">Connexion</a></li>
           </ul> 
        </nav> 
    </header>
</body>
</html>