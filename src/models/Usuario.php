<?php

namespace TemplateSys\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';
    protected $fillable = ['nombre', 'email', 'password', 'rol_id', 'activo', 'ultimo_login'];

    public function setPasswordAttribute($value)
    {
        if (!empty($value)) {
            $this->attributes['password'] = password_hash($value, PASSWORD_DEFAULT);
        }
    }

    public function rol() {
        return $this->belongsTo('TemplateSys\Models\Rol', 'rol_id');
    }
}
