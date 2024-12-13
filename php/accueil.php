<?php
$data = yaml_parse_file('data/acceuil.yaml');
?>
<section id="formation">
    <h2><?php echo $data['titre']; ?></h2>
    <img src="..\images\imagedemoi.jpg" alt="Votre photo" style="width: 200px; border-radius: 20px;">
    <?php
    foreach ($data['domaines'] as $domaine) {
        echo $domaine['nom'] . "<br>";

        foreach ($domaine['details'] as $detail) {
            echo $detail['nom'] . " : <br>";
        }
    }
    ?>
</section>
