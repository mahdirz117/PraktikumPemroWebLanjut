<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
    <section class="resume-section" id="education">
        <div class="resume-section-content">
            <h2 class="mb-5">Data Pegawai</h2>
            <p>List data pegawai yang sudah ada</p>
            <div class="header-add">
                <button class="btn btn-primary" onclick="window.location.href='/tambahpegawai'">+ Tambah Pegawai</button>
            </div>
            <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="container mt-5">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pegawai</th>
                                <th>No. Telp.</th>
                                <th>Alamat</th>
                                <th>Posisi</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pegawai as $data_pegawai)
                                <tr>
                                    <td>{{ $data_pegawai->id }}</td>
                                    <td>{{ $data_pegawai->nama_pegawai }}</td>
                                    <td>{{ $data_pegawai->telfon_pegawai }}</td>
                                    <td>{{ $data_pegawai->alamat_pegawai }}</td>
                                    <td>{{ $data_pegawai->posisi_pegawai }}</td>
                                    <td>
                                        <ul class="list-inline m-0">
                                            <li class="list-inline-item">
                                                <a class="btn btn-primary" href="{{ url('/pegawai/edit', $data_pegawai->id) }}">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <form action="{{ route('blog.delete', $data_pegawai->id) }}" method="POST"
                                                    style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger" type="submit" data-toggle="tooltip"
                                                        data-placement="top" title="Delete">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>

                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <br />
                    <div>
                        Halaman : {{ $pegawai->currentPage() }}<br />
                        Jumlah Data : {{ $pegawai->total() }} <br />
                        Data Per Halaman : {{ $pegawai->perPage() }} <br />
                    </div>

                    <div class="d-flex mt-3">
                        {{ $pegawai->links() }}
                    </div>

                </div>
            </div>

        </div>
    </section>
    <hr class="m-0" />
@endsection
