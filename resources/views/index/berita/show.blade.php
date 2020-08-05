@extends('index.layouts.app')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('index/images/bg_1.jpg')}}');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Berita</h1>
             <p class="breadcrumbs"><span class="mr-2"><a href="{{route('welcome')}}">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="{{route('berita')}}">Berita <i class="ion-ios-arrow-forward"></i></a></span> <span>{{$berita->title}} <i></i></span></p>
          </div>
        </div>
      </div>
    </section>

    
    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
            <h2 class="mb-3">{{$berita->title}} </h2>
              <img src="{{asset('index/images/beritas/'.$berita->img)}}" alt="" class="img-fluid">
            <p>{!!$berita->deskripsi!!} <p style="margin-top: -15px;">Kontributor : <b>{{$berita->author_name}}</b> <span>| {{$berita->author_job}} </span><span>({{$berita->created_at}})</span></p></p>
            
          </div> <!-- .col-md-8 -->

          <div class="col-lg-4 sidebar ftco-animate">           
            <div class="sidebar-box ftco-animate">
              <h3>Berita Terbaru</h3>
              @foreach ($beritaterbaru as $listberita)
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url('{{url('index/images/beritas/'.$listberita->img)}}');"></a>
                <div class="text">
                  <h3 class="heading"><a href="{{url('/berita/'.$listberita->id)}}">{{$listberita->title}}</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> {{$listberita->created_at}}</a></div>
                    <div><a href="#"><span class="icon-person"></span> {{$listberita->author_name}}</a></div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
            
          </div><!-- END COL -->
        </div>
      </div>
    </section>
@endsection
