<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ControleNewsletter extends Model
{
    protected $table = 'newsletter';
    
    protected $fillable = ['email'];

    public function rules()
    {
        return [
            'email' => 'required'
        ];
    }
}
