<html>
<head>
	<title>Clase Cinco</title>
</head>
<body>

<form method="POST" > 
	<input type="Text" name="Archivo">
	<input type="submit">
</form>

</body>
</html>

<?php 
if (isset($_POST["Archivo"])) { //CON ISSET VALIDO QUE LA VARIABLE NO ESTÉ VACÍA.	

$xPath = $_POST ["Archivo"];

if (!file_exists($xPath)) {
    echo "El fichero $xPath no existe";
    exit;
} else {
$myfile = fopen($xPath, "r");

$myfile = fopen("palabras.txt", "r");
$cadena = fgets($myfile);
echo "<br>Voy a mostrar la cadena<br>";
echo $cadena;

$ejemplo = count(explode(" ", $cadena));
/*echo "<br><br>La cadena contiene $ejemplo palabras";*/


$p1 = 0;
$p2 = 0;
$p3 = 0;
$p4 = 0;
$p5 = 0;

/*echo "<br><br>";*/
//guardo las palabras en un array	
$array_cadena = str_word_count($cadena, 1);
//saco cada elemento del array 
foreach ($array_cadena as $palabra) {
	/*echo "<br>Palabra: ";
	echo $palabra . " ";
	echo " - Cantidad de letras: " . strlen($palabra);*/
	switch (strlen($palabra)) {
		case '1':
			$p1 = $p1 + 1;
			break;
		case '2':
			$p2 = $p2 + 1;
			break;
		case '3':
			$p3 = $p3 + 1;
			break;
		case '4':
			$p4 = $p4 + 1;
			break;			
	}
	if (strlen($palabra) > 4) {
		$p5 = $p5 + 1;
	}	
}

fclose($myfile);

 ?>

<html>
<head>
	<title></title>
</head>
<body>


  <table border="2px"> <!-- Lo cambiaremos por CSS -->
           <caption>Ejercicio 34 - Contar Letras</caption>
           <thead>
			  <tr>
				<th>1 Letra</th>
				<th>2 Letras</th>
				<th>3 Letras</th>
				<th>4 Letras</th>
				<th>4+ Letras</th>
			  </tr>
		   </thead>        	           
          <tr>
          	<!-- echo "<br>4+: $p5"; -->
              <?php echo "<td>$p1</td>" ?>	
              <?php echo "<td>$p2</td>" ?>	
              <?php echo "<td>$p3</td>" ?>	
              <?php echo "<td>$p4</td>" ?>	
              <?php echo "<td>$p5</td>" ?>	
          </tr>
        </table>        
</body>
</html>


<?php 
}

}
else{
	echo "La variable _POST ['Archivo'] está vacía.";
}


 ?>