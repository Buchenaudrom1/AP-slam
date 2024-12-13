<?php
$data = yaml_parse_file('data/realisations.yaml');
?>

<section id="realisations">
    <a href="https://github.com/Buchenaudrom1" target="_blank">Mon GitHubg</a>

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