<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class jurusancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dataJurusan = DB::table('jurusan')->get();
        return view ('jurusan.index', compact('dataJurusan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('jurusan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $query = DB::table('jurusan')->insert([
            "nama_siswa" => $request["nama_siswa"],
            "nama_kelas" => $request["nama_kelas"],
            "jurusan" => $request["jurusan"],
        ]);

        return redirect('/jurusan');
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
        $showjurusanById = DB::table('jurusan')->where('id', $id)->first();
        //
        return view('jurusan.show', compact('showjurusanById'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $showJurusanById = Db::table('jurusan')->where('id', $id)->first();
        //
        return view('jurusan.edit', compact('showJurusanById'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'nama_siswa'     => 'required',
            'nama_kelas'     => 'required',
            'jurusan'        => 'required',
        ]);
        $query =DB::table('jurusan')
        ->where('id', $id)
        ->update([
            'nama_siswa'    => $request["nama_siswa"],
            'nama_kelas'    => $request["nama_kelas"],
            'jurusan'       => $request["jurusan"], 
        ]);
        return redirect('/jurusan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $query = DB::table('jurusan')->where('id', $id)->delete();
        return redirect('/jurusan');
    }
}
