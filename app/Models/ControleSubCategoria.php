<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ControleSubCategoria extends Model
{
    protected $table = 'subcategoria';

    protected $fillable = ['id_categoria', 
                           'subcategoria'
                          ];
    
    public function relSubCategoria() {
        return $this->hasOne('App\Models\ControleCategoria', 'id', 'id_categoria' );
    }
}
