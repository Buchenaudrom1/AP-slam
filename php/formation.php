<?php
$data = yaml_parse_file('data/formation.yaml');
?>

<section id="formation">
    <a href="assets/cv.pdf" target="_blank">Télécharger mon CV</a>

    <h2><?php echo $data['titre']; ?> </h2>

<?php
foreach ($data['domaines'] AS $domaine) {
    echo $domaine['nom'] . "<br>";

    foreach ($domaine['details'] AS $detail) {
        echo $detail['nom'] . " : <br>";
    }
}
?>
</section>
