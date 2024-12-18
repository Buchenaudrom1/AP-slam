<?php
$data = yaml_parse_file('data/formation.yaml');
?>

<section id="formation">
   

    <h2><?php echo $data['titre']; ?> </h2>

<?php
foreach ($data['domaines'] AS $domaine) {
    echo $domaine['nom'] . "<br>";

    foreach ($domaine['details'] AS $detail) {
        echo $detail['nom'] . " : <br>";
    }
}
?> 
<br>
<a href="images\Cv Buchenaud Romainc.pdf" target="_blank">Télécharger mon CV</a>
</section>
