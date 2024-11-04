<div class="jumbotron">
			<h1 class="display-4">CCO fotowedstrijd</h1>
		</div>
		<?php

// cookie inlezen en datum weergeven

$c_naam = 'cco_cookie';

echo '<div class="row"><div class="col

tegel"><p>Je hebt deze website het laatst
bezocht op
'.$_COOKIE[$c_naam].'.</p></div>
</div>';

?>
		<div class="row">
			<div class="col tegel">
				<h4>Meer over de wedstrijd</h4>
				<p><a href="../index.php?page=wedstrijd"><img src="plaatjes/wedstrijd.jpg" alt="Meer over de wedstrijd" class="img-fluid rounded"></a></p>
			</div>
			<div class="col tegel">
				<h4>Wat kan je winnen?</h4>
				<p><a href="../index.php?page=winnen"><img src="plaatjes/winnen.jpg" alt="Wat kan je winnen?" class="img-fluid rounded"></a>
			</div>
		</div>
		<div class="row">
			<div class="col tegel">
				<h4>Laureaat vorig jaar</h4>
				<p><a href="../index.php?page=laureaat"><img src="plaatjes/laureaat.jpg" alt="De laureaat van vorig jaar" class="img-fluid rounded"></a></p>
			</div>
			<div class="col tegel">
				<h4>Neem deel</h4>
				<p><a href="../index.php?page=deelnemen"><img src="plaatjes/deelnemen.jpg" alt="Neem deel aan de wedstrijd" class="img-fluid rounded"></a>
			</div>
		</div>
        