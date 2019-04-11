<?php

namespace App;

use Illuminate\fbsql_database\Eloquent\Model;

class dokterModel extends Model
{
	//
	protected $table = 'dokter';
	protected $fillable = ['id_dokter','nama_dokter', 'no_hp', 'spesialis', 'id_poli'];
	public $timestamps = true;

	
}