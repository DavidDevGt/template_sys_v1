<?php
namespace TemplateSys\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model {
    protected $table = 'usuarios';
    protected $fillable = ['nombre', 'email', 'password'];

    // Más metodos de la clase Usuario
    public function setPassword($password) {
        if ($password !== null && $password !== '') {
            $this->update([
                'password' => password_hash($password, PASSWORD_DEFAULT)
            ]);
        }
    }

    public function setNombre($nombre) {
        if ($nombre !== null && $nombre !== '') {
            $this->update([
                'nombre' => $nombre
            ]);
        }
    }

    public function setEmail($email) {
        if ($email !== null && $email !== '') {
            $this->update([
                'email' => $email
            ]);
        }
    }

    // public function setRol($rol) {
    //     if ($rol !== null && $rol !== '') {
    //         $this->update([
    //             'rol' => $rol
    //         ]);
    //     }
    // }

    // public function setActivo($activo) {
    //     if ($activo !== null && $activo !== '') {
    //         $this->update([
    //             'activo' => $activo
    //         ]);
    //     }
    // }

    // public function setUltimoLogin($ultimo_login) {
    //     if ($ultimo_login !== null && $ultimo_login !== '') {
    //         $this->update([
    //             'ultimo_login' => $ultimo_login
    //         ]);
    //     }
    // }
}