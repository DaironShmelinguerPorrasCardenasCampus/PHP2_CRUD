<!-- ESTE ARCHIVO ME RECIBE LOS DATOS QUE EL USEER ENVÍA A TRAVÉS DEL BOTÓN -->

<?php
if(isset($_POST['guardar'])) {// guardar el el nombre del submit
    require_once("config.php");

    $config = new Config(); // traer la clase con una variable

    $config->setNombres($_POST['nombres']); // el name = nombres de estudiantes.php linea 103
    $cofig-> setDireccion($_POST['direccion']); // linea 113
    $cofig-> setLogros($_POST['logros']);//linea 123 

    // invocar método para insertar datos
    $config-> insertData();
    echo "<script> alert('LOS DATOS FUERON GUARDADOS EXITOSAMENTE');document.location = 'estudiantes.php'</script>";

}

?>