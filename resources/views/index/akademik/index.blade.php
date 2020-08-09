@extends('index.layouts.app')

@section ('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('index/images/bg_9.jpg')}}');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">AKADEMIK</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{route('welcome')}}">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span>Akademik <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
			<div class="container-fluid px-4">
				<div class="row">
					<div class="col-md-6 course ftco-animate">
						<div class="img" style="background-image: url('/../index/images/course-1.jpg');"></div>
						<div class="text pt-4">
							<p class="meta d-flex">
								<span><i class="icon-user mr-2"></i>Kartini B. Samah, S.Pd</span>
								<span><i class="icon-table mr-2"></i>Jumlah Peminat 186</span>
								<span><i class="icon-calendar mr-2"></i>Berdiri 8 Tahun</span>
							</p>
							<h3><a href="#">JURUSAN MATEMATIKA & ILMU ILMU ALAM</a></h3>
							<p>Jurusan ini diiisi dan dipilih oleh siswa yang lebih cenderung tertarik pada bidang mata pelajaran Matematika dan ilmu-ilmu alam seperti Fisika, Kimia, dan Biologi</p>
							<p><a href="https://docs.google.com/forms/d/1eDX-FasGe1sR4dm5uow1ZzWRmqu5GfKUxEKEpMj2gBE/edit?usp=sharing" target="_blank" class="btn btn-primary">Daftar Sekarang</a></p>
						</div>
					</div>
					<div class="col-md-6 course ftco-animate">
						<div class="img" style="background-image: url('/../index/images/course-2.jpg');"></div>
						<div class="text pt-4">
							<p class="meta d-flex">
								<span><i class="icon-user mr-2"></i>SUTARI ILADAT, S.Pd</span>
								<span><i class="icon-table mr-2"></i>Jumlah Peminat 326</span>
								<span><i class="icon-calendar mr-2"></i>Berdiri 8 Tahun</span>
							</p>
							<h3><a href="#">ILMU ILMU SOSIAL</a></h3>
							<p>Jurusan ini diisi dan dipilih oleh siswa-siswa yang mempunyai bakat dan kecenderungan pada bidang ilmu sosial khususnya pada mata pelajaran Sosiologi, Geografi dan Ekonomi</p>
							<p><a href="https://docs.google.com/forms/d/1eDX-FasGe1sR4dm5uow1ZzWRmqu5GfKUxEKEpMj2gBE/edit?usp=sharing" target="_blank" class="btn btn-primary">Daftar Sekarang</a></p>
						</div>
					</div>
				</div>
			</div>
		</section>
@endsection