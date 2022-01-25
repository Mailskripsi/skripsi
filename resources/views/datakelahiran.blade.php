@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0">Data Kelahiran</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Data Kelahiran</li>
                  </ol>
                </div><!-- /.col -->
              </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>

    
        <div class="container">
            <a href="/tambahkelahiran" class="btn btn-success">Tambah</a>
            <div class="row">
            @if($message = Session::get('success')) 
                <div class="alert alert-success" role="alert">
                    {{ $message }}
                </div>
              @endif
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Nama Ibu</th>
                    <th scope="col">Nama Ayah</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach ($data as $row)
                      <tr>
                        <th scope="row">{{ $row->id }}</th>
                        <td>0{{ $row->nik }}</td>
                        <td>{{ $row->nama }}</td>
                        <td>{{ $row->jeniskelamin }}</td>
                        <td>{{ $row->tempatlahir }}</td>
                        <td>0{{ $row->tgllahir }}</td>
                        <td>0{{ $row->agama }}</td>
                        <td>{{ $row->namaibu }}</td>
                        <td>{{ $row->namaayah }}</td>
                        <td>
                            <a href="/tampilkandata/{{ $row->id }}" class="btn btn-outline-success">Edit</a>
                            <a href="/detail_penduduk/{{ $row->id }}" class="btn btn-outline-info">Info</a>
                        </td>
                      </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
        </div>

</div>

@endsection
    