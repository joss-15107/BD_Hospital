<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Pacientes - SaMy Integral</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f7f6; padding: 20px; }
        .container { max-width: 500px; background: white; padding: 20px; margin: auto; border-radius: 8px; box-shadow: 0px 0px 10px rgba(0,0,0,0.1); }
        h2 { text-align: center; color: #333; }
        label { display: block; margin-top: 10px; font-weight: bold; }
        input, select { width: 100%; padding: 8px; margin-top: 5px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; }
        input[type="submit"] { background-color: #28a745; color: white; border: none; cursor: pointer; margin-top: 20px; font-size: 16px; }
        input[type="submit"]:hover { background-color: #218838; }
    </style>
</head>
<body>

<div class="container">
    <h2>Registro de Pacientes</h2>
    <form action="guardar.php" method="POST">
        <label>Nombre(s):</label>
        <input type="text" name="nombre" required>

        <label>Apellido(s):</label>
        <input type="text" name="apellido" required>

        <label>Edad:</label>
        <input type="number" name="edad" required>

        <label>Sexo:</label>
        <select name="sexo" required>
            <option value="">Seleccione...</option>
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
            <option value="Otro">Otro</option>
        </select>

        <label>Teléfono:</label>
        <input type="text" name="telefono" required>

        <label>Dirección:</label>
        <input type="text" name="direccion" required>

        <label>Diagnóstico:</label>
        <input type="text" name="diagnostico" required>

        <label>Fecha de Ingreso:</label>
        <input type="date" name="fecha" required>

        <input type="submit" value="Registrar Paciente">
    </form>
</div>

</body>
</html>