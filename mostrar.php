<?php
// Configuración de la conexión directa
$host = "127.0.0.1:3307"; 
$user = "root";
$password = "";
$database = "hospital_bd";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Consultar todos los pacientes
$query = "SELECT * FROM pacientes";
$resultado = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel de Control - Hospital SaMy Integral</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f7f6; padding: 20px; }
        .container { max-width: 1100px; background: white; padding: 20px; margin: auto; border-radius: 8px; box-shadow: 0px 0px 10px rgba(0,0,0,0.1); }
        h2 { text-align: center; color: #333; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 10px; border: 1px solid #ddd; text-align: left; font-size: 14px; }
        th { background-color: #007bff; color: white; }
        tr:nth-child(even) { background-color: #f9f9f9; }
        .btn-volver { display: inline-block; margin-bottom: 20px; padding: 10px 15px; background-color: #28a745; color: white; text-decoration: none; border-radius: 4px; font-weight: bold; }
        .btn-editar { background-color: #ffc107; color: black; padding: 5px 10px; text-decoration: none; border-radius: 4px; font-weight: bold; margin-right: 5px; }
        .btn-eliminar { background-color: #dc3545; color: white; padding: 5px 10px; text-decoration: none; border-radius: 4px; font-weight: bold; }
        .acciones { white-space: nowrap; }
    </style>
</head>
<body>

<div class="container">
    <h2>Panel de Control - Pacientes Registrados</h2>
    <a href="formulario.php" class="btn-volver">+ Registrar Nuevo Paciente</a>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Edad</th>
                <th>Sexo</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th>Diagnóstico</th>
                <th>Fecha Ingreso</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($resultado)) {
                echo "<tr>";
                echo "<td>" . $row['id_paciente'] . "</td>";
                echo "<td>" . $row['nombre'] . "</td>";
                echo "<td>" . $row['apellido'] . "</td>";
                echo "<td>" . $row['edad'] . "</td>";
                echo "<td>" . $row['sexo'] . "</td>";
                echo "<td>" . $row['telefono'] . "</td>";
                echo "<td>" . $row['direccion'] . "</td>";
                echo "<td>" . $row['diagnostico'] . "</td>";
                echo "<td>" . $row['fecha'] . "</td>"; // Ajustado a tu BD con doble 'g'
                echo "<td class='acciones'>";
                echo "<a href='editar.php?id=" . $row['id_paciente'] . "' class='btn-editar'>Editar</a>";
                echo "<a href='eliminar.php?id=" . $row['id_paciente'] . "' class='btn-eliminar' onclick='return confirm(\"¿Seguro que deseas eliminar este paciente?\")'>Eliminar</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>

<?php
mysqli_close($conn);
?>