<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="ARYA FEBIYAN">
        <meta name="description" content="">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Anton&display=swap">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link rel=icon href="https://aryafebiyan.com/favicon.ico">
        <title>dsa</title>
        <style type="text/css"> 
        .body {
            color: #666666;
        }
        .text-gray {
            color: #999999;
        }
        .card {
            -webkit-box-shadow: 0px 0px 8px 0px rgba(187,187,187,1);
            -moz-box-shadow: 0px 0px 8px 0px rgba(187,187,187,1);
            box-shadow: 0px 0px 8px 0px rgba(187,187,187,1);
        }
      .card-img-top {
          border-bottom: 5px solid #72B626;
          max-height: 450px;
          min-height: 350px;
      }
      .card-body {
          background-color: #F2F2F2;
      }
      .btn-green {
          background-color: #72B626;
          color: #FFFFFF;
      }
      h1.title {
          font-size: 4rem;  
          font-family: 'Anton', sans-serif;
      }
      h1 span.my {
          color: #666666;
      }
      h1 span.blog {
          color: #72B626;
      }
      .pagination {
            display: flex;
            justify-content: center;
        }
        .pagination li {
            display: block;
            margin: 5px;
        }
        .page-item:first-child .page-link {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }
        .page-item:last-child .page-link {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }
      @media (max-width: 481px) {  
            h1.title {
              font-family: 'Anton', sans-serif;
              font-size: 2rem;
          }
        }
        .form-control {
            border: 3px solid #BFDEFF;
        }
        </style>
    </head>
    <body>
        <div class="container mt-lg-5 mt-3 mb-lg-5 mb-3">
            <div class="row">
                <div class="col-lg-12 col-12 text-center">
                    <h1 class="title">{{$article->judul_artikel}}</h1>
                </div>
            </div>
    		<div class="row justify-content-center">
    	        <div class="col-lg-9 col-12">
    	                <p class="text-gray mb-0">
                            <i class="far fa-calendar-alt pr-1"></i> {{$article->created_at}}
                            <span class="pl-3 pr-3">&bull;</span>        
                                <i class="fas fa-user-edit"></i> {{$article->user->nama_user}}
                            <span class="pl-3 pr-3">&bull;</span> 
                            <i class="fas fa-tags pr-1"></i> {{$article->category->nama_category}}
                        </p>
                        <h1 class="font-weight-bold mb-3 mt-0">{{$article->nama_article}}</h1>
                        	            <div class="card mb-4">
                        <img src="../../images/artikel/{{$article->gambar_artikel}}" class="card-img-top" alt="{{$article->nama_artikel}}">
                    </div>
                    <p class="lead">{{$article->isi_artikel}}</p>
                                    
                    
    	        </div>
    	    </div>
    	</div>
    	<script src="https://kit.fontawesome.com/32a576806c.js" crossorigin="anonymous"></script>
    </body>
</html>