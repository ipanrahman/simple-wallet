<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{

    public function user()
    {
        return $this->hashOne(User::class);
    }

    public function transactions(){
        return $this->hasMany(Transaction::class);
    }
}
