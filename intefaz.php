<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiantes</title>
</head>
<body>
    <div class="wrapper">
        <h1>Registrar Estudiantes</h1>
        <div class="register-area">
            <form action="./registrar.php" method="POST">
                <input name="nombre" type="text" name="nombre" placeholder="Nombre" required>
                <input name="email" type="text" name="email" placeholder="Email"required>
                <input name="carrera" type="text" name="carrera" placeholder="Carrera"required>
                <input type="submit" value="Registrar">
            </form>
        </div>
        <div class="list-area">
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Carrera</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $estudiantes = file_get_contents('./estudiantes.json');
                        $estudiantes = json_decode($estudiantes, true);
                        foreach($estudiantes as $estudiante){
                            echo '<tr>';
                            echo '<td>'.$estudiante['nombre'].'</td>';
                            echo '<td>'.$estudiante['email'].'</td>';
                            echo '<td>'.$estudiante['carrera'].'</td>';
                            echo '</tr>';
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>