<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    public function account()
    {
        return $this->belongsTo(Account::class, 'account_id');
    }

    public function transfers()
    {
        return $this->morphMany(Transfer::class, 'transferable');
    }
}
