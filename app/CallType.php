<?php

namespace jptel;

use Illuminate\Database\Eloquent\Model;

class CallType extends Model
{
    use SoftDeletes;

    protected $connection = 'mysql';
    protected $fillable   = [];
    protected $table      = 'call_types';
    protected $dates      = ['deleted_at'];
}
