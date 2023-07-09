<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawai = DB::table('tb_pegawai')->paginate(5);
        return view('blog/pegawai', ['pegawai' => $pegawai]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.tambahpegawai');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function insert(Request $request)
    {
        // Validasi input data
        $this->validate($request, [
            'nama' => 'required',
            'telfon' => 'required'
        ]);

        DB::table('tb_pegawai')->insert([
            'nama_pegawai' => $request->nama,
            'telfon_pegawai' => $request->telfon,
            'alamat_pegawai' => $request->alamat,
            'posisi_pegawai' => $request->posisi,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        return redirect('/pegawai');
    }

    /**
     * Display the specified resource.
     */
    public function show(Buku $buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {

    }



    public function delete($id, Request $request)
    {

    }
}
