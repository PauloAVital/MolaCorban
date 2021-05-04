<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ControleComercial extends Model
{
    protected $table = 'comercial';

    protected $fillable = ['uid',
                           'id_categoria',
                           'id_subcategoria',
                           'logo',
                           'fraseDestaque',
                           'cnpj',
                           'cpf',
                           'empresa',
                           'telefone',
                           'email',
                           'senha',
                           'cep',
                           'cidade',
                           'bairro',
                           'rua',
                           'numero',
                           'complemento',
                           'ip',
                           'navegador',
                           'computador',
                           'sistema',
                           'inauguracaoFisica',
                           'concorda',
                           'link',
                           'site',
                           'clicks',
                           'logado',
                           'ativar'
                          ];

    
}
