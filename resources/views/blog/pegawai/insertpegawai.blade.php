<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

    <section class="resume-section" id="interests">
        <div class="resume-section-content">
            <h2 class="mb-5">Form Tambah Pegawai</h2>
            <div class="header-back">
                <button class="btn btn-dark" onclick="history.back()">Kembali</button>
            </div>

            <form method="POST" action="/insertpegawai">
                {{ csrf_field() }}
                <div class="form-group mt-3">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Pegawai">
                </div>
                <div class="form-group mt-3">
                    <label for="telfon">telfon</label>
                    <input type="number" class="form-control" name="telfon" id="telfon" placeholder="No. Telp.">
                </div>
                <div class="form-group mt-3">
                    <label for="alamat">alamat</label>
                    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat">
                </div>
                <div class="form-group mt-3">
                    <label for="posisi">posisi</label>
                    <input type="text" class="posisi" name="posisi" id="posisi" placeholder="Posisi">
                </div>

                @if (count($errors) > 0)
                    <div class="alert alert-danger mt-3">
                        @foreach ($errors->all() as $error)
                            - {{ $error }} <br>
                        @endforeach
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger mt-3">
                        {{ session('error') }}!
                    </div>
                @endif

                <div class="form-group mt-3">
                    <input class="btn btn-primary" type="submit" value="Simpan Data">
                </div>
            </form>

        </div>
    </section>
@endsection
