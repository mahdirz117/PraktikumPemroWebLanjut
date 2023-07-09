<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('halaman', 'editpegawai')
@section('judul_halaman', 'Halaman Edit Data Pegawai')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

    <div style="padding-left: 100px; padding-right:100px; height:80%">
        <br>
        <div class="header">
            <div class="header-tittle">
                <h3>Edit Data Pegawai</h3>
                <p>Masukkan data pegawai yang akan diedit</p>
            </div>
            <div class="header-back">
                <button class="btn btn-dark" onclick="history.back()">Kembali</button>
            </div>
        </div>
        <form method="POST" action="/editpegawai">
            @csrf
            @foreach ($pegawai as $data_pegawai)
                <input type="hidden" name="id" value="{{ $data_pegawai->id }}">
                <label for="nama">Nama</label><br>
                <input type="text" name="nama" id="nama" value="{{ $data_pegawai->nama_pegawai }}"><br>

                <label for="telfon_pegawai">No. Telp.</label><br>
                <input type="text" name="nama" id="nama" value="{{ $data_pegawai->nama_pegawai }}"><br>

                <label for="alamat_pegawai">Alamat</label><br>
                <input type="text" name="alamat" id="alamat" value="{{ $data_pegawai->alamat_pegawai }}"><br>

                <label for="posisi_pegawai">Posisi</label><br>
                <input type="text" name="posisi" id="posisi" value="{{ $data_pegawai->posisi_pegawai }}"><br>
            @endforeach
            @if ($errors->any())
                <br>
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif






            <input class="btn btn-primary margin-top-25" type="submit" name="submit" id="submit" value="Simpan Data">
        </form>


    </div>
    <style>
        .padding-left-30 {
            padding-left: 30px;
        }

        .margin-top-25 {
            margin-top: 25px;
        }

        label {
            padding-top: 10px;
        }

        .header {
            content: "";
            display: table;
            clear: both;
            width: 100%;
        }

        .header-tittle {
            float: left;
            width: 50%;
            padding: 10px;
        }

        .header-back {
            padding-top: 35px;
            height: 100%;
        }

        input,
        select {
            width: 250px;
        }
    </style>



@endsection
