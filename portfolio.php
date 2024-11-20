<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio de Buchenaud Romain</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #333;
            color: white;
            z-index: 1000;
        }
        nav ul {
            list-style: none;
            margin: 0;
            padding: 10px;
            display: flex;
            justify-content: center;
        }
        nav ul li {
            margin: 0 15px;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }
        section {
            padding: 100px 20px;
            margin-top: 60px; 
        }
        #accueil {
            background-color: #f4f4f4;
        }
        #competences {
            background-color: #e8f5e9;
        }
        #realisations {
            background-color: #e3f2fd;
        }
        #formation {
            background-color: #fff3e0;
        }
        #contact {
            background-color: #ede7f6;
        }
        footer {
            text-align: center;
            padding: 20px;
            background-color: #333;
            color: white;
        }
    </style>
</head>
<body>
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

    <main>
        <section id="accueil">
            <h1>Bienvenue sur mon Portfolio</h1>
            <p>Je suis Buchenaud Romain, J'apprend l'Informatique. Explorez mes compétences, réalisations et formation pour en savoir plus.</p>
            <img src="..\images\image de moi.jpg" alt="Votre photo" style="width: 200px; border-radius: 20px;" >
        </section>

        <section id="competences">
            <h2>Mes Compétences</h2>
            <ul>
                <li><strong>je fait actuelement des études en informatique j'apprend </strong> HTML, CSS, PHP, JavaScript</li>
                <li><strong> :</strong> </li>
                <li><strong> :</strong> </li>
            </ul>
        </section>

        <section id="realisations">
            <h2>Mes Réalisations</h2>
            <article>
                <h3>Projet 1 : ce Portfolio</h3>
                <p>Création d'un Portfolio en ligne.</p>
            </article>
            <article>
                <h3>Projet 2 : </h3>
                <p> </p>
            </article>
        </section>

        <section id="formation">
            <h2>Ma Formation</h2>
            <ul>
                <li><strong>BAC STMG </strong> Lycée Alexis de Tocqueville à Cherbourg  </li>
                <li><strong>BTS SIO ( en cours )</strong> CaenSup Sainte Ursule </li>
            </ul>
            <a href="assets/cv.pdf" target="_blank">Télécharger mon CV</a>
        </section>

        <section id="contact">
            <h2>Contactez-moi</h2>
            <form method="POST" action="contact_submit.php">
                <label for="name">Buchenaud Romain</label>
                <input type="text" id="name" name="name" required>
                <br>
                <label for="email">Email :Romain.Buchenaud@sts-sio-caen.info</label>
                <input type="email" id="email" name="email" required>
                <br>
                <label for="message">Message :</label>
                <textarea id="message" name="message" required></textarea>
                <br>
                <button type="submit">Envoyer</button>
            </form>
        </section>
    </main>
</body>
</html>