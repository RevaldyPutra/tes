@extends ('master')

@section('judul')
<h1>Data Jurusan</h1>
@endsection
@section('content')
<section class="content">
<div class="card">
    <div class="card-header">
    <div class="card-tools">
    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
      <h3 class="card-title">DataTable with minimal features & hover style</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <a href="jurusan/create" class="btn btn-primary">
          <i class="fas fa-plus"></i>
           Tambah
        </a>
      <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
          <th>No</th>
          <th>Siswa</th>
          <th>Kelas</th>
          <th>Jurusan</th>
          <th>Actions</th>
        </tr>
        </thead>
        <tbody>
          @forelse($dataJurusan as $item=>$value)
         <tr>
          <td>{{ $item + 1 }}</td>
          <td>{{ $value->nama_siswa }}</td>
          <td>{{ $value->nama_kelas }}</td>
          <td>{{ $value->jurusan }}</td>
          <td>
          <form action="/jurusan/{{$value->id}}" method="POST">
              <a class="btn btn-info mr-3" href="/jurusan/{{$value->id}}">Detail</a>
              <a class="btn btn-warning mr-3" href="/jurusan/{{$value->id}}/edit">Edit</a>
            @csrf
            @method('DELETE')
           <input type="submit" class="btn btn-danger" value="Delete">
          </form>
            </td>
         </tr>
         @empty
         <tr>
          <td>Data Masih Kosong</td>
        </tr>

        @endforelse
      </table>
    </div>
    <!-- /.card-body -->
</section>
  
@endsection