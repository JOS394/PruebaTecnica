<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellido', 
        'edad',
        'email',
        'habilidades'
    ];

    protected $casts = [
        'edad' => 'integer',
    ];

    public static function getHabilidadesOptions()
    {
        return [
            'php' => 'PHP',
            'html' => 'HTML',
            'css' => 'CSS',
            'laravel' => 'Laravel',
            'java' => 'Java',
            'js' => 'JavaScript',
            'angular' => 'Angular',
            'node' => 'Node.js',
            'linux' => 'Linux',
            'servidores' => 'Servidores'
        ];
    }
}
