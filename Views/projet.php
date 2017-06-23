<?php

$content = "
<main id='main_projet'>
    <h4>Mes projets</h4>
    <div id='caroussel'>
        <button class='w3-button w3-display-left' onclick='plusDivs(-1)'>&#10094;</button>
        <a href='Img/jeu.png'><img class='mySlides' src='Img/jeu.png'></a>
        <a href='Img/librairie.png'><img class='mySlides' src='Img/librairie.png'></a>
        <a href='Img/homeProject.png'><img class='mySlides' src='Img/homeProject.png'></a>
        <button class='w3-button w3-display-right' onclick='plusDivs(+1)'>&#10095;</button>
        <script>
            var slideIndex = 1;
            showDivs(slideIndex);

            function plusDivs(n) {
                showDivs(slideIndex += n);
            }

            function showDivs(n) {
                var i;
                var x = document.getElementsByClassName('mySlides');
                if (n > x.length) {slideIndex = 1}    
                if (n < 1) {slideIndex = x.length}
                for (i = 0; i < x.length; i++) {
                x[i].style.display = 'none';  
                }
                x[slideIndex-1].style.display = 'block';  
                }
        </script>
    </div>
    <p>Petits projets qui m'ont permit de découvrir et progresser dans le monde du développement tout en m'amusant. Voici un lien vers mon Github ou j'entrepose tout mes codes :</p>
    <p><a href='https://github.com/atc001'>GitHub</a></p>
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
            <div class='arrow-status little'>
                5%
            </div>
        </div>
        <h1>JQuerry</h1>
        <div class='arrow'>
            <div class='arrow-status nul'>
                0%
            </div>
        </div>

    </section>
</main>
";


require_once('../Controllers/ProjetControllers.php');

$index = new Projet("Projet", $content);
$index->display();