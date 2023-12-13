<?php
namespace TemplateSys\Controllers;

use TemplateSys\Models\Usuario;

class UsuarioController {
    public function index() {
        $usuarios = Usuario::all();
        // Lógica para mostrar los usuarios
    }

    public function store() {
        $usuario = Usuario::create($_POST);
        // Lógica adicional después de guardar el usuario
    }

    public function update($id) {
        $usuario = Usuario::find($id);
        $usuario->update($_POST);
        // Lógica adicional después de actualizar el usuario
    }

    public function destroy($id) {
        Usuario::destroy($id);
        // Lógica adicional después de eliminar el usuario
    }

    public function register() {
        // Lógica para registrar un usuario
    }
    
    public function login() {
        // Lógica para iniciar sesión
    }
}
