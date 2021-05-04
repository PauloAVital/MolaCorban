<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ControleBuscarCategoria extends Model
{
    protected $table = 'buscar_categoria';

    protected $fillable = ['id_categoria', 
                           'pchaves'
                          ];
    
    public function relPchaves() {
        return $this->hasOne('App\Models\ControleControleBuscarCategoriaCategoria', 'id', 'id_categoria' );
    }
}
