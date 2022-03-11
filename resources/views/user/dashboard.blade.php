@extends('master-user')

@section('content')
    <section> 
        <div class="container mt-lg-5 mt-3">
            <div class="row">
                <div class="col-lg-12 col-12 text-center">
                    <h1 class="title"><span class="my">Artikel</span> <span class="blog">Hot</span></h1>
                </div>
            </div>
            <div class="row mt-lg-4 mt-4 mb-4">
                @foreach($favorite  as $key => $items)    
                    <div class="col-lg-4 col-12 mb-3">
                        <div class="card">
                            <img src="../../images/artikel/{{$items->gambar_artikel}}" class="card-img-top"  alt="">
                            <div class="card-body">
                            
                            <h4 class="card-title font-weight-bold mr-5">{{$items->judul_artikel}}</h4>                 
                            <p class="card-text"></p>
                            <div class="row">
                                <div class="col-4">
                                    <a href="{{route('showarticle', $items->id)}}" class="btn btn-primary">Read more &rarr;</a>
                                </div>
                                <div class="col-8">
                                    <p class="text-gray small ml-5">
                                        <i class="far fa-calendar-alt"></i> {{ $items->created_at}}
                                        <a href="#" class="btn btn-sm btn-outline-secondary">
                                            <i class="fas fa-user-edit"></i> {{ $items->user->nama_user}}
                                        </a>
                                    </p>
                                </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-lg-12 col-12 text-center">
                    <h1 class="title"><span class="my">Artikel</span> <span class="blog">Terbaru</span></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-12 text-center">
                
                </div>
            </div>
            <div class="row mt-lg-4 mt-4 mb-4">
                @foreach($terbaru  as $key => $items)    
                    <div class="col-lg-4 col-12 mb-3">
                        <div class="card">
                            <img src="../../images/artikel/{{$items->gambar_artikel}}" class="card-img-top"  alt="">
                            <div class="card-body">
                            
                            <h4 class="card-title font-weight-bold mr-5">{{$items->judul_artikel}}</h4>                 
                            <p class="card-text"></p>
                            <div class="row">
                                <div class="col-4">
                                    <a href="{{route('showarticle', $items->id)}}" class="btn btn-primary">Read more &rarr;</a>
                                </div>
                                <div class="col-8">
                                    <p class="text-gray small ml-5">
                                        <i class="far fa-calendar-alt"></i> {{ $items->created_at}}
                                        <a href="#" class="btn btn-sm btn-outline-secondary">
                                            <i class="fas fa-user-edit"></i> {{ $items->user->nama_user}}
                                        </a>
                                    </p>
                                </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                @endforeach
            </div>
        </div>
        <div class="container mt-lg-5 mt-3">
            <div class="row">
                <div class="col-lg-12 col-12 text-center">
                    <h1 class="title"><span class="my">OUR</span> <span class="blog">BLOG</span></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-12 text-center">
                   
                </div>
            </div>
        <div class="row mt-lg-4 mt-4 mb-4">
        @if(Session::get("success"))
        <div class="alert alert-success">{!! Session::get("success") !!}</div>
              @endif
           @foreach($article  as $key => $items)

                  
           <div class="col-lg-4 col-12 mb-3">
            
            <div class="card">
                <img src="../../images/artikel/{{$items->gambar_artikel}}" class="card-img-top"  alt="">
                <div class="card-body">
                   
                   <h4 class="card-title font-weight-bold mr-5">{{$items->judul_artikel}}</h4>                 
                    <p class="card-text"></p>
                    <div class="row">
                        <div class="col-4">
                            <a href="{{route('showarticle', $items->id)}}" class="btn btn-primary">Read more &rarr;</a>
                        </div>
                        <div class="col-8">
                            <p class="text-gray small ml-5">
                                <i class="far fa-calendar-alt"></i> {{ $items->created_at}}
                                <a href="" class="btn btn-sm btn-outline-secondary">
                                    <i class="fas fa-user-edit"></i> {{ $items->user->nama_user}}
                                </a>
                              </p>
                        </div>
                    </div>
                </div>
            </div>
              
          </div>

          @endforeach
           <div class="col-12 mt-3">
            {{ $article->links() }}
           </div>

           
      </div>
    </section>
    <!-- /.content -->
@endsection