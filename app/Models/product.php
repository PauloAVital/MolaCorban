<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = [
        'id', 
        'name'
    ];

    public function rules() 
    {
        return['name' => 'required'];
    }
}
