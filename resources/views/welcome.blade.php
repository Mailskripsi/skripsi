@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Selamat Datang Di Aplikasi Kependudukan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Aplikasi Kependudukan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Jumlah Penduduk</span>
                <span class="info-box-number">
                  
                  <small>jiwa</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-male"></i></span>
              
              <div class="info-box-content">
                <span class="info-box-text">Jumlah Penduduk Laki-laki</span>
                <span class="info-box-number"></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-female"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Jumlah Penduduk Perempuan</span>
                <span class="info-box-number"></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-child"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Jumlah Kelahiran</span>
                <span class="info-box-number"></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-suitcase-rolling"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Jumlah Perpindahan</span>
                <span class="info-box-number"></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-radiation"></i></span>
              
              <div class="info-box-content">
                <span class="info-box-text">Jumlah Kematian</span>
                <span class="info-box-number"></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Kegiatan Penduduk</h5>
                <div class="latest_slider">
                    <div class="slick_slider">
                        <div class="single_item"><img src="public/alamat.jpg" alt="" width="600" height="425"></div>
                        <div class="single_item"><img src="public/penduduk.jpg" alt=""  height="425"></div>
                        <div class="single_item"><img src="public/penduduk1.jpg" alt=""  height="425"></div>
                        <div class="single_item"><img src="public/penduduk2.jpg" alt=""  height="425"></div>
                        <div class="single_item"><img src="public/penduduk3.jpg" alt="" height="425"></div>
                        <div class="single_item"><img src="public/penduduk4.jpg" alt=""  height="425"></div>
                        <div class="single_item"><img src="public/penduduk5.jpg" alt="" height="425"></div>
                        <div class="single_item"><img src="public/penduduk6.jpg" alt="" height="425"></div>
                    </div>
                </div>

                
              </div>
             
              <!-- ./card-body -->
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection