<!DOCTYPE html>
<html lang="es">

<?php
		define("TITULO", "ITE - CUESTIONARIO");
		define("RUTA_SCRIPTS", "");
		define("FUENTE_CSS", "home");
		/*define("FUENTE_CSS_SEC", "cuestionario"); */
		include "layout/head.php";
?>

<body>
	<!-- Integra2 -->
    <script
        src="https://www.infomexsinaloa.org/accesibilidadweb/js_api.aspx?api_key=A518644D-5E3C-4AAB-B0E6-A30E5C1BE7A5&tipo=body&aut=itetlax.org.mx"
        type="text/javascript"></script>
    <!--  -->
	<div id='root'>
		<?php 	include "layout/header.php";
				include "public/home.php";
				include "layout/footer.php"; ?>
	</div>
    <!-- Script personalizado-->
	<script src="static/js/add-input.js"></script>
	<script src="static/js/cuestionario.js"></script>

    <!-- Integra2 -->
    <script
        src="https://www.infomexsinaloa.org/accesibilidadweb/js_api.aspx?api_key=A518644D-5E3C-4AAB-B0E6-A30E5C1BE7A5&tipo=footer&aut=itetlax.org.mx"
        type="text/javascript"></script>
    <!--  -->
</body>

</html>