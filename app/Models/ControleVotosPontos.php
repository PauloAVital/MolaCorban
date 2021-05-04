<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ControleVotosPontos extends Model
{
    protected $table = 'votos_pontos';

    protected $fillable = ['id_comercial', 
                           'qualidade_votos',
                           'qualidade_pontos',
                           'preco_votos',
                           'preco_pontos',
                           'atendimento_votos',
                           'atendimento_pontos',
                           'local_votos',
                           'local_pontos'
                          ];
    
    public function relVotosPontos() {
        return $this->hasOne('App\Models\ControleComercial', 'id', 'id_comercial' );
    }
}
