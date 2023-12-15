@extends('layout.master')

@section('content')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Laravel</title>
  </head>
  <body>
    <h1 class="text-center">Data Daftar Pegawai</h1>
    <div class="container">
        <a href="/tambahpegawai" class="btn btn-success">Tambah</a>
        <div class="row">
            @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
</div>
@endif
        <table class="table table-striped border-whites table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Alamat</th>
      <th scope="col">No Telepon</th>
      <th scope="col">Di Buat</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @php
    $no = 1;
    @endphp
    @foreach ($data as $row)
    <tr>
      <th scope="row">{{ $no++ }}</th>
      <td>{{ $row->nama }}</td>
      <td>{{ $row->jeniskelamin }}</td>
      <td>{{ $row->alamat }}</td>
      <td>+62-{{ $row->notelpon }}</td>
      <td>{{ $row->created_at->format('D M Y') }}</td>
      <td>
      <a href="/tampilkandata/{{ $row->id }}" class="btn btn-warning">Edit</a>
      <a href="/delete/{{ $row->id }}" class="btn btn-danger">Delete</a>
    </td>
       

    </tr>
    @endforeach
   

  </tbody>
</table>
        </div>

    </div>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
@endsection