<?php
session_start();
include('Conexion.php');

if (isset($_POST['Usuario']) && isset($_POST['Clave']) && isset($_POST['Nombre_Completo'])) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $Usuario = validate($_POST['Usuario']);
    $Clave = validate($_POST['Clave']);
    $Nombre_Completo = validate($_POST['Nombre_Completo']);

    if (empty($Usuario)) {
        header("Location: CrearCuenta.php?error=El Usuario Es Requerido");
        exit();
    } elseif (empty($Clave)) {
        header("Location: CrearCuenta.php?error=La clave Es Requerida");
        exit();
    } elseif (empty($Nombre_Completo)) {
        header("Location: CrearCuenta.php?error=El Nombre Completo Es Requerido");
        exit();
    } else {

        $Clave = md5($Clave);
        $Sql = "INSERT INTO usuario(Usuario, Clave, Nombre_Completo) VALUES('$Usuario', '$Clave', '$Nombre_Completo')";
        $result = mysqli_query($conexion, $Sql);

        if ($result) {
            header("Location: CrearCuenta.php?success=Tu cuenta ha sido creada exitosamente");
            exit();
        } else {
            header("Location: CrearCuenta.php?error=Ocurrió un error al crear tu cuenta");
            exit();
        }
    }

} else {
    header("Location: CrearCuenta.php");
    exit();
}
?>
