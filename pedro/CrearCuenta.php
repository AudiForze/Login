<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Crear Cuenta</title>
    <style>
        body {
            background-image: url('img.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }
    </style>
</head>
<body>
    <form action="Registrar.php" method="POST">
        <h1>CREAR CUENTA</h1>
        <hr>
        <?php 
            if (isset($_GET['error'])) {
                echo "<p class='error'>" . $_GET['error'] . "</p>";
            }
            if (isset($_GET['success'])) {
                echo "<p class='success'>" . $_GET['success'] . "</p>";
            }
        ?>
        <hr>
        <i class="fa-solid fa-user"></i>
        <label>Usuario</label>
        <input type="text" name="Usuario" placeholder="Nombre de usuario">

        <i class="fa-solid fa-unlock"></i>
        <label>Clave</label>
        <input type="password" name="Clave" placeholder="Clave">

        <i class="fa-solid fa-user"></i>
        <label>Nombre Completo</label>
        <input type="text" name="Nombre_Completo" placeholder="Nombre completo">

        <hr>
        <button type="submit">Registrar</button>
        <a href="Index.php">Iniciar Sesion</a>
    </form>
</body>
</html>
