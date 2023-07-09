<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buku = DB::table('tb_buku')->paginate(5);
        return view('blog/tabel', ['buku' => $buku]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function insert(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|max:35',
            'tahun' => 'required|min:4',
            'jumlah' => 'required'
        ]);

        DB::table('tb_buku')->insert([
            'nama_buku' => $request->nama,
            'kategori_buku' => $request->kategori,
            'penerbit_buku' => $request->penerbit,
            'tahun_buku' => $request->tahun,
            'jumlah_buku' => $request->jumlah,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        return redirect('/tabel');
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
        //Untuk mengambil data dari database berdasarkan id
        $buku = DB::table('tb_buku')->where('id', $id)->get();
        //Akses halaman edit dan mengirim data buku sesuai id
        return view('blog/edit', ['buku' => $buku]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {

        $this->validate($request, [
            'nama' => 'required|max:35',
            'tahun' => 'required|min:4',
            'jumlah' => 'required'
        ]);

        DB::table('tb_buku')->where('id', $request->id)->update([
            'nama_buku' => $request->nama,
            'kategori_buku' => $request->kategori,
            'penerbit_buku' => $request->penerbit,
            'tahun_buku' => $request->tahun,
            'jumlah_buku' => $request->jumlah
        ]);

        return redirect('/tabel');
    }



    public function delete($id, Request $request)
    {
        // Hapus data buku berdasarkan ID
        DB::table('tb_buku')->where('id', $id)->delete();

        // Simpan halaman aktif ke dalam session
        $request->session()->put('active_page', $request->input('page'));

        // Redirect kembali ke halaman sebelumnya
        return back()->with('success', 'Data buku berhasil dihapus.');
    }
}
