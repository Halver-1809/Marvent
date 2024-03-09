<?php
// Función para verificar los permisos de un usuario
function verificarPermiso($idRolUsuario, $permisoRequerido) {
    // Realizar la consulta a la base de datos para obtener los permisos asociados al rol del usuario
    $permisosUsuario = obtenerPermisosUsuario($idRolUsuario);

    // Verificar si el permiso requerido está presente en los permisos del usuario
    if (in_array($permisoRequerido, $permisosUsuario)) {
        return true;
    }

    return false;
}

// Ejemplo de uso:
$idRolUsuario = obtenerIdRolUsuario(); // Obtener el ID del rol del usuario actual
$permisoRequerido = "editar"; // Permiso requerido para la acción

if (verificarPermiso($idRolUsuario, $permisoRequerido)) {
    // El usuario tiene permisos para realizar la acción
    // Realizar la acción deseada
    // ...
} else {
    // El usuario no tiene permisos para realizar la acción
    // Mostrar un mensaje de error o redirigir a otra página
    // ...
}
?>