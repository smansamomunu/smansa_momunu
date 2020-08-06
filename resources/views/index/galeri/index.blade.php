@extends('index.layouts.app')



@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('index/images/bg_14.jpg')}}');">
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

	<h2 class="text-center"><br><span class="black-text">GURU & STAF</span></h2>

<div class="container cta-100 ">
        <div class="container">
          <div class="row blog">
            <div class="col-md-12">
              <div id="blogCarousel" class="carousel slide container-blog" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#blogCarousel" data-slide-to="1"></li>
                  <li data-target="#blogCarousel" data-slide-to="2"></li>
                </ol>
                <!-- Carousel items -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row">
                      <div class="col-md-4" >
                        <div class="item-box-blog">
                          <div class="item-box-blog-image">
                            <!--Date-->
                            <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">GURU</span> </div>
                            <!--Image-->
                            <figure> <img alt="" src="{{asset('/index/images/staff-1.jpg')}}"> </figure>
                          </div>
                          <div class="item-box-blog-body">
                            <!--Heading-->
                            <div class="item-box-blog-heading">
                              <a href="#" tabindex="0">
                                <h5>NURBAETI, S.Kom</h5>
                              </a>
                            </div>
                            
                            <!--Text-->
                            <div class="item-box-blog-text">
                              <p>Teknologi Informasi<br>
                              NUPTK: -</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4" >
                        <div class="item-box-blog">
                          <div class="item-box-blog-image">
                            <!--Date-->
                            <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">GURU</span> </div>
                            <!--Image-->
                            <figure> <img alt="" src="{{asset('/index/images/staff-2.jpg')}}"> </figure>
                          </div>
                          <div class="item-box-blog-body">
                            <!--Heading-->
                            <div class="item-box-blog-heading">
                              <a href="#" tabindex="0">
                                <h5>AZIZAH P. HUSAIN, S.Pd</h5>
                              </a>
                            </div>
                            
                            <!--Text-->
                            <div class="item-box-blog-text">
                              <p>Matematika<br>
                              NUPTK: -</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4" >
                        <div class="item-box-blog">
                          <div class="item-box-blog-image">
                            <!--Date-->
                            <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">GURU</span> </div>
                            <!--Image-->
                            <figure> <img alt="" src="{{asset('/index/images/staff-3.jpg')}}"> </figure>
                          </div>
                          <div class="item-box-blog-body">
                            <!--Heading-->
                            <div class="item-box-blog-heading">
                              <a href="#" tabindex="0">
                                <h5>HIDAYATI, S.Pd</h5>
                              </a>
                            </div>
                            
                            <!--Text-->
                            <div class="item-box-blog-text">
                              <p>Pend. Fisika<br>
                              NUPTK: -</p>
                            </div>
                          </div>
                        </div>
                      </div>

                     </div>
                    <!--.row-->
                  </div>
                  <!--.item-->
                  <div class="carousel-item ">
                    <div class="row">
                    	<div class="col-md-4" >
                        <div class="item-box-blog">
                          <div class="item-box-blog-image">
                            <!--Date-->
                            <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">GURU</span> </div>
                            <!--Image-->
                            <figure> <img alt="" src="{{asset('/index/images/staff-4.jpg')}}"> </figure>
                          </div>
                          <div class="item-box-blog-body">
                            <!--Heading-->
                            <div class="item-box-blog-heading">
                              <a href="#" tabindex="0">
                                <h5>SUDIRMAN, S.Pd</h5>
                              </a>
                            </div>
                            
                            <!--Text-->
                            <div class="item-box-blog-text">
                              <p>Waka Kesiswaan & Penjaskes<br>
                              NUPTK: -</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4" >
                        <div class="item-box-blog">
                          <div class="item-box-blog-image">
                            <!--Date-->
                            <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">GURU</span> </div>
                            <!--Image-->
                            <figure> <img alt="" src="{{asset('/index/images/staff-5.jpg')}}"> </figure>
                          </div>
                          <div class="item-box-blog-body">
                            <!--Heading-->
                            <div class="item-box-blog-heading">
                              <a href="#" tabindex="0">
                                <h5>SUMIATI TIMUMUN, S.Pd</h5>
                              </a>
                            </div>
                            
                            <!--Text-->
                            <div class="item-box-blog-text">
                              <p>Bahasa Inggris<br>
                              NUPTK: -</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4" >
                        <div class="item-box-blog">
                          <div class="item-box-blog-image">
                            <!--Date-->
                            <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">GURU</span> </div>
                            <!--Image-->
                            <figure> <img alt="" src="{{asset('/index/images/staff-6.jpg')}}"> </figure>
                          </div>
                          <div class="item-box-blog-body">
                            <!--Heading-->
                            <div class="item-box-blog-heading">
                              <a href="#" tabindex="0">
                                <h5>SRIYANTI, S.Pd</h5>
                              </a>
                            </div>
                            
                            <!--Text-->
                            <div class="item-box-blog-text">
                              <p>Pend. Kimia<br>
                              NUPTK: -</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--.row-->
                  </div>
                  <!--.item-->
                                    <div class="carousel-item ">
                    <div class="row">
                    	<div class="col-md-4" >
                        <div class="item-box-blog">
                          <div class="item-box-blog-image">
                            <!--Date-->
                            <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">GURU</span> </div>
                            <!--Image-->
                            <figure> <img alt="" src="{{asset('/index/images/staff-7.jpg')}}"> </figure>
                          </div>
                          <div class="item-box-blog-body">
                            <!--Heading-->
                            <div class="item-box-blog-heading">
                              <a href="#" tabindex="0">
                                <h5>ISMAIL ADAM, S.Ag</h5>
                              </a>
                            </div>
                            
                            <!--Text-->
                            <div class="item-box-blog-text">
                              <p>Pend. Agama Islam<br>
                              NUPTK: -</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4" >
                        <div class="item-box-blog">
                          <div class="item-box-blog-image">
                            <!--Date-->
                            <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">GURU</span> </div>
                            <!--Image-->
                            <figure> <img alt="" src="{{asset('/index/images/staff-8.jpg')}}"> </figure>
                          </div>
                          <div class="item-box-blog-body">
                            <!--Heading-->
                            <div class="item-box-blog-heading">
                              <a href="#" tabindex="0">
                                <h5>BAHRUN LATUNRANG, S.Pd</h5>
                              </a>
                            </div>
                            
                            <!--Text-->
                            <div class="item-box-blog-text">
                              <p>Bahasa Inggris<br>
                              NUPTK: 4462759660130133</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4" >
                        <div class="item-box-blog">
                          <div class="item-box-blog-image">
                            <!--Date-->
                            <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">GURU</span> </div>
                            <!--Image-->
                            <figure> <img alt="" src="{{asset('/index/images/staff-9.jpg')}}"> </figure>
                          </div>
                          <div class="item-box-blog-body">
                            <!--Heading-->
                            <div class="item-box-blog-heading">
                              <a href="#" tabindex="0">
                                <h5>RAMLI, S.Pd</h5>
                              </a>
                            </div>
                            
                            <!--Text-->
                            <div class="item-box-blog-text">
                              <p>Pend. Ekonomi<br>
                              NUPTK: -</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--.row-->
                  </div>
                  <!--.item-->
                </div>
                <!--.carousel-inner-->
              </div>
              <!--.Carousel-->
            </div>
          </div>
        </div>
      </div>
   

