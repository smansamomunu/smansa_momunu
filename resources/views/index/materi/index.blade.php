@extends ('index.layouts.app')

@section('css')

@endsection

@section ('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('index/images/bg_10.jpg')}}');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <h1 class="mb-2 bread">MATERI</h1>
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
                <div class="side-bar">
                    <nav class="side-menu">
                        <ul class="nav">
                            <li><a href="#"><span class="fa fa-cog"></span> PAI</a></li>
                            <li><a href="#"><span class="fa fa-cog"></span> PKN</a></li>
                            <li><a href="#"><span class="fa fa-user"></span> B. Indonesia</a></li>
                            <li><a href="#"><span class="fa fa-cog"></span> B. Inggris</a></li>
                            <li><a href="#"><span class="fa fa-cog"></span> Matematika</a></li>
                            <li><a href="#"><span class="fa fa-cog"></span> Sejarah</a></li>
                            <li><a href="#"><span class="fa fa-cog"></span> Fisika</a></li>
                            <li><a href="#"><span class="fa fa-cog"></span> Kimia</a></li>
                            <li><a href="#"><span class="fa fa-cog"></span> Biologi</a></li>
                            <li><a href="#"><span class="fa fa-cog"></span> Ekonomi</a></li>
                            <li><a href="#"><span class="fa fa-cog"></span> Sosiologi</a></li>
                            <li><a href="#"><span class="fa fa-cog"></span> Geografi</a></li>
                            <li><a href="#"><span class="fa fa-cog"></span> Seni Budaya</a></li>
                            <li><a href="#"><span class="fa fa-cog"></span> Prakarya</a></li>
                            
                            

                        </ul>
                    </nav>
                </div>

                <div class="content-panel">
                    <div class="drive-wrapper drive-list-view">
                        <div class="table-responsive drive-items-table-wrapper">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="type"></th>
                                        <th class="name truncate">Nama File</th>
                                        <th class="date">Tgl Unggah</th>
                                        <th class="size">Ukuran</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="type"><i class="fa fa-file-text-o text-primary"></i></td>
                                        <td class="name truncate"><a href="#">Meeting Notes.txt</a></td>
                                        <td class="date">Sep 23, 2015</td>
                                        <td class="size">18 KB</td>
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