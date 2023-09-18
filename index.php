<!DOCTYPE html>
<html lang="es">

<?php
		define("TITULO", "ITE - CUESTIONARIO");
		define("RUTA_SCRIPTS", "");
		define("FUENTE_CSS", "home");
		define("FUENTE_CSS_SEC", "cuestionario");
		include "layout/head.php";
?>

<body>
	<div id='root'>
		<?php 	include "layout/header.php";
				include "public/home.php";
				include "layout/footer.php"; ?>
	</div>
    <!-- Script personalizado-->
    <script src="static/js/cuestionario.js"></script>
</body>

</html>