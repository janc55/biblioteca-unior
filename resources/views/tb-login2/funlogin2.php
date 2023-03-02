<?php
function obtenerBaseDeDatosWordPress()
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

function obtenerUsuarioDeWordPress($usuarioOCorreo)
{
    $bd = obtenerBaseDeDatosWordPress();
    $sentencia = $bd->prepare("SELECT * FROM wp_users 
INNER JOIN wp_usermeta ON wp_users.ID = wp_usermeta.user_id 
WHERE (wp_users.user_login = ? OR wp_users.user_email = ?) AND wp_usermeta.meta_key = ?");
    $sentencia->execute([$usuarioOCorreo, $usuarioOCorreo, "wp_capabilities"]);
    return $sentencia->fetchObject();
}