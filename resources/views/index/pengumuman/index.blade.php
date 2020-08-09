@extends('index.layouts.app')

@section('title')

@endsection

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('index/images/bg_16.jpg')}}');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <h1 class="mb-2 bread">PENGUMUMAN</h1>
      </div>
    </div>
  </div>
</section>

<section style="padding-top: 10px;" class="ftco-section bg-light">
    <div class="container">
    <div class="view-account">
        <!-- <h3 style="text-align:center">PENGUMUMAN</h3> -->
        <section class="module">
            <div class="module-inner">
                <div class="drive-wrapper drive-list-view">
                        <div class="table-responsive drive-items-table-wrapper">
                            <table class="table">
                            	<thead>
                                    <tr>
                                        <th class="date text12">Tgl Unggah</th>
                                        <th class="name truncate text12">Judul Pengumuman</th>
                                        <th class="size text12">Lihat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="date text12">7 Agu, 2020</td>
                                        <td class="name truncate text12"><a href="#">Meeting Notes.txt</a></td>
                                        <td class="process text12" href="#"><i class="fa fa-download"></i><a href="........">   Unduh</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                 </div>
            </div>
        </section>
    </div>
</div>
</section>

@endsection
