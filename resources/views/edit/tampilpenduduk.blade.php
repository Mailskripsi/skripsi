@extends('layouts.app')
@section('content')

<h1 class="text-center mb-4">Edit Data Penduduk</h1>

    
<div class="container">
 
    <div class="row justify-content-center">
       <div class="col-8">
       <div class="card">
            <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NIK</label>
                    <input type="number" name="nik" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->nik }}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->nama }}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tempat Lahir</label>
                    <input type="text" name="tempatlahir" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->tempatlahir }}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                    <input type="date" name="tgllahir" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->tgllahir }}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" name="jeniskelamin" aria-label="Default select example" value="{{ $data->jeniskelamin }}">
                        <option selected>Pilih Jenis Kelamin</option>
                        <option value="laki">Laki-Laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->alamat }}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">RT</label>
                    <input type="text" name="rt" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->rt }}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">RW</label>
                    <input type="text" name="rw" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->rw }}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Agama</label>
                    <select class="form-select" name="agama" aria-label="Default select example" value="{{ $data->agama }}">
                        <option selected>Pilih Jenis Kelamin</option>
                        <option value="islam">Islam</option>
                        <option value="kristen">Kristen</option>
                        <option value="katolik">Katolik</option>
                        <option value="hindu">Hindu</option>
                        <option value="budha">Budha</option>
                        <option value="konghucu">Kong Hu Cu</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Status Nikah</label>
                    <select class="form-select" name="statusnikah" aria-label="Default select example" value="{{ $data->status nikah }}">
                        <option selected>Pilih Status Nikah</option>
                        <option value="sudahmenikah">Sudah Menikah</option>
                        <option value="belummenikah">Belum Menikah</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Pekerjaan</label>
                    <input type="text" name="pekerjaan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->pekerjaan }}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">No Telepon</label>
                    <input type="number" name="notelepon" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->notelepon }}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Status Keluarga</label>
                    <input type="text" name="statuskel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->statuskel }}">
                </div>
                
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
            </div>
        </div>
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
 