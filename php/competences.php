<?php
$data =yaml_parse_file('data/competences.yaml');
?>

<section id='competences'>


<h2><?php echo $data['titre']; ?> </h2>
<?php 
foreach($data['domaines'] AS $domaine){
    echo $domaine['nom']."<br>";
    foreach($domaine['competences'] AS $competence){
        echo $competence['nom']." : ". $competence['niveau']."<br>";
    }
}

?>
</section>