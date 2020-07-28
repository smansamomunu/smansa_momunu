@extends('index.layouts.app')



@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('index/images/bg_12.jpg')}}');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">GALERI</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{route('welcome')}}">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span>Galeri <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
</section>


<div class="my-5 text-center container">
   <div class="row mb-2">
      <div class="col text-center">
         <h1>GURU & STAF</h1>
         <p class="lead">Yang bertugas di SMAN 1 Momunu</p>
      </div>
   </div>
   <div class="row d-flex align-items-center">
      <div class="col-1 d-flex align-items-center justify-content-center">
         <a href="#carouselExampleIndicators" role="button" data-slide="prev">
            <div class="carousel-nav-icon">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <path d="m88.6,121.3c0.8,0.8 1.8,1.2 2.9,1.2s2.1-0.4 2.9-1.2c1.6-1.6 1.6-4.2 0-5.8l-51-51 51-51c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-54,53.9c-1.6,1.6-1.6,4.2 0,5.8l54,53.9z"/>
               </svg>
            </div>
         </a>
      </div>
      <div class="col-10">
         <!--Start carousel-->
         <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="row">
                     <div style="background-image:url('{{asset('index/images/teacher-1.jpg')}}');" class="col-4 col-md d-flex align-items-center justify-content-center">
                     </div>
                     <div style="background-image:url('{{asset('index/images/teacher-2.jpg')}}');" class="col-4 col-md d-flex align-items-center justify-content-center">
                     </div>
                     <div style="background-image:url('{{asset('index/images/teacher-3.jpg')}}');" class="col-4 col-md d-flex align-items-center justify-content-center" class="col-4 col-md d-flex align-items-center justify-content-center">
                        <h3>Hi.</h3>
                     </div>
                  </div>
               </div>
               <div class="carousel-item active">
                  <div class="row">
                     <div style="background-image:url('{{asset('index/images/teacher-4.jpg')}}');" class="col-4 col-md d-flex align-items-center justify-content-center">
                     </div>
                     <div style="background-image:url('{{asset('index/images/teacher-5.jpg')}}');" class="col-4 col-md d-flex align-items-center justify-content-center">
                     </div>
                     <div style="background-image:url('{{asset('index/images/teacher-6.jpg')}}');" class="col-4 col-md d-flex align-items-center justify-content-center" class="col-4 col-md d-flex align-items-center justify-content-center">
                        <h3>Hallo</h3>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--End carousel-->
      </div>
      <div class="col-1 d-flex align-items-center justify-content-center"><a  href="#carouselExampleIndicators" data-slide="next">
         <div class="carousel-nav-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink">
               <path d="m40.4,121.3c-0.8,0.8-1.8,1.2-2.9,1.2s-2.1-0.4-2.9-1.2c-1.6-1.6-1.6-4.2 0-5.8l51-51-51-51c-1.6-1.6-1.6-4.2 0-5.8 1.6-1.6 4.2-1.6 5.8,0l53.9,53.9c1.6,1.6 1.6,4.2 0,5.8l-53.9,53.9z"/>
            </svg>
         </div>
         </a>
      </div>
   </div>
</div>


@endsection

@section('css')
<style type="text/css">
.carousel-nav-icon {
   height: 48px;
   width: 48px;
}
.carousel-item {
   .col, .col-sm, .col-md {
      margin: 8px;
      height: 300px;
      background-size: cover;
      background-position: center center;
   }
}
/* nothing below this point is needed*/
h1 {
   font-family: 'Libre Franklin', sans-serif;
   font-weight: 700;
}

</style>
@endsection

