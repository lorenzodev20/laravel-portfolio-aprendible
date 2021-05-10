<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = "projects";
    // protected $fillable  = ['title', 'description', 'url'];

    // Si descomentamos lo de abajo habremos desabilitado la poroteccion de los campos masivos en laravel.
    // DSe amenra que si creamos mas campos en la tabla no habria necesidad de guardarlo en el $fillable
    protected $guarded = [];
    
    //Sobreescribimos este metodo solo para la clase projects
    public function getRouteKeyName()
    {
        return 'url';
    }
}
