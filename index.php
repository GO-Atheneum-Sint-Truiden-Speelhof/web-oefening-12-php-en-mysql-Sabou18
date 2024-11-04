<!doctype html>
<html lang=nl>

<head>
	<?php include("includes/head.php")?>
</head>

<body>
<title>Cookies pagina</title>
    <script>
        function akkoord() {
            location.href = 'begin.php'; 
        }
        function nietAkkoord() {
            location.href = 'https://www.google.com.php'; 
        }
    </script>

	<div class="container">
		
		<?php 
			include("includes/menu.php");
			if(!isset($_GET['page'])){
				include("includes/start.php");
			}else{
				$link = "includes/".$_GET['page'].".php";													
				include($link);
			}
			include("includes/footer.php");
			?>
			<h1>Cookies</h1>
        <p>Wij gebruiken cookies om je ervaring te verbeteren. Accepteer je het gebruik van cookies?</p>
        
        <div class="jumbotron">
            <h1 class="display-4">Fotowedstrijd</h1>
        </div>
        <div class="row">
            <div class="col tegel knoppen">
                <button onclick="akkoord()" class="btn-secondary btn-lg" type="button">Akkoord</button>
                <button onclick="nietakkoord()" class="btn-secondary btn-lg" type="button">Niet akkoord</button>
	</div>
	
</body>

</html>







