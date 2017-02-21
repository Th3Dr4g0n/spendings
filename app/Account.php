<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Account extends Model
{
    use SoftDeletes;

    public function users()
    {
        return $this->belongsToMany(User::class, 'users_accounts', 'account_id', 'user_id');
    }

    public function wallets()
    {
        return $this->hasMany(Wallet::class, 'account_id');
    }

    public function categories()
    {
        return $this->hasMany(Category::class, 'account_id');
    }
}
