<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use Illuminate\Support\Facades\DB;

class DokterController extends Controller
{
    
    public function index()
    {
        $dokter = DB::table('dokter')->get();
        return view('dokter.dokter', compact('dokter'));
    }

    public function search(Request $request)
    {
        $query = $request->input('cari');
        $dokter = DB::table('dokter')->where('id_dokter', 'LIKE', '%' . $query . '%')->paginate(10);
        return view('dokter.result', compact('dokter'));
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
        DB::table('dokter')->insert([

            'nama_dokter' => $request->nama_dokter,
            'no_hp' => $request->np_hp,
            'spesialis' => $request->spesialis,
            'no_hp' =>$request->no_hp,
            'id_poli' =>$request->id_poli

      
        ]);

        return redirect('/dokter');
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
        $dokter = DB::table('dokter')->where('id_dokter',$id)->get();
        return view('dokter.edit',['dokter' => $dokter]);
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
        DB::table('dokter')->where('id_dokter',$request->id)->update([
            
            
            'nama_dokter' => $request->nama_dokter,
            'no_hp' => $request->no_hp,
            'spesialis' => $request->spesialis,
            'id_poli' =>$request->id_poli
        
        
           
        ]);
            return redirect('/dokter');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('dokter')->where('id_dokter',$id)->delete();
        return redirect('/dokter');
    }
    
}
