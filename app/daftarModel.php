<?php

namespace App;

use Illuminate\fbsql_database\Eloquent\Model;

class daftarModel extends Model
{
	//
	protected $table = 'daftar';
	protected $fillable = ['id_daftar','id_pasien', 'id_dokter', 'id_poli', 'status', 'jenis_bayar'];
	public $timestamps = true;

	
}