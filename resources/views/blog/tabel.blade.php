<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
    <section class="resume-section" id="education">
        <div class="resume-section-content">
            <h2 class="mb-5">Data Buku</h2>
            <p>List buku yang tersedia di perpustakaan</p>
            <a href="/tambah" class="btn btn-primary">+ Tambah Buku</a>

            <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="container mt-5">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama buku</th>
                                <th>Kategori</th>
                                <th>Penerbit</th>
                                <th>Tahun</th>
                                <th>Jumlah Buku</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($buku as $data_buku)
                                <tr>
                                    <td>{{ $data_buku->id }}</td>
                                    <td>{{ $data_buku->nama_buku }}</td>
                                    <td>{{ $data_buku->kategori_buku }}</td>
                                    <td>{{ $data_buku->penerbit_buku }}</td>
                                    <td>{{ $data_buku->tahun_buku }}</td>
                                    <td>{{ $data_buku->jumlah_buku }}</td>
                                    <td>
                                        <ul class="list-inline m-0">
                                            <li class="list-inline-item">
                                                <a class="btn btn-primary" href="{{ url('/blog/edit', $data_buku->id) }}">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <form action="{{ route('blog.delete', $data_buku->id) }}" method="POST"
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
                        Halaman : {{ $buku->currentPage() }}<br />
                        Jumlah Data : {{ $buku->total() }} <br />
                        Data Per Halaman : {{ $buku->perPage() }} <br />
                    </div>

                    <div class="d-flex mt-3">
                        {{ $buku->links() }}
                    </div>

                </div>
            </div>

        </div>
    </section>
    <hr class="m-0" />
@endsection
