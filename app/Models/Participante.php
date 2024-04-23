<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellido',
        'cedula',
        'departamento',
        'ciudad',
        'celular',
        'email',
        
    ];

    // protected $casts = [
    //     'habeas_data' => 'boolean',
    // ];
    


}
