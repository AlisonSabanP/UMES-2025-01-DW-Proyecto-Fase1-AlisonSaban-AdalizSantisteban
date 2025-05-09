<?php
session_start();
$error = '';
if (isset($_SESSION['error'])) {
    $error = $_SESSION['error'];
    unset($_SESSION['error']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hotel El Paraíso</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Imagenes/logo.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Quicksand:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="Imagenes/logo.ico" alt="Logo" width="40" class="d-inline-block align-text-top">
                Hotel El Paraíso
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-2 mb-2 mb-md-0">
                    <?php 
                        $elementosHeader = [
                            ["directorio" => "#", "Nombre" => "Inicio", "clase"=> "nav-link active"]
                        ];
                        foreach($elementosHeader as $elemento){
                            echo '<li class="nav-item m-2">';
                            echo '<a class="' . $elemento["clase"] . '" href="' . $elemento["directorio"] . '">' . $elemento["Nombre"] . '</a>';
                            echo '</li>';
                        }
                    ?>
                    <button type="button" class="btn btn-light m-2" data-bs-toggle="modal" data-bs-target="#modalReserva">
                        Reservar Ahora
                    </button>
                    <button type="button" class="btn btn-light m-2" data-bs-toggle="modal" data-bs-target="#modalLogin">
                        Iniciar Sesión
                    </button>
                </ul>
            </div>
        </div>
    </nav>


    <div class="modal fade" id="modalLogin" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <form method="POST" action="login.php" class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Inicio de Sesión</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <?php if ($error): ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $error; ?>
                        </div>
                    <?php endif; ?>
                    <input type="text" name="usuario" class="form-control mb-2" placeholder="Usuario" required>
                    <input type="password" name="contrasenia" class="form-control" placeholder="Contraseña" required>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Ingresar</button>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="modalReserva" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">

            <form method="POST" action="reservar.php" class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Reservar Habitación</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <input type="text" name="nombre" class="form-control mb-2" placeholder="Nombre completo" required>
                    <input type="text" name="nit" class="form-control mb-2" placeholder="NIT" required>
                    <label>Fecha de nacimiento</label>
                    <input type="date" name="fecha_nacimiento" class="form-control mb-2" required>
                    <label>Fecha de ingreso</label>
                    <input type="date" name="fecha_ingreso" class="form-control mb-2" required>
                    <label>Fecha de salida</label>
                    <input type="date" name="fecha_salida" class="form-control" required>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Reservar</button>
                </div>
            </form>
        </div>
    </div>

    <div class="container">
        <h1 class="tropical-header">Bienvenido al Paraíso 🌴</h1>
    </div>
        <?php if ($error): ?>
        <script>
        const loginModal = new bootstrap.Modal(document.getElementById('modalLogin'));
        loginModal.show();
        </script>
    <?php endif; ?>
</body>
</html>