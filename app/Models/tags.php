<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tags extends Model
{
    protected $fillable = [
        'id', 
        'id_products',
        'name'
    ];

    public function rules() 
    {
        return['name' => 'required'];
    }
}
