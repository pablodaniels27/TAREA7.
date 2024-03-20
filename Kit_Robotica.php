<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KitDeRobotica extends Model
{
    use HasFactory;

    public function cursos()
    {
        return $this->hasMany(Curso::class, 'id_kit_robotica');
    }
}
