@extends('index.layouts.app')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('index/images/bg_15.jpg')}}');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <h1 class="mb-2 bread">Materi</h1>
        <p class="breadcrumbs"><span class="mr-2"><a href="{{route('welcome')}}">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span>Materi <i class="ion-ios-arrow-forward"></i></span></p>
      </div>
    </div>
  </div>
</section>

<section style="padding-top: 10px;" class="ftco-section bg-light">
    <div class="container">
    <div class="view-account">
        <p><span>Halaman ini berisi tentang materi-materi dari berbagai mata pelajaran dalam beberapa bentuk termasuk didalamnya:  <b>BUKU, MODUL, TUGAS, </b>dan sebagainya. </span></p>
        <section class="module">
            <div class="module-inner">
                <div class="side-bar bg-light">
                    <nav class="side-menu">
                        <ul class="nav">
                            <li><a href="#"><span class="fa fa-moon-o"></span> &nbsp; &nbsp; PAI</a></li>
                            <li><a href="#"><span class="fa fa-balance-scale"></span> &nbsp; PKN</a></li>
                            <li><a href="#"><span class="fa fa-comments"></span> &nbsp; &nbsp; B. Indonesia</a></li>
                            <li><a href="#"><span class="fa fa-asl-interpreting"></span> &nbsp; &nbsp;B. Inggris</a></li>
                            <li><a href="#"><span class="fa fa-calculator"></span> &nbsp; &nbsp; Matematika</a></li>
                            <li><a href="#"><span class="fa fa-history"></span> &nbsp; &nbsp; Sejarah</a></li>
                            <li><a href="#"><span class="fa fa-rocket"></span> &nbsp; &nbsp; Fisika</a></li>
                            <li><a href="#"><span class="fa fa-hourglass-1"></span> &nbsp; &nbsp; Kimia</a></li>
                            <li><a href="#"><span class="fa fa-venus-mars"></span> &nbsp; &nbsp;Biologi</a></li>
                            <li><a href="#"><span class="fa fa-stack-exchange"></span>&nbsp;&nbsp;&nbsp;&nbsp; Ekonomi</a></li>
                            <li><a href="#"><span class="fa fa-handshake-o"></span>&nbsp;&nbsp;&nbsp; Sosiologi</a></li>
                            <li><a href="#"><span class="fa fa-map"></span>&nbsp;&nbsp;&nbsp; Geografi</a></li>
                            <li><a href="#"><span class="fa fa-music"></span>&nbsp;&nbsp;&nbsp; Seni Budaya</a></li>
                            <li><a href="#"><span class="fa fa-signing"></span>&nbsp;&nbsp;&nbsp; Prakarya</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="content-panel">
                    <div class="drive-wrapper drive-list-view">
                        <div class="table-responsive drive-items-table-wrapper">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="name truncate text12">Nama File</th>
                                        <th class="date text12">Tgl Unggah</th>
                                        <th class="size text12">Ukuran</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="name truncate text12"><a href="#">Meeting Notes.txt</a></td>
                                        <td class="date text12">Sep 23, 2015</td>
                                        <td class="size text12">18 KB</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
</section>

@endsection

@section ('script')
<script>
$(function(){
    $("[data-toggle='tooltip']").tooltip();
 })
</script>
@endsection
