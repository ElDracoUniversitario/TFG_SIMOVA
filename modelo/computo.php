<?php
function esIlimitado($id) {
	if ($id = '3'){
		$resultado = 0;
	}else{
		$resultado = 1;}
return $resultado;

}

function calcularFecha($fecha) {
	$date1 = new DateTime($fecha);
	$date2 = new DateTime("now");
	$diff = $date1->diff($date2);
// will output 2 days
return $diff->days;

}

function esPasado($fecha) {
	$date1 = new DateTime($fecha);
	//echo date("Y-m-d h:i",$date1);
	$date2 = new DateTime("now");
	if($date1 < $date2) {
    $pasado = 1;}
		if($date1 == $date2){
			$pasado = 0;
		}
		else{
			$pasado = 0;
		}
// will output 2 days
return $pasado;

}

function compararFechas($primera)
 {
	$segunda = getdate();
  $valoresPrimera = explode ("-", $primera);
	//var_dump($primera);


  $anyoPrimera    = $valoresPrimera[0];
  $mesPrimera  = $valoresPrimera[1];
  $diaPrimera   = $valoresPrimera[2];

  $diaSegunda   = $segunda["mday"];
  $mesSegunda = $segunda["mon"];
  $anyoSegunda  = $segunda["year"];

	//echo   $diaPrimera."-".$mesPrimera."-".$anyoPrimera;
//	echo   $diaSegunda."-".$mesSegunda."-".$anyoSegunda;

  $diasPrimeraJuliano = gregoriantojd($mesPrimera, $diaPrimera, $anyoPrimera);
  $diasSegundaJuliano = gregoriantojd($mesSegunda, $diaSegunda, $anyoSegunda);

  if(!checkdate($mesPrimera, $diaPrimera, $anyoPrimera)){
    // "La fecha ".$primera." no es v&aacute;lida";
    return 0;
  }elseif(!checkdate($mesSegunda, $diaSegunda, $anyoSegunda)){
    // "La fecha ".$segunda." no es v&aacute;lida";
    return 0;
  }else{
    return  $diasPrimeraJuliano - $diasSegundaJuliano;
  }

}

function calcularPorcentaje($dias_restantes, $duracion_tarjeta) {

	$porcentaje = $duracion_tarjeta - $dias_restantes;
	//echo $porcentaje;

if ($dias_restantes==0){
	$duracion = "0.2";
	//echo "dentro del if";
}
	else{
		//echo "dentro del else";
	$duracion = ($porcentaje / $duracion_tarjeta)*100;


}


//echo $duracion;

return $duracion;

}



?>