@endsection

@section('css')
<style type="text/css">

.cta-100 {
  margin-top: 100px;
  padding-left: 2%;
  padding-top: 0%;
}
.col-md-4{
    padding-bottom:20px;
}

.white {
  color: #fff;
}
.mt{float: left;margin-top: -20px;padding-top: 20px;}
.bg-blue-ui {
  background-color: #708198;
}
figure img{width:300px;}

#blogCarousel {
  padding-bottom: 100px;
}

.blog .carousel-indicators {
  left: 0;
  top: -30px;
  height: 80%;
}


/* The colour of the indicators */

.blog .carousel-indicators li {
  background: #708198;
  border-radius: 20%;
  width: 15px;
  height: 3px;
}

.blog .carousel-indicators .active {
  background: #0fc9af;
}

.item-carousel-blog-block {
  outline: medium none;
  padding: 15px;
}

.item-box-blog {
  border: 1px solid #dadada;
  text-align: center;
  z-index: 4;
  padding: 20px;
}

.item-box-blog-image {
  position: relative;
}

.item-box-blog-image figure img {
  width: 100%;
  height: auto;
}

.item-box-blog-date {
  position: absolute;
  z-index: 5;
  padding: 4px 20px;
  top: -20px;
  right: 8px;
  background-color: #41cb52;
}

.item-box-blog-date span {
  color: #fff;
  display: block;
  text-align: center;
  line-height: 1.2;
}

.item-box-blog-date span.mon {
  font-size: 18px;
}

.item-box-blog-date span.day {
  font-size: 16px;
}

.item-box-blog-body {
  padding: 10px;
}

.item-heading-blog a h5 {
  margin: 0;
  line-height: 1;
  text-decoration:none;
  transition: color 0.3s;
}

.item-box-blog-heading a {
    text-decoration: none;
}

.item-box-blog-data p {
  font-size: 13px;
}

.item-box-blog-data p i {
  font-size: 12px;
}

.item-box-blog-text {
  max-height: 100px;
  overflow: hidden;
}

.mt-10 {
  float: left;
  margin-top: -10px;
  padding-top: 10px;
}

.btn.bg-blue-ui.white.read {
  cursor: pointer;
  padding: 4px 20px;
  float: left;
  margin-top: 10px;
}

.btn.bg-blue-ui.white.read:hover {
  box-shadow: 0px 5px 15px inset #4d5f77;
}

</style>
@endsection



