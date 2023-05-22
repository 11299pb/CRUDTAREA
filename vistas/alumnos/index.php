<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>App de alumnos</title>
</head>
<body>
<div class="container">
    
    <div class="row justify-content-center">
        <form action="/CRUDTAREA/controladores/alumnos/guardar.php" method="POST" class="col-lg-8 border bg-light p-3">
        <h1 class="text-center">Formulario Para Los Estudiantes del Curso de Informática y Ciberdefensa</h1>
        <br>
            <div class="row mb-2">
                <div class="col">
                    <label for="alumnos_nombre">Ingrese los dos primeros Nombres</label>
                    <input type="text" name="alumnos_nombre" id="alumnos_nombre" class="form-control" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="alumnos_apellido">Ingrese los Apellido</label>
                    <input type="text" name="alumnos_apellido" id="alumnos_apellido" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="alumnos_fecha_naci">Fecha de nacimiento</label>
                    <input type="text" name="alumnos_fecha_naci" id="alumnos_fecha_naci" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="alumnos_telefono">Número de teléfono</label>
                    <input type="number" name="alumnos_telefono" id="alumnos_telefono" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="alumnos_correo">Correo electrónico</label>
                    <input type="email" name="alumnos_correo" id="alumnos_correo" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <button type="submit" class="btn btn-success w-100">Guardar</button>
                </div>
            </div>
        </form>
    </div>
</div>

    
