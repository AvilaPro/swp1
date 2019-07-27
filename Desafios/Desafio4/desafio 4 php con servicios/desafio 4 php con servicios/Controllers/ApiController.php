<?php 
    require_once 'Models/ApiModel.php';
	
	class APIKey
	{

	    public static function isValid($token)
	    {
	        $dns = 'mysql:host=localhost;dbname=services';
	        try {
	            $conexion = new PDO($dns, 'root', '');

	            $result = $conexion
	                ->query("SELECT * FROM api_key WHERE token='$token'", PDO::FETCH_ASSOC);

	            foreach ($result as $apiKey) {

	                if ($apiKey['token'] === $token) {
	                    return true;
	                }
	            }
	            return false;

	            // echo 'conectado';
	        } catch (\Throwable $th) {
	            echo "La conexion con la base de datos no fue exitosa. $th->getMessage()";
	            // throw $th;
	            return false;
	        }
	    }
	}

	function getPasajeros(){

	    if(!isset($_GET['apikey'])){
        	echo"<script> alert('por favor, ingrese un apikey') </script>";	
	    }
	    elseif(APIKey::isValid($_GET['apikey'])){
	        if(isset($_GET['id'])){
	            $res = getId($_GET['id']);
	            return $res;
	        }
	        elseif(isset($_GET['name'])){
				$res = getName($_GET['name']);
				
            	return $res;
        	}
        	elseif(isset($_GET['lastName'])){
            	$res = getLastName($_GET['lastName']);
            	return $res;
        	}
        	elseif(isset($_GET['destiny'])){
            	$res = getDestiny($_GET['destiny']);
            	return $res;
        	}
        	elseif(isset($_GET['all'])){
            	$res = getAll();
            	return $res;
        	}
        	else{
        		echo"<script> alert('Ruta invalida') </script>";	
        	}
	    }
	    else{
        	echo"<script> alert('El apikey no es valido') </script>";
	    }
	}

	function create(){
			var_dump($_POST);
			if(isset($_GET['apikey']) && APIKey::isValid($_GET['apikey'])){

				if(isset($_POST["nombre"]) && !empty($_POST["nombre"])){
					if(isset($_POST["apellido"]) && !empty($_POST["apellido"])){
						if(isset($_POST["fecha_salida"]) && !empty($_POST["fecha_salida"])){
	
							if(isset($_POST["fecha_retorno"]) && !empty($_POST["fecha_retorno"])){
								if( isset($_POST["destino"]) && !empty($_POST["destino"])){
										newPassenger($_POST["nombre"],$_POST["apellido"],$_POST["fecha_salida"],$_POST["fecha_retorno"],
										$_POST["destino"]);
	
								}else{
									echo"Ingrese el campo de destino";
								}
							}else{
								echo"Ingrese el campo de fecha de retorno";
							}
						}else{
							echo"Ingrese el campo de fecha de salida";
						}
					}else{
						echo"Ingrese el campo de apellido";
					}
				}
				else{
					echo"Ingrese el campo de nombre";
				}
			}
			else{
				echo"Ingresar Apikey";
			}
		
	}

	function delete(){
		if(isset($_GET['apikey']) && APIKey::isValid($_GET['apikey'])){

			if(!isset($_GET["id"]) || empty($_GET["id"])){
				$_GET["id"] = "pon el id";
			}elseif(!isExistID($_GET["id"])){
				$_GET["id"] = "tu id no existe chamito";
				var_dump($_GET["id"]);
			}else{
				if(deletePassenger($_GET["id"])){
					echo "Eliminado exitosamente";
				}
				else{
					echo "Hubo un peo";
				}
			}
		}
		else{
			echo"Ingresar Apikey";
		}
	
	}