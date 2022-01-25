@extends('layouts.admin')

@section('content')

<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0">Data Perpindahan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Data Perpindahan</li>
                  </ol>
                </div><!-- /.col -->
              </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>

        <div class="container">
            <a href="/tambahperpindahan" class="btn btn-success">Tambah</a>
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
                    <th scope="col">RT</th>
                    <th scope="col">RW</th>
                    <th scope="col">Status Pindah</th>
                    <th scope="col">Tempat Tujuan Domisili</th>
                    <th scope="col">Alasan Pindah</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach ($data as $row)
                      <tr>
                        <th scope="row">{{ $row->id }}</th>
                        <td>0{{ $row->nik }}</td>
                        <td>{{ $row->nama }}</td>
                        <td>{{ $row->rt }}</td>
                        <td>{{ $row->rw }}</td>
                        <td>0{{ $row->statuspindah }}</td>
                        <td>{{ $row->tujuandomisili }}</td>
                        <td>{{ $row->alasan }}</td>
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
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->