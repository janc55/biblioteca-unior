<?php
function obtenerBaseDeDatos()
{
    $pass = "";
    $usuario = "root";
    $nombreBaseDeDatos = "bdd_unior_v3";
    $baseDeDatos = new PDO('mysql:host=localhost;dbname=' . $nombreBaseDeDatos, $usuario, $pass);
    $baseDeDatos->query("set names utf8;");
    $baseDeDatos->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
    $baseDeDatos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $baseDeDatos->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    return $baseDeDatos;
}

function obtenerUsuario($usuarioOCorreo)
{
    // $bd = obtenerBaseDeDatos();
    // $sentencia = $bd->prepare("SELECT * FROM wp_users 
    // INNER JOIN wp_usermeta ON wp_users.ID = wp_usermeta.user_id 
    // WHERE (wp_users.user_login = ? OR wp_users.user_email = ?) AND wp_usermeta.meta_key = ?");
    // $sentencia->execute([$usuarioOCorreo, $usuarioOCorreo, "wp_capabilities"]);
    // return $sentencia->fetchObject();

    $bd = obtenerBaseDeDatos();
    $sentencia = $bd->prepare("SELECT * FROM tb_docentes d WHERE d.ci = ? AND d.doc_pass = ? ");
    $sentencia->execute([$usuario, "tb_docentes"]);
    return $sentencia->fetchObject();
}

function autenticarUsuario($username, $password)
{
    # Obtener usuario. Si no existe, regresamos false inmediatamente
    $usuario = obtenerUsuario($username);
    if (!$usuario) return false;
    # Incluimos PasswordHash pues vamos a realizar algunas comprobaciones
    include_once "PasswordHash.php";
    # Esta es la contraseña almacenada en la base de datos:
    $storedHash = $usuario->user_pass;
    # Crear instancia de PasswordHash
    $passwordHash = new PasswordHash(8, false);
    $metaValue = unserialize($usuario->meta_value);
    # Nota: en mi caso solo permito usuarios administradores y colaboradores; ignoro a los demás.
    # Si tú quieres permitirlos, modifica el código
    if (!isset($metaValue["administrator"]) && !isset($metaValue["contributor"])) {
        return false;
    }
    if ((isset($metaValue["administrator"]) && !$metaValue["administrator"]) && (isset($metaValue["contributor"]) && !$metaValue["contributor"])) {
        return false;
    }
    # Ahora sí comprobamos la contraseña plana ($password) con la hasheada almacenada ($storedHash)
    if ($passwordHash->CheckPassword($password, $storedHash)) {
        # Si llegamos aquí, el usuario y contraseña son correctos
        # Lo único que hacemos es poner el rol del mismo
        if ((isset($metaValue["administrator"])) && $metaValue["administrator"]) {
            $usuario->role = "administrator";
        } else if (isset($metaValue["contributor"]) && $metaValue["contributor"]) {
            $usuario->role = "contributor";
        }
        # Y regresamos el usuario
        return $usuario;
    } else {
        # Caso contrario (la contraseña no coincide) regresamos igualmente false
        return false;
    }
}