<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ControleAtendimento extends Model
{
    protected $table = 'atendimento';

    protected $fillable = ['id_comercial', 
                           'segunda',
                           'segundaAlmoco',
                           'segundaAbertura',
                           'segundaAlmocoSaida',
                           'segundaAlmocoEntrada',
                           'segundaFechamento',
                           'terca',
                           'tercaAlmoco',
                           'tercaAbertura',
                           'tercaAlmocoSaida',
                           'tercaAlmocoEntrada',
                           'tercaFechamento',
                           'quarta',
                           'quartaAlmoco',
                           'quartaAbertura',
                           'quartaAlmocoSaida',
                           'quartaAlmocoEntrada',
                           'quartaFechamento',
                           'quinta',
                           'quintaAlmoco',
                           'quintaAbertura',
                           'quintaAlmocoSaida',
                           'quintaAlmocoEntrada',
                           'quintaFechamento',
                           'sexta',
                           'sextaAlmoco',
                           'sextaAbertura',
                           'sextaAlmocoSaida',
                           'sextaAlmocoEntrada',
                           'sextaFechamento',
                           'sabado',
                           'sabadoAlmoco',
                           'sabadoAbertura',
                           'sabadoAlmocoSaida',
                           'sabadoAlmocoEntrada',
                           'sabadoFechamento',
                           'domingo',
                           'domingoAlmoco',
                           'domingoAbertura',
                           'domingoAlmocoSaida',
                           'domingoAlmocoEntrada',
                           'domingoFechamento',
                           'feriado',
                           'feriadoAlmoco',
                           'feriadoAbertura',
                           'feriadoAlmocoSaida',
                           'feriadoAlmocoEntrada',
                           'feriadoFechamento'
                          ];
                          
    public function relVotosPontos() {
        return $this->hasOne('App\Models\ControleComercial', 'id', 'id_comercial' );
    }
}
