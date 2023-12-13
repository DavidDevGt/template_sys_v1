<?php
namespace TemplateSys\Controllers;

use TemplateSys\Models\Usuario;

class UsuarioController {
    public function index() {
        $usuarios = Usuario::all();
        // Lógica para mostrar los usuarios
    }
    // Más métodos

    // public function store() {
    //     $usuario = new Usuario;
    //     $usuario->setNombre($_POST['nombre']);
    //     $usuario->setEmail($_POST['email']);
    //     $usuario->setPassword($_POST['password']);
    //     $usuario->save();
    //     // Lógica para guardar el usuario
    // }

    // public function update($id) {
    //     $usuario = Usuario::find($id);
    //     $usuario->setNombre($_POST['nombre']);
    //     $usuario->setEmail($_POST['email']);
    //     $usuario->setPassword($_POST['password']);
    //     $usuario->save();
    //     // Lógica para actualizar el usuario
    // }

    // public function destroy($id) {
    //     $usuario = Usuario::find($id);
    //     $usuario->delete();
    //     // Lógica para eliminar el usuario
    // }
}
