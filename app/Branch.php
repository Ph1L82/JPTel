<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use SoftDeletes;

    protected $connection = 'mysql';
    protected $fillable   = [];
    protected $table      = 'branches';
    protected $dates      = ['deleted_at'];
}
