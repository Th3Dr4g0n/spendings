<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Wallet extends Model
{
    use SoftDeletes;

    public function account()
    {
        return $this->belongsTo(Account::class, 'account_id');
    }
}
