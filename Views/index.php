<?php

$content = "
<main>
<span id='description-Anthony'>Bonjour, je m'appelle Anthony COSTE et voici le premier portfolio créé lors de la formation de developpement chez it-akademy. Vous y retrouverez 3 parties distrincts : Parcours pro, compétence et hobbie.</span>
			<div id='presentation'>
				<div id='image_1'>
					<h4 class='nomargin'>Parcours professionnel</h4>
				</div>
				<div id='texte_1'>
					<p class='nomargin'>Bonjour, je m'appelle Anthony COSTE et j'ai 22 ans. J'ai exercé le métier de menuisier pendant 5 ans et suite à un problème de santé, j'ai saisi l'opportunité de vivre de ma passion qui n'est autre que l'informatique. En effet, ce domaine s'est révélé passionnant à mes yeux et a su susciter ma curiosité jusqu'à en devenir un projet professionnel.</p>
					<p class='nomargin'> Pour cela, j'ai suivi une formation de développement chez it-akademy. Cette formation m'a permis de créer ce portfolio de mes propres mains et d'acquérir les compétences requises afin d'exercer ce métier.</p>
				</div>
			</div>
			<div id='competence'>
				<div id='image_2'>
					<h4 class='nomargin'>Compétences acquises</h4>
				</div>
				<div id='texte_2'>
					<ul class='nomargin'>
						<li class='nomargin'>Minutieux : Cela me permet de faire un travail efficace et appliqué.</li>
						<li class='nomargin'>Sociable : Cela me permet de travailler au sein d'une équipe et d'avoir une très bonne humeur. Mais également avoir une très bonne relation avec la clientèle.</li>
						<li class='nomargin'>Réactif : Cela me permet de gérer une situation inattendue afin de la résoudre le plus rapidement possible.</li>
					</ul>
				</div>
			</div>
			<div id='avenir'>
				<div id='image_3'>
					<h4 class='nomargin'>Projet à venir</h4>
				</div>
				<div id='texte_3'>
					<p class='nomargin'>J'ai pour but de finir ma formation préparatoire au développement de site web et d'application mobile, afin de pouvoir accéder à la formation FullStack. Cette formation prépare, sur 2 ans en alternance, la conception entière d'un site web. En effet, que ce soit niveau design, animation et contenu, tout est travaillé.</p>
				</div>
			</div>
			<div id='hobbie'>
				<div id='image_4'>
					<h4 class='nomargin'>Hobbies</h4>
				</div>
				<div id='texte_4'>
					<p class='nomargin'>Passionné de montagne et d'adrénaline, je vais régulièrement dans les Alpes pour pratiquer toutes sortes d'activités. En effet, l'hiver je pratique le snowboard et je profite du beau temps pour faire des randonnées pédestres ou à vélo.</p>
					<p class='nomargin'>J'aime également des activités plus tranquilles comme regarder des films/séries, naviguer sur internet ou encore approfondir mes connaissances en informatique.</p>
				</div>
			</div>
			
</main>
";


require_once('../Controllers/IndexControllers.php');

$index = new Index("Accueil", $content);
$index->display();
