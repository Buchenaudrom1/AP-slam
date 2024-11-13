<?php
  $page = isset($_GET['page']) ? $_GET['page'] : 'accueil';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Portfolio</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php?page=accueil">index</a></li>
                <li><a href="index.php?page=competence">Compétences</a></li>
                <li><a href="index.php?page=realisation">Réalisations</a></li>
                <li><a href="index.php?page=formation">Formation</a></li>
                <li><a href="index.php?page=contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <?php
            if ($page == 'index') {
                include 'index.php';
            } elseif ($page == 'competence') {
                include 'competence.php';
            } elseif ($page == 'realisation') {
                include 'realisation.php';
            } elseif ($page == 'formation') {
                include 'formation.php';
            } elseif ($page == 'contact') {
                include 'contact.php';
            }
        ?>
    </main>

    <footer>
        <p>&copy; </p>
    </footer>
</body>
</html>