
<?php
 
   $migrado =$_POST['grado'];
    $arrPrimeroA = array('danzas', 'teatro', 'teatro');
    $arrPrimeroB = array('danzas', 'musica');
    $arrPrimeroC = array('teatro', 'dibujo', 'musica');
   
     
    
    $arrSegundoA = array('teatro', 'dibujo');
    $arrSegundoC= array('teatro', 'musica');
    
     

    $resultado;
    $miselect="";


	if($miGrado == 'Primero A'){
		$arrRecorrer=$arrPrimeroA;
		$arrRecorrer=$arrPrimeroB;
		$arrRecorrer=$arrPrimeroC;
}elseif ($migrado=='Segundo') {
	    $arrRecorrer=$arrSegundoA;
	    $arrRecorrer=$arrSegundoC;
}
   $resultado.= "<selectid='clase' name='clase'>";
   foreach ($resultado as $grado) {
   	$resultado .="<option value="$nombre" name="$nombre">";
   }
     echo $resultado;   


    
	

if(!empty($_REQUEST['nombre']) && !empty($_REQUEST['apellido']) && !empty($_REQUEST['dinero'])){
		$nombres = $_POST['nombre'];
		$apellidos= $_POST['apellido'];
		$dinero= $_POST['dinero'];
		$resultado= "hola  ".$nombres." - ".$apellidos."-".$dinero;

		echo "<p>".$resultado."</p>";  

}
  $dinero='dinero';
  $Primero='Primero';
 if($Primero == 'dinero'){
    $Primero + 35000;
 }elseif ($Primero + 35000;) {
 	$dinero +35000;
 }
 echo $dinero;


	
	
?>