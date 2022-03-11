@extends('master')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Tambah Data Tarif</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('adminArticle') }}">Article</a></li>
                    <li class="breadcrumb-item active">Article</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Isi data - data dibawah ini dengan benar</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="{{ route('postarticle') }}" enctype="multipart/form-data" id="quickForm">
              @csrf
              <div class="card-body">
                  <input type="hidden" name="user_id" value={{auth()->user()->id}}>
                <div class="form-group">
                  <label for="daya">Judul Artikel</label>
                  <input type="text" name="judul_artikel" class="form-control" id="judul_artikel" placeholder="Masukkan Judul Artikel Listrik">
                </div>
                <div class="form-group">
                  <label for="harga">isi artikel</label>
                  <textarea name="isi_artikel" id="isi_artikel" class="form-control" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <label for="daya">Pilih Kategori</label>
                    <select name="category_id" id="" class="form-control" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                    @foreach ($kategori as $items)
                        <option value={{$items->id}}>{{$items->nama_category}}</option>
                    @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="daya">Gambar Artikel</label>
                    <input type="file" name="gambar_artikel" class="form-control" id="gambar_artikel" placeholder="Masukkan Gambar Artikel">
                  </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
          </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
@endsection