<?php
$host = "127.0.0.1:3307"; 
$user = "root";
$password = "";
$database = "hospital_bd";

$conn = mysqli_connect($host, $user, $password, $database);

// 1. Cargar los datos actuales del paciente seleccionado
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM pacientes WHERE id_paciente = $id";
    $result = mysqli_query($conn, $sql);
    $paciente = mysqli_fetch_assoc($result);
}

// 2. Procesar la actualización cuando se envía el formulario modificado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_paciente = $_POST['id_paciente'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $sexo = $_POST['sexo'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $diagnostico = $_POST['diagnostico'];
    $fecha_ingreso = $_POST['fecha'];

    // Consulta UPDATE
    $sql_update = "UPDATE pacientes SET 
                    nombre='$nombre', 
                    apellido='$apellido', 
                    edad=$edad, 
                    sexo='$sexo', 
                    telefono='$telefono', 
                    direccion='$direccion', 
                    diagnostico='$diagnostico', 
                    fecha='$fecha_ingreso' 
                  WHERE id_paciente=$id_paciente";

    if (mysqli_query($conn, $sql_update)) {
        echo "<script>
                alert('¡Datos del paciente actualizados con éxito!');
                window.location.href='mostrar.php';
              </script>";
    } else {
        echo "Error al actualizar: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Paciente</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f7f6; padding: 20px; }
        .container { max-width: 500px; background: white; padding: 20px; margin: auto; border-radius: 8px; box-shadow: 0px 0px 10px rgba(0,0,0,0.1); }
        h2 { text-align: center; color: #333; }
        label { display: block; margin-top: 10px; font-weight: bold; }
        input, select { width: 100%; padding: 8px; margin-top: 5px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; }
        input[type="submit"] { background-color: #007bff; color: white; border: none; cursor: pointer; margin-top: 20px; font-size: 16px; }
        input[type="submit"]:hover { background-color: #0056b3; }
    </style>
</head>
<body>

<div class="container">
    <h2>Modificar Datos del Paciente</h2>
    <form action="editar.php" method="POST">
        <input type="hidden" name="id_paciente" value="<?php echo $paciente['id_paciente']; ?>">

        <label>Nombre(s):</label>
        <input type="text" name="nombre" value="<?php echo $paciente['nombre']; ?>" required>

        <label>Apellido(s):</label>
        <input type="text" name="apellido" value="<?php echo $paciente['apellido']; ?>" required>

        <label>Edad:</label>
        <input type="number" name="edad" value="<?php echo $paciente['edad']; ?>" required>

        <label>Sexo:</label>
        <select name="sexo" required>
            <option value="Masculino" <?php if($paciente['sexo'] == 'Masculino') echo 'selected'; ?>>Masculino</option>
            <option value="Femenino" <?php if($paciente['sexo'] == 'Femenino') echo 'selected'; ?>>Femenino</option>
            <option value="Otro" <?php if($paciente['sexo'] == 'Otro') echo 'selected'; ?>>Otro</option>
        </select>

        <label>Teléfono:</label>
        <input type="text" name="telefono" value="<?php echo $paciente['telefono']; ?>" required>

        <label>Dirección:</label>
        <input type="text" name="direccion" value="<?php echo $paciente['direccion']; ?>" required>

        <label>Diagnóstico:</label>
        <input type="text" name="diagnostico" value="<?php echo $paciente['diagnostico']; ?>" required>

        <label>Fecha de Ingreso:</label>
        <input type="date" name="fecha" value="<?php echo $paciente['fecha']; ?>" required>

        <input type="submit" value="Guardar Cambios">
    </form>
</div>

</body>
</html>
<?php mysqli_close($conn); ?>