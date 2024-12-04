<?php
$dta =yaml_parse_file(phile: 'data\formation.yaml')
?>

<section id="formation">
    <a href="assets/cv.pdf" target="_blank">Télécharger mon CV</a>


    <h2><?php echo $data['titre']; ?> </h2>
    
<?php 
foreach($data['domaines'] AS $domaine){
    echo $domaine['nom']."<br>";
    foreach($domaine['competences'] AS $competence){
        echo $competence['nom']." : "."<br>";
    }
}
?>
</section>