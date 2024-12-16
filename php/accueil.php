<?php
$data = yaml_parse_file('data/accueil.yaml');
?>
<section id="formation">

<h2><?php echo $data['titre']; ?></h2>



<?php
foreach ($data['domaines'] AS $domaine) {
    echo $domaine['nom'] . "<br>";

    foreach ($domaine['details'] AS $detail) {
        echo $detail['nom'] . " : <br>";
    }
}
?>
<img src="images\imagedemoi.jpg" alt="imagesdemoi" style="width: 200px; border-radius: 20px;">
</section>

