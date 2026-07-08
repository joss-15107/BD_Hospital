<?php
// 1. Conexión directa con tu puerto 3307
$host = "127.0.0.1:3307"; 
$user = "root";
$password = "";
$database = "hospital_bd";

$conn = mysqli_connect($host, $user, $password, $database);

// Validar que la conexión funcione
if (!$conn) {
    die("Error de conexión a la base de datos: " . mysqli_connect_error());
}

// 2. Procesar los datos cuando se envía el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Recibir los datos de las casillas
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $sexo = $_POST['sexo'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $diagnostico = $_POST['diagnostico'];
    $fecha_ingreso = $_POST['fecha'];

    // Consulta SQL usando "fecha_ingreso" como lo tienes en phpMyAdmin
    $sql = "INSERT INTO pacientes (nombre, apellido, edad, sexo, telefono, direccion, diagnostico, fecha) 
            VALUES ('$nombre', '$apellido', $edad, '$sexo', '$telefono', '$direccion', '$diagnostico', '$fecha_ingreso')";

    // Ejecutar la inserción
    if (mysqli_query($conn, $sql)) {
        echo "<script>
                alert('¡Paciente registrado con éxito!');
                window.location.href='mostrar.php';
              </script>";
    } else {
        echo "Error al guardar: " . mysqli_error($conn);
    }
}

// Cerrar la conexión al terminar
mysqli_close($conn);
?>