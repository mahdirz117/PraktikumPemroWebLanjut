<!-- aktifitas3---2.f. Didalam resources/views buat sub view dengan nama kontak.blade.php -->
<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Kontak')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

    <section class="resume-section" id="education">
        <div class="resume-section-content">
            <h2 class="mb-5">Kontak</h2>
            <p>Ini Adalah Halaman Kontak</p>
            <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="subheading mb-5">
                    <a href="wa.me/+6285954312258 ">wa.me/+6285954312258</a> ·
                    <a href="mailto:211131016@mhs.stiki.ac.id">211131007@mhs.stiki.ac.id</a>
                </div>

    </section>
    <hr class="m-0" />


@endsection
