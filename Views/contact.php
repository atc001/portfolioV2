<?php

$content = "
		<main id='main_contact'>
			<div id='tout'>
				<div id='contact'>
					<ul>
						<li>Vous pouvez me contacter à l'adresse mail :</li>
						<li>coste.anthony.ca@gmail.com</li>
						<li></li>
					</ul>
				</div>
				<div id='contenu'>
					<ul>
						<li>Par téléphone au :</li>
						<li>06.84.66.84.48</li>
						<br>
						<p>Mais encore à mon adresse postale :</p>
					</ul>
				</div>
			</div>
			<iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2022.5624562548478!2d4.863188702448397!3d45.75662408686358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea7ba298caf1%3A0x8f5a1ad4731632ec!2s214B+Rue+Paul+Bert%2C+69003+Lyon!5e0!3m2!1sen!2sfr!4v1498227857504' width='600' height='450' frameborder='0' style='border:0' allowfullscreen></iframe>
		</main>
";


require_once('../Controllers/ContactControllers.php');

$Contact = new Contact("Contact", $content);
$Contact->display();