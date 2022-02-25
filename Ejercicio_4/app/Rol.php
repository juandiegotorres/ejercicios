<?php

namespace App;

use App\Scopes\NoBorradoScope;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    public static function booted()
    {
        static::addGlobalScope(new NoBorradoScope);
    }

    protected $fillable = ['descripcion', 'borrado'];
    protected $table = 'roles';
}
