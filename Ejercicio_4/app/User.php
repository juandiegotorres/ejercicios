<?php

namespace App;

use App\Rol;
use App\Scopes\NoBorradoScope;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public static function booted()
    {
        static::addGlobalScope(new NoBorradoScope);
    }

    protected $fillable = [
        'nombre', 'edad', 'sexo', 'rol_id', 'borrado'
    ];

    public function rol()
    {
        return $this->belongsTo(Rol::class, 'rol_id');
    }
}
