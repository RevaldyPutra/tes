@extends ('master')

@section('judul')
<h1>Halaman Edit Jurusan</h1>
@endsection
@section('content')
<section class="content">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Data Jurusan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/jurusan/{{ $showJurusanById->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                <div class="form-group">
                    <label for="InputNIS">Nama Siswa</label>
                    <input type="text" name="nama_siswa" class="form-control" id="InputKelas" placeholder="Masukan Nama Siswa" value="{{ $showJurusanById->nama_siswa }}" >
                    @error('nama_siswa')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror

                  <div class="form-group">
                    <label for="InputNIS">Nama kelas</label>
                    <input type="text" name="nama_kelas" class="form-control" id="InputKelas" placeholder="Masukan Nama Kelas" value="{{ $showJurusanById->nama_kelas }}" >
                    @error('nama_kelas')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror
                </div>

                <div class="form-group">
                    <label for="InputNama">Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" id="InputJurusan" placeholder="Masukan Nama Jurusan" value="{{ $showJurusanById->jurusan }}" >
                    @error('jurusan')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            </div>
            @enderror
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Save</button>
                  <a class="btn btn-primary"href="/jurusan">Back</a>
                </div>
              </form>
            </div>
</section>
@endsection