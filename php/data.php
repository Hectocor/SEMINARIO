<?php


$conn = new mysqli('localhost', 'root', 'root','mydb');

if ($conn->connect_error) {
    die("FALLO: " . $conn->connect_error);
} 


$array = array(
         "FINANZAS",
         "ASEO Y ORNATO",
         "INFORMATICA",
         "SOPORTE TECNICO");

$nombres_dptos = array("CEMENTERIO", "TRANSITO", "CULTURA", "PATRIMONIO", "ADQUISICIONES", "SOPORTE", "RRHH");
						);
// cambiar nombre_departamento por nombre_empresa (empresa a la que pertenece el dpto)

for ($i = 1; $i <= 100; $i++) {
    //$sql = "INSERT INTO contrato VALUES ($i, 100000+($i*2), '45h', '1', '1')";
    $n = "USER_".$i;
    $a_p = 3*$i;
    $a_m = array_rand($array, 4);
    $email = "NOMBRE_DEPARTAMENTO_N".$i;
    $telefono = "99".$i."456".$i;

	//$sql = "INSERT INTO rrhh VALUES($i, '$n', '$a_p', '$a_m', '$email', 'M', '$telefono', $i)";


    //$sql = "INSERT INTO rrhh_direccion VALUES($i, $i)";
   // $sql = "INSERT INTO usuario VALUES($i+1, '$n', '$a_p', '$a_m', $i)";

    $sql = "INSERT INTO departamento VALUES($i*5, '$a_m', '')";


if ($conn->query($sql) === TRUE) {
    echo "INSERTADO <br>".$i;
} else {
    echo "FAALLO: " . $sql . "<br>" . $conn->error;
}

}


$conn->close();
?>