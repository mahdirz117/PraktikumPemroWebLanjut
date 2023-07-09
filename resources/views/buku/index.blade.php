<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link rel="stylesheet" href="{{ url('css/topnav.css') }}">
</head>

<body>
   <div class="topnav">
      <a class="active" href="#home">Home</a>
      <a href="#news">News</a>
      <a href="#contact">Contact</a>
      <a href="#about">About</a>
   </div>
   <table class="table">
      <thead>
         <tr>
            <th>No.</th>
            <th>Nama Buku</th>
            <th>Kategori</th>
            <th>Penerbit</th>
            <th>Tahun</th>
            <th>Jumlah Buku</th>
         </tr>
      </thead>
      <tbody>
      @foreach($buku as $data_buku)
<tr>
    <td></td>
    <td>{{ $data_buku->nama_buku }}</td>
    <td>{{ $data_buku->kategori_buku }}</td>
    <td>{{ $data_buku->penerbit_buku }}</td>
    <td>{{ $data_buku->tahun_buku }}</td>
    <td>{{ $data_buku->jumlah_buku }}</td>
</tr>
@endforeach

   </tbody>
   </table>
</body>
</html>
