<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public function wallet(){
        return $this->belongsTo(Wallet::class);
    }
}
