@extends('index.layouts.app')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{url('index/images/bg_7.jpg')}}');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">BERITA</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{route('welcome')}}">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span>Berita <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

		
		<section class="ftco-section bg-light">
			<div class="container">
				<div class="row">
				@foreach($beritas as $berita)
		          <div class="col-md-6 col-lg-4 ftco-animate">
		            <div class="blog-entry">
		              <a href="{{url('berita/'.$berita->id)}}" class="block-20 d-flex align-items-end" style="background-image: url('{{url('index/images/beritas/'.$berita->img)}}');">
						<div class="meta-date text-center p-2">
		                  <span class="day">26</span>
		                  <span class="mos">June</span>
		                  <span class="yr">2019</span>
		                </div>
		              </a>
		              <div class="text bg-white p-4">
		                <h3 class="heading">
		                	<a href="{{url('berita/'.$berita->id)}}">
		                		{{$berita->title}}
			                </a>
			            </h3>
		                <p>{{Str::limit("$berita->deskripsi", 60, ' ...')}}</p>
		                <div class="d-flex align-items-center mt-4">
			                <p class="mb-0"><a href="{{url('berita/'.$berita->id)}}" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
			                <p class="ml-auto mb-0">
			                	<a href="#" class="mr-2">{{$berita->author_name}}</a>
			                	<br>
			                	<a href="#" class="meta-chat"><span> {{$berita->created_at}}</span> </a>
			                </p>
		                </div>
		              </div>
		            </div>
		          </div>
		        @endforeach
        </div>
			</div>
		</section>
@endsection