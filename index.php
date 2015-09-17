<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

<title>EVALUACION CON AJAX</title>
<script src="js/jquery-1.11.3.js"></script>
</head>
<body>
<h1>DATOS DE LOS ESTUDIANTES<h1>
			<form method="POST"  action="formulario.php" >

			 Ingrese el nombre <input type="text" name="nombre" id="nombre"/>
			Ingrese el apellido<input type="text" name="apellido" id="apellido"/>
			Ingrese el saldo base<input type="text" name="dinero" id="dinero"/>
			<input type="submit" value="enviar">
			</form>
 </br>
<form action="#">

		<strong>Seleccione un Grado: </strong>
		<select id="selectjornada" name="selectjornada">
			
			 <option value="Seleccione">Seleccione</option>
			<option value="Primero">Primero</option>
			<option value="Segundo">Segundo</option>
			
		</select>
		 </br>

		 <div id='resultado' name='resultado'>
    <form action="escogere">

		<strong> PRIMERO : </strong>
		<select id="selectjornada" name="selectjornada">
			
			 <option value="Seleccione">Seleccione</option>
			<option value="PRIMEROA">A</option>
			<option value="PRIMEROB">B</option>
			<option value="PRIMEROC">C</option>
			
		</select>
			</form>
			 </br>

		<form action="#1">

		<strong> SEGUNDO: </strong>
		<select id="selectjornada" name="selectjornada">
			
			 <option value="Seleccione">Seleccione</option>
			<option value="A">A</option>
			<option value="C">C</option>
			
		</select>
			</form>
	  </br>

	<script>
	$( "#grado").change(function() {
		var gradoVa1= $("#grado").val();
						$.ajax({
				  method: "POST",
				  url: "formulario.php",
                  data: { grado: gradoVa1}

				}).done(function( msg ) {
			    	$("#resultado").html(msg);
			  });
		});
	</script>



	
</body>
</html>