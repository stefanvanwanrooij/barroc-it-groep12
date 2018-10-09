<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function company(){
        return $this->belongsTo(\App\Company::class);
    }

    public function invoice(){
        return $this->belongsTo(\App\Invoice::class);
    }
}
