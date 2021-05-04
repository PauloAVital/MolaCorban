<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ControleCategoria extends Model
{
    protected $table = 'categoria';

    protected $fillable = ['categoria', 
                           'descricao',
                           'icon'
                          ];

    public function relCategoria() {
        return $this->hasMany('App\Models\ControleSubCategoria', 'id_categoria' );
    }

    public function relBuscarCategoria() {
        return $this->hasMany('App\Models\ControleBuscarCategoria', 'id_categoria' );
    }
}
