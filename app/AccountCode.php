<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountCode extends Model
{
    use SoftDeletes;

    protected $connection = 'mysql';
    protected $fillable   = [];
    protected $table      = 'account_codes';
    protected $dates      = ['deleted_at'];
}
