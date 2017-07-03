<?php

$content = "
<main id='main_projet'>
    <h4>Mes projets</h4>
    <div id='slider'>
        <div id='slider-container' style='display: none;'>
            <img src='Img/jeu.png'>
            <img src='Img/homeProject.png'>
            <img src='Img/librairie.png'>
        </div>
    </div>
    <p>Petits projets qui m'ont permis de découvrir et progresser dans le monde du développement tout en m'amusant. Voici un lien vers mon Github ou j'entrepose tous mes codes :</p>
    <p><a href='https://github.com/atc001' target='_blank'>GitHub</a></p>
    <h4>Evolution de mes compétences</h4>
    <section>
        <h1>HTML</h1>
        <div class='arrow'>
            <div class='arrow-status very_good'>
                90%
                <span class='arrow-pointer'></span>
            </div>
        </div>
        <h1>PHP</h1>
        <div class='arrow'>
            <div class='arrow-status good'>
                80%
                <span class='arrow-pointer'></span>
            </div>
        </div>
        <h1>CSS</h1>
        <div class='arrow'>
            <div class='arrow-status good'>
                80%
                <span class='arrow-pointer'></span>
            </div>
        </div>        
        <h1>MySQL</h1>
        <div class='arrow'>
            <div class='arrow-status tier'>
                30%
            </div>
        </div>
        <h1>Java Script</h1>
        <div class='arrow'>
            <div class='arrow-status tier'>
                30%
            </div>
        </div>
        <h1>JQuerry</h1>
        <div class='arrow'>
            <div class='arrow-status tier'>
                30%
            </div>
        </div>

    </section>
</main>
";


require_once('../Controllers/ProjetControllers.php');

$index = new Projet("Projet", $content);
$index->display();