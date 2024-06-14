<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    //Relacion uno a muchos con Tarea 
    public function tareas(){
        return $this->hasMnay(Tarea::class);
    }
}
