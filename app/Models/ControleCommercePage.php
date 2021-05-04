<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ControleCommercePage extends Model
{
    protected $table = 'commerce_pages';

    protected $fillable = ['id_comercial', 
                           'commerce_page'
                          ];
                          
    public function relVotosPontos() {
        return $this->hasOne('App\Models\ControleComercial', 'id', 'id_comercial' );
    }
}
