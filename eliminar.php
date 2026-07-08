<?php
$host = "127.0.0.1:3307"; 
$user = "root";
$password = "";
$database = "hospital_bd";

$conn = mysqli_connect($host, $user, $password, $database);

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Consulta DELETE usando el ID seleccionado
    $sql = "DELETE FROM pacientes WHERE id_paciente = $id";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
                alert('¡Paciente eliminado correctamente!');
                window.location.href='mostrar.php';
              </script>";
    } else {
        echo "Error al eliminar: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>