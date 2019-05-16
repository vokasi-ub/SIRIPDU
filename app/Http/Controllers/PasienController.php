<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use Illuminate\Support\Facades\DB;

class PasienController extends Controller
{
    
    public function index()
    {
        $pasien = DB::table('pasien')->get();
        return view('pasien.pasien', compact('pasien'));
    }

    public function search(Request $request)
    {
        $query = $request->input('cari');
        $pasien = DB::table('pasien')->where('id_pasien', 'LIKE', '%' . $query . '%')->paginate(10);
        return view('pasien.result', compact('pasien'));
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
        //DB::table('pasien')->insert([

            //'nama_pasien' => $request->nama_pasien,
            //'jenis_kelamin' => $request->jenis_kelamin,
            //'ttl' => $request->ttl,
            //'alamat' =>$request->alamat,
            //'no_telepon' =>$request->no_telepon,
            //'no_ktp' =>$request->no_ktp

            $pasien = pasien::create([
                'nama_pasien' => $request->input('nama_pasien'),
                'jenis_kelamin' => $request->input('jenis_kelamin'),
                'ttl' => $request->input('ttl'),
                'alamat' => $request->input('alamat'),
                'no_telepon' => $request->input('no_telepon'),
                'no_ktp' => $request->input('no_ktp')

            

        ]);

        return redirect('/pasien');
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
        $pasien = DB::table('pasien')->where('id_pasien',$id)->get();
        return view('pasien.edit',['pasien' => $pasien]);
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
        //DB::table('pasien')->where('id_pasien',$request->id)->update([
            
            
            //'nama_pasien' => $request->nama_pasien,
           //'jenis_kelamin' => $request->jenis_kelamin,
            //'ttl' => $request->ttl,
            //'alamat' =>$request->alamat,
            //'no_telepon' =>$request->no_telepon,
            //'no_ktp' =>$request->no_ktp

        pasien::where('id',$request->id)->update([
            'nama_pasien'=> $request->nama_pasien,
            'jenis_kelamin' => $request->jenis_kelamin,
            'ttl' => $request->ttl,
            'alamat' => $request->alamat,
            'no_telepon' => $request->no_telepon,
            'no_ktp' => $request->no_ktp


        


             
           
        ]);
            return redirect('/pasien');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('pasien')->where('id_pasien',$id)->delete();
        return redirect('/pasien');
    }
    
}
