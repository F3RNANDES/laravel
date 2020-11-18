<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable =['nome','custo','preco','quantidade','fornecedor','marca','datadevencimento'];

/**
     * Set the user's first name.
     *
     * @param  string  $value
     * @return void
     */
    public function setDatadevencimentoAttribute($value)
    {
       
        $this->attributes['Datadevencimento'] = Carbon::createFromFormat('d/m/Y', $value)->format('Y-m-d');
    }

}


