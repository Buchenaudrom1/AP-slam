<?php
$data = yaml_parse_file('data/realisations.yaml');
?>

<section id="realisations">
    

    <h2><?php echo $data['titre']; ?> </h2>

<?php
foreach ($data['domaines'] AS $domaine) {
    echo $domaine['nom'] . "<br>";

    foreach ($domaine['details'] AS $detail) {
        echo $detail['nom'] . " : <br>";

    }
}
?>
<a href="https://github.com/Buchenaudrom1" target="_blank">Mon GitHub</a> <br>
<img src="images\illustrationTD1.png" alt="imagesdemoi" style="width: 200px; border-radius: 20px;">
<img src="images\illustrationTD2.png" alt="imagesdemoi" style="width: 200px; border-radius: 20px;"><br>
<a href="images\PROCEDURE service WEB apache2 Debian -Buchenaud.R.docx.pdf" target="_blank">Procédure sur le le service WEB apache2</a> <br>
<img src="images\illustrationProcedure1.png" alt="imagesdemoi" style="width: 200px; border-radius: 20px;"><br>
<a href="images\PROCEDURE DNS Primaire (2).pdf" target="_blank">Procédure sur le DNS Primaire</a> <br>
<img src="images\illustrationProcedure2.png" alt="imagesdemoi" style="width: 200px; border-radius: 20px;"><br>
</section>
