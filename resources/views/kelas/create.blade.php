@extends('master')

@section('judul')
<h1>Manajemen Kelas</h1>
@endsection
@section('content')
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add New Class</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/kelas" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="InputNIS">Nama Siswa</label>
                    <input type="text" name="nama_siswa" class="form-control" id="InputNama" placeholder="Nama Siswa">
                  </div>
                  
                  <div class="form-group">
                    <label for="InputNama">Nama Kelas</label>
                    <input type="text" name="nama_kelas" class="form-control" id="InputKelas" placeholder="Nama Kelas">
                  </div>
                  
                  <div class="form-group">
                    <label for="InputAlamat">Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" id="InputJurusan" placeholder="Jurusan">
                  </div>
                  
                  <div class="form-group">
                <label>Jenis Kelamin</label>
                <select class="form-control" name="jenis_kelamin">
                  <option disabled selected>-- Pilih Salah Satu --</option>
                  <option value="L">Laki-laki</option>
                  <option value="P">Perempuan</option>
                </select>
              </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
@endsection