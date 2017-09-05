<?php

namespace jptel;

use Illuminate\Database\Eloquent\Model;

class Cdr extends Model
{
	protected $connection = 'mysql_pbx';

	protected $fillable = [];

	protected $table = 'cdr';

	public $timestamps = false;
    //
}