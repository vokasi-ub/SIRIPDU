<?php

namespace App;

use Illuminate\fbsql_database\Eloquent\Model;

class pasienModel extends Model
{
	//
	protected $table = 'pasien';
	protected $fillable = ['id_pasien','nama_pasien', 'jenis_kelamin', 'no_telepon', 'alamat', 'no_ktp'];
	public $timestamps = true;

	
}