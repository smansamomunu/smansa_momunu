@extends ('index.layouts.app')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('index/images/bg_3.jpg')}}');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Profil Sekolah</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{route('welcome')}}">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span>Profil Sekolah <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section ftco-no-pt ftc-no-pb">
			<div class="container">
				<div class="row d-flex">
					<div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch">
						<div class="img" style="background-image: url('{{asset('index/images/bg_about.jpg')}}'); border"></div>
					</div>
					<div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
          	<h2 class="mb-4">Profil Singkat SMA Negeri 1 Momunu</h2>
						<p>SMA Negeri 1 Momunu, yang telah berdiri sejak tahun 2011 ini secara geografis terletak di wilayah Desa Lamadong 2  Kecamatan Momunu Kab. Buol. Posisi lokasi yang sangat strategis.  ditinjau dari fungsi keberadaannya, SMA Negeri 1 Momunu merupakan salah satu pilihan tepat bagi para orang tua siswa Karena letaknya berada di Jalur transportasi dan dapat diakses dengan berbagai jenis kendaraan yang umumnya dimiliki oleh penduduk di wilayah ini, dari segi jangkauan jarak tempuh ke Sekolah, SMA Negeri 1 Momunu relatif dekat dari berbagai arah. Sementara disekitarnya terdapat lebih dari lima sekolah setingkat SMP yang merupakan sekolah pendukung dimana  secara akumulatif meluluskan siswa dalam kisaran 300 – 350 siswa setiap tahun selama tiga tahun terakhir. Secara kuantatif, siswa SMA Negeri 1 Momunu saat ini memiliki siswa sebanyak 512 orang, dimana pada tahun pelajaran baru jumlah pendaftar mencapai 180 siswa. Sementara yang di terima sebanyak 160 siswa. </p>
						<p>Hal ini dikarenakan keterbatasan sarana Ruang Kelas Untuk kegiatan Belajar yang masih kurang. Sebagai sekolah yang baru  didirikan persoalan sarana dan prasarana merupakan persoalan yang senantiasa menjadi kendala dalam Upaya penyelenggaraan kegiatan pendidikan. Dimana Saat ini,  ketersediaan fasilitas dan sarana Belajar di SMA negeri 1 Momunu masih belum memadai untuk menunjang proses pelaksanaan kegiatan belajar mengajar serta pengembangan keterampilan siswa, sementara di sisi lain, hal ini merupakan suatu tuntutan Kurikulum. Jika  kekurangan ini tidak teratasi, maka akan berkontribusi  menjadi salah satu pemicu rendahnya mutu dan kualitas pendidikan. </p>
					</div>
				</div>
			</div>
		</section>
		

		<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url('{{asset('index/images/images_3.jpg')}}');" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-2 d-flex">
    			<div class="col-md-6 align-items-stretch d-flex">
    				<div class="img img-video d-flex align-items-center" style="background-image: url('{{asset('index/images/about-2.jpg')}}');">
    					<div class="video justify-content-center">
								<a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
									<span class="ion-ios-play"></span>
		  					</a>
							</div>
    				</div>
    			</div>
          <div class="col-md-6 heading-section heading-section-white ftco-animate pl-lg-5 pt-md-0 pt-5">
            <h2 class="mb-4">Sarana dan Prasarana</h2>
            <p>Sebagai sekolah yang baru  didirikan persoalan sarana dan prasarana merupakan persoalan yang senantiasa menjadi kendala dalam Upaya penyelenggaraan kegiatan pendidikan. dimana Saat ini,  ketersediaan fasilitas dan sarana Belajar di SMA negeri 1 Momunu masih belum memadai untuk menunjang proses pelaksanaan kegiatan belajar mengajar serta pengembangan keterampilan siswa, sementara di sisi lain, hal ini merupakan suatu tuntutan yang harus dipenuhi dalam rangka pelaksanaan Kurikulum 2013. Jika  Kekurangan ini tidak teratasi, maka akan berkontribusi  menjadi salah satu pemicu rendahnya mutu dan kualitas pendidikan. Oleh karena itu dipandang perlu mengantisipasi persoalan ini sedini mungkin.</p>
          </div>
        </div>	
    		<div class="row d-md-flex align-items-center justify-content-center">
    			<div class="col-lg-12">
    				<div class="row d-md-flex align-items-center">
		          <div class="col-md-2 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="13">0</strong>
		                <span>Ruang Kelas</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-2 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="0">0</strong>
		                <span>Ruang Guru</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="1">0</strong>
		                <span>Ruang Kepala Sekolah</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="3">0</strong>
		                <span>Ruang Laboratorium</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-2 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="1">0</strong>
		                <span>Perpustakaan</span>
		              </div>
		            </div>
		          </div>
	          </div>
          </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section testimony-section"> 
    	<div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4">Siswa Saat Ini</h2>
            <p>Jumlah Siswa Saat Ini adalah <b>512</b> orang yang terdiri dari:</p>
          </div>
        </div>
        <div class="row d-md-flex align-items-center justify-content-center">
    			<div class="col-lg-12">
    				<div class="row d-md-flex align-items-center">
		          <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text-center">
		                <strong class="number" data-number="158">0</strong>
		                <br>
		                <span>Kelas 10</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text-center">
		                <strong class="number" data-number="179">0</strong>
		                <br>
		                <span>Kelas 11</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text-center">
		                <strong class="number" data-number="175">0</strong>
		                <br>
		                <span>Kelas 12</span>
		              </div>
		            </div>
		          </div>
	          </div>
          </div>
        </div>
      </div>
    </section>



@endsection