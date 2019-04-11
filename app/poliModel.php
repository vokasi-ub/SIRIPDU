<?php

namespace App;

use Illuminate\fbsql_database\Eloquent\Model;

class poliModel extends Model
{
	//
	protected $table = 'poli';
	protected $fillable = ['id_poli','nama_poli', 'keterangan'];
	public $timestamps = true;

	
}