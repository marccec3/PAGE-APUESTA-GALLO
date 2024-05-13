<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
    <link rel="stylesheet" href="estilos-registro.css">
</head>
<body>
    <div class="container">
        <!--imagen -->
        <img src="/PAGE-APUESTA-GALLO/Vista/IMG/gallo2.jpeg" alt="Imagen de un gallo" class="image">

        <!--formulario de registro -->
        <section class="form-register">
            <h4>REGISTRATE</h4>
            <div class="form-row">
                <div class="form-group">
                    <input class="controls" type="text" name="nombre" id="nombre" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <input class="controls" type="text" name="apellido" id="apellido" placeholder="Apellido">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <input class="controls" type="email" name="correo" id="correo" placeholder="Correo Electronico">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <input class="controls" type="password" name="contrasena" id="contrasena" placeholder="Contraseña">
                </div>
                <div class="form-group">
                    <input class="controls" type="password" name="confirmar-contrasena" id="confirmar-contrasena" placeholder="Confirme su Contraseña">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <input class="controls" type="text" name="telefono" id="telefono" placeholder="Teléfono">
                </div>
            </div>
            <input class="botons" type="submit" value="Registrar">
            <p><a href="#">¿Ya tengo Cuenta?</a></p>
        </section>
    </div>
</body>
</html>
