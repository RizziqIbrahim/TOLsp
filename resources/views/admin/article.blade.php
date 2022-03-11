@extends('master')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Data Tarif</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Tarif</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <a href="{{ route('addarticle') }}"><button class="btn btn-primary">Tambahkan Data Daya</button></a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>id</th>
                  <th>Author</th>
                  <th>kategori</th>
                  <th>judul artikel</th>
                  <th>isi artikel</th>
                  <th>gambar artikel</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($article as $item => $items)
                <tr>
                  <td>{{$items->id}}</td>
                  <td>{{$items->user->nama_user}}</td>
                  <td>{{$items->category->nama_category}}</td>
                  <td>{{$items->judul_artikel}}</td>
                  <td>{{$items->isi_artikel}}</td>
                  <td><img src="../../images/artikel/{{$items->gambar_artikel}}" class="rounded" width="200px" alt=""></td>
                  <td class="text-center">
                    <a href="{{ route('editarticle',$items->id) }}"><button class="btn btn-success mr-3">Edit</button></a>
                    <a href="{{ route('deletearticle', $items->id) }}"><button class="btn btn-danger ">Delete</button></a>
                  </td>
                </tr>
                @endforeach
            </table>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
    </div>
  </div>
</section>
@endsection