<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use Illuminate\Support\Facades\DB;

class PoliController extends Controller
{
    
    public function index()
    {
        $poli = DB::table('poli')->get();
        return view('poli.poli', compact('poli'));
    }

    public function search(Request $request)
    {
        $query = $request->input('cari');
        $poli = DB::table('poli')->where('id_poli', 'LIKE', '%' . $query . '%')->paginate(10);
        return view('poli.result', compact('poli'));
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
        DB::table('poli')->insert([

            'nama_poli' => $request->nama_poli,
            'keterangan' => $request->keterangan
            
           
            
        ]);

        return redirect('/poli');
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
        $poli = DB::table('poli')->where('id_poli',$id)->get();
        return view('poli.edit',['poli' => $poli]);
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
        DB::table('poli')->where('id_poli',$request->id)->update([
            
            
            'nama_poli' => $request->nama_poli,
            'keterangan' => $request->keterangan
        
        ]);
            return redirect('/poli');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('poli')->where('id_poli',$id)->delete();
        return redirect('/poli');
    }
    
}
