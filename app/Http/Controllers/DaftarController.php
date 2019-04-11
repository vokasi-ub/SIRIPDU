<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use Illuminate\Support\Facades\DB;

class DaftarController extends Controller
{
    
    public function index()
    {
        $daftar = DB::table('daftar')->get();
        return view('daftar.daftar', compact('daftar'));
    }

    public function search(Request $request)
    {
        $query = $request->input('cari');
        $daftar = DB::table('daftar')->where('id_daftar', 'LIKE', '%' . $query . '%')->paginate(10);
        return view('daftar.result', compact('daftar'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('daftar')->insert([

            'id_daftar' => $request->id_daftar,
            'id_pasien' => $request->id_pasien,
            'id_dokter' => $request->id_dokter,
            'id_poli'   => $request->id_poli,
            'status' => $request->status,
            'jenis_bayar'=> $request->jenis_bayar

        ]);

        return redirect('/daftar');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $daftar = DB::table('daftar')->where('id_daftar',$id)->get();
        return view('daftar.edit',['daftar' => $daftar]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('daftar')->where('id_daftar',$request->id)->update([
            
            
            'id_daftar' => $request->id_daftar,
            'id_pasien' => $request->id_pasien,
            'id_dokter' => $request->id_dokter,
            'id_poli'   => $request->id_poli,
            'status'    => $request->status,
            'jenis_bayar'=> $request->jenis_bayar


           
        ]);
            return redirect('/daftar');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('daftar')->where('id_daftar',$id)->delete();
        return redirect('/daftar');
    }



    
}
