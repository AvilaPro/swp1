<?php 
    require_once 'Controllers/ApiController.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Front End</title>
</head>
<body>
    <?php 
		    switch(strtolower($_SERVER["REQUEST_METHOD"])){
        case "post";
            create();
        break;

        case "put";
            put();
        break;

        case "delete";
            delete();
        break;
        
        default:
         getPasajeros();
        break;
    }

    ?>
    <!-- <table border="1">
    	<tr>
    			<td>Nombre</td>
    			<td>Apellido</td>
    			<td>Fecha de salida</td>
    			<td>Fecha de llegada </td>
    			<td>Destino</td>
    	</tr>
    	<?php 
    		// if($_GET['id']){
    		// 	  echo"<tr>";
		    // 		 	echo "<td>".$res["nombre"]."</td>";
		    // 		 	echo "<td>".$res["apellido"]."</td>";
		    // 		 	echo "<td>".$res["fecha_salida"]."</td>";
		    // 		 	echo "<td>".$res["fecha_llegada"]."</td>";
		    // 		 	echo "<td>".$res["destino"]."</td>";
		    //       echo"</tr>";
    		// }
    		// else{
	    	// 	 for($i = 0;$i < count($res);$i++){
		    // 		 echo"<tr>";
		    // 		 	echo "<td>".$res[$i]["nombre"]."</td>";
		    // 		 	echo "<td>".$res[$i]["apellido"]."</td>";
		    // 		 	echo "<td>".$res[$i]["fecha_salida"]."</td>";
		    // 		 	echo "<td>".$res[$i]["fecha_llegada"]."</td>";
		    // 		 	echo "<td>".$res[$i]["destino"]."</td>";
		    // 		 echo"</tr>";
	    	// 	 }
    		// }
    	?>
    </table> -->
</body>
</html>