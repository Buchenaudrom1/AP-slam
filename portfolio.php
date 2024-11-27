<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio de Buchenaud Romain</title>
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>

<?php
require_once(" metre chemin ici ");
$data = yaml_parse_file('portfolio.yaml');
?>
    <header>
        <nav>
            <ul>
                <li><a href="#accueil">Accueil</a></li>
                <li><a href="#competences">Compétences</a></li>
                <li><a href="#realisations">Réalisations</a></li>
                <li><a href="#formation">Formation</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <?php include 'php/accueil.php'; ?>
    <?php include 'php/competences.php'; ?> 
    <?php include 'php/formation.php'; ?>
    <?php include 'php/realisations.php'; ?>
    <?php include 'php/contact.php'; ?>
</body>
</html>