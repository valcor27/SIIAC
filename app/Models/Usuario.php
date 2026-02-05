<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';

    public $timestamps = false;

    protected $hidden = [
        'password_hash',
    ];

    protected $fillable = [
        'email_institucional',
        'password_hash',
        'estatus',
        'niveles_usuarios_id_nivel_usuario',
    ];

    /**
     * método para obtener el password
     */
    public function getAuthPassword()
    {
        return $this->password_hash;
    }
}