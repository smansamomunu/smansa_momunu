@extends('index.layouts.app')

@section('content')
<section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url({{asset('index/images/bg_1.jpg')}});">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
            <h1 class="mb-4">Pendidikan Karakter</h1>
            <p>Menguatkan Pendidikan Karakter Yang Selaras Dengan Kebudayaan Lokal. </p>
            <a href="#services" class="btn btn-primary">Ayo</a>
          </div>
        </div>
        </div>
      </div>

      <div class="slider-item" style="background-image:url({{asset('index/images/bg_2.jpg')}});">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
            <h1 class="mb-4">Kenapa Harus SMA Negeri 1 Momunu ?</h1>
            <p>Fasilitas Menunjang, Pengajar Profesional, <i>Go E-Learning</i> dan Lain-lain.</p>
            <a href="#services" class="btn btn-primary">Ayo</a>
          </div>
        </div>
        </div>
      </div>
      
      <div class="slider-item" style="background-image:url({{asset('index/images/bg_4.jpg')}});">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
            <h1 class="mb-4">Ekstra Kurikuler </h1>
            <p>Kegiatan Ekstra Kurikuler yang Adaptif dan Akuntabel.</p>
            <a href="#services" class="btn btn-primary">Ayo</a>
          </div>
        </div>
        </div>
      </div>
      
      <div class="slider-item" style="background-image:url({{asset('index/images/bg_6.jpg')}});">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
            <h1 class="mb-4">Memaksimalkan Proses & Kualitas Layanan.</h1>
            <p>Guna Menyiapkan Generasi yang Berkualitas dan Kompetitif.</p>
            <a href="#services" class="btn btn-primary">Ayo</a>
          </div>
        </div>
        </div>
      </div>
    </section>

    <section id="services" class="ftco-services ftco-no-pb">
      <div class="container-wrap">
        <div class="row no-gutters">
          <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-teacher"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Tenaga Pengajar Profesional</h3>
                <p>Kualitas Pelajar Tergantung Siapa Pengajarnya, Maka SMA Negeri 1 Momunu Akan Senantiasa Mendorong Profesionalisme Tenaga Pendidik.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-darken">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-reading"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Belajar Dengan Nyaman</h3>
                <p>Pembelajaran Yang Nyaman Adalah Salah Satu Kunci Keberhasilan Belajar, SMA Negeri 1 Momunu Terus Berusaha Menciptakan Suasana Pembelajaran Yang Nyaman.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-books"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Buku &amp; Perpustakaan</h3>
                <p>Buku Dan Perpustakan Adalah Suatu Fasilitas Yang Wajib Disediakan Institusi Pendidikan, Maka SMA Negeri 1 Momunu Telah Membangun Perpustakaan Buku dan Akan Terus Dikembangkan.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-darken">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-diploma"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Ekstrakurikuler</h3>
                <p>Ekstrakurikuler Adalah Pembelajaran Tambahan atau Minat Yang Telah Disediakan Oleh SMA Negeri 1 Momunu.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>
    
    <section class="ftco-section ftco-no-pt ftc-no-pb">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch">
            <div class="img" style="background-image: url({{asset('index/images/about.jpg')}}); border"></div>
          </div>
          <div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
            <h2 class="mb-4">Apa Yang Kami Tawarkan ?</h2>
            <p>Memfasilitasi Generasi Muda Buol Agar Siap Menghadapi Berbagai Perubahan serta Mampu Berkompetisi Di Masa yang Akan Datang.</p>
            <div class="row mt-5">
              <div class="col-lg-6">
                <div class="services-2 d-flex">
                  <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-security"></span></div>
                  <div class="text pl-3">
                    <h3>Keamanan Adalah Prioritas Kami</h3>
                    <p>Pengawasan Penuh Selama Berada Dilingkungan Sekolah.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="services-2 d-flex">
                  <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-reading"></span></div>
                  <div class="text pl-3">
                    <h3>Pembelajaran</h3>
                    <p>Tehnik Pembelejaran Yang Asik dan Menyenangkan Serta Disesuaikan Dengan Generasi Millenial dan Tetap Mengacu Pada Kurikulum Nasional</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="services-2 d-flex">
                  <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-diploma"></span></div>
                  <div class="text pl-3">
                    <h3>Fasilitas</h3>
                    <p>Perpustakaan dan Laboratorium Komputer Yang Nyaman dan Menyenangkan</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="services-2 d-flex">
                  <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-education"></span></div>
                  <div class="text pl-3">
                    <h3>Pengajar</h3>
                    <p>Tenaga Pengajar Yang Handal dan Berpengalaman dan Beberapa Diantaranya Telah Memenuhi Syarat Tenaga Pengajar Profesional</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="services-2 d-flex">
                  <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-jigsaw"></span></div>
                  <div class="text pl-3">
                    <h3>Mengadopsi Pembelajaran Kreatif</h3>
                    <p>Pembelajaran Yang Kreatif dan Menyenangkan</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="services-2 d-flex">
                  <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-kids"></span></div>
                  <div class="text pl-3">
                    <h3>Ekstrakurikuler</h3>
                    <p><b>Pramuka</b>, <b>SISPALA</b> <i>Radix Anaphaliz</i>, <b>Olahraga</b>, <b>Kesenian</b></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url({{asset('index/images/bg_3.jpg')}});" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-2 d-flex">
          <div class="col-md-6 align-items-stretch d-flex">
            <div class="img img-video d-flex align-items-center" style="background-image: url({{asset('index/images/about-2.jpg')}});">
              <div class="video justify-content-center">
                <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                  <span class="ion-ios-play"></span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 heading-section heading-section-white ftco-animate pl-lg-5 pt-md-0 pt-5">
            <h2 class="mb-4">SMA Negeri 1 Momunu</h2>
            <p>Pertama Kali Didirikan Pada Tahun 2011 Yang Dipimpin Oleh KAHARUDIN TIMUMUN, S.Pd Sampai Dengan Sekarang</p>
            <p>SMA Negeri 1 Momunu Terletak Di Jalan Trans Momunu Desa Lamadong I Kecamatan Momunu Kabupaten Buol.</p>
          </div>
        </div>  
        <div class="row d-md-flex align-items-center justify-content-center">
          <div class="col-lg-12">
            <div class="row d-md-flex align-items-center">
              <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                  <div class="icon"><span class="flaticon-doctor"></span></div>
                  <div class="text">
                    <strong class="number" data-number="32">0</strong>
                    <span>Guru & Tenaga Kependidikan</span>
                  </div>
                </div>
              </div>
              <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                  <div class="icon"><span class="flaticon-doctor"></span></div>
                  <div class="text">
                    <strong class="number" data-number="512">0</strong>
                    <span>Siswa</span>
                  </div>
                </div>
              </div>
              <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                  <div class="icon"><span class="flaticon-doctor"></span></div>
                  <div class="text">
                    <strong class="number" data-number="16">0</strong>
                    <span>Rombongan Belajar</span>
                  </div>
                </div>
              </div>
              <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                  <div class="icon"><span class="flaticon-doctor"></span></div>
                  <div class="text">
                    <strong class="number" data-number="13">0</strong>
                    <span>Ruang Kelas Belajar</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="ftco-section">
      <div class="container-fluid px-4">
        <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>Jurusan</span></h2>
            <p>Tersedia 2 (Dua) Jurusan Yakni :</p>
          </div>
        </div>  
        <div class="row">
          <div class="col-md-6 course ftco-animate">
            <div class="img" style="background-image: url({{asset('index/images/course-1.jpg')}});"></div>
            <div class="text pt-4">
              <p class="meta d-flex">
                <span><i class="icon-user mr-2"></i>Ibu Kartini B. Samah, S.Pd</span>
              </p>
              <h3><a href="#">Matematika dan Ilmu Alam (MIA)</a></h3>
              <p>Pembelajaran Matematika dan Ilmu Alam yang Berfokus Pada Pendekatan <b><i>Scientific Approach</i></b> Guna Menggali dan Mengembangkan Potensi Siswa Dalam Ilmu - Ilmu Alam Terdiri Dari Fisika, Biologi, Kimia dan Matematika</p>
              <p><a href="#" class="btn btn-primary">Daftarkan Diri Anda</a></p>
            </div>
          </div>
          <div class="col-md-6 course ftco-animate">
            <div class="img" style="background-image: url({{asset('index/images/course-2.jpg')}});"></div>
            <div class="text pt-4">
              <p class="meta d-flex">
                <span><i class="icon-user mr-2"></i>Sutari Iladat, S.Pd</span>
              </p>
              <h3><a href="#">Ilmu - Ilmu Sosial (IIS)</a></h3>
              <p>Pembelajaran Yang Menyenangkan dan Fleksibel Guna Menggali dan Mengembangkan Potensi Siswa Dalam Ilmu - Ilmu Sosial Yang Terdiri Dari Geografi, Ekonomi dan Sosiologi</p>
              <p><a href="#" class="btn btn-primary">Daftarkan Diri Anda</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
      <div class="container-fluid px-4">
        <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4">Tenaga Pengajar</h2>
            <p>Diisi oleh tenaga pengajar yang <i>capable</i> dan menguasai bidangnya masing-masing.</p>
          </div>
        </div>  
        <div class="row">
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="staff">
              <div class="img-wrap d-flex align-items-stretch">
                <div class="img align-self-stretch" style="background-image: url({{asset('index/images/teacher-1.jpg')}});"></div>
              </div>
              <div class="text pt-3 text-center">
                <h3>Sumiati Timumun, S.Pd</h3>
                <span class="position mb-2">Guru Bahasa Inggris</span>
                <div class="faded">
                  <p>Pendidikan ibaratkan suatu tiket menuju masa depan nanti dan meraih segala mimpi.</p>
                  <ul class="ftco-social text-center">
                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="staff">
              <div class="img-wrap d-flex align-items-stretch">
                <div class="img align-self-stretch" style="background-image: url({{asset('index/images/teacher-2.jpg')}});"></div>
              </div>
              <div class="text pt-3 text-center">
                <h3>Sriyanti Zainal, S.Pd</h3>
                <span class="position mb-2">Guru Kimia</span>
                <div class="faded">
                  <p>Hiduplah seolah kau engkau akan mati besok dan belajarlah seolah engkau hidup selamanya.</p>
                  <ul class="ftco-social text-center">
                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="staff">
              <div class="img-wrap d-flex align-items-stretch">
                <div class="img align-self-stretch" style="background-image: url({{asset('index/images/teacher-3.jpg')}});"></div>
              </div>
              <div class="text pt-3 text-center">
                <h3>Ismail Adam, S.Pd</h3>
                <span class="position mb-2">Guru Agama Islam</span>
                <div class="faded">
                  <p>Agama tanpa ilmu adalah buta dan ilmu tanpa agama adalah lumpuh.</p>
                  <ul class="ftco-social text-center">
                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="staff">
              <div class="img-wrap d-flex align-items-stretch">
                <div class="img align-self-stretch" style="background-image: url({{asset('index/images/teacher-4.jpg')}});"></div>
              </div>
              <div class="text pt-3 text-center">
                <h3>Bahrun, S.Pd</h3>
                <span class="position mb-2">Guru Bahasa Inggris</span>
                <div class="faded">
                  <p>Tidak ada anak yang bodoh atau pintar melainkan anak yang menonjol dalam salah satu atau beberapa jenis kecerdasan.</p>
                  <ul class="ftco-social text-center">
                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="staff">
              <div class="img-wrap d-flex align-items-stretch">
                <div class="img align-self-stretch" style="background-image: url({{asset('index/images/teacher-5.jpg')}});"></div>
              </div>
              <div class="text pt-3 text-center">
                <h3>Ramli, S.Pd</h3>
                <span class="position mb-2">Guru Ekonomi</span>
                <div class="faded">
                  <p>Tidak peduli seberapa banyak yang menertawakan prosesmu karena keberhasilanmu juga bukan mereka yang menentukan.</p>
                  <ul class="ftco-social text-center">
                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="staff">
              <div class="img-wrap d-flex align-items-stretch">
                <div class="img align-self-stretch" style="background-image: url({{asset('index/images/teacher-6.jpg')}});"></div>
              </div>
              <div class="text pt-3 text-center">
                <h3>Yuliana Z. Daipore, S.Pd</h3>
                <span class="position mb-2">Guru Bahasa Indonesia</span>
                <div class="faded">
                  <p>Belajar itu jangan setengah-setengah agar hasilnya juga tidak setengah-setengah.</p>
                  <ul class="ftco-social text-center">
                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="staff">
              <div class="img-wrap d-flex align-items-stretch">
                <div class="img align-self-stretch" style="background-image: url({{asset('index/images/teacher-7.jpg')}});"></div>
              </div>
              <div class="text pt-3 text-center">
                <h3>Sudirman, S.Pd</h3>
                <span class="position mb-2">Guru Penjaskes</span>
                <div class="faded">
                  <p>Pendidikan anak-anak tidak hanya tanggung jawab segelintir orang saja, namun tanggung jawab semua lapisan masyarakat.</p>
                  <ul class="ftco-social text-center">
                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="staff">
              <div class="img-wrap d-flex align-items-stretch">
                <div class="img align-self-stretch" style="background-image: url({{asset('index/images/teacher-8.jpg')}});"></div>
              </div>
              <div class="text pt-3 text-center">
                <h3>Hidayati, S.Pd</h3>
                <span class="position mb-2">Guru Fisika</span>
                <div class="faded">
                  <p>Jika tidak ingin merasakan pahitnya dalam proses mencari ilmu, maka bersiaplah untuk menahan rasa sakitnya kebodohan sepanjang hidup.</p>
                  <ul class="ftco-social text-center">
                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="staff">
              <div class="img-wrap d-flex align-items-stretch">
                <div class="img align-self-stretch" style="background-image: url({{asset('index/images/teacher-9.jpg')}});"></div>
              </div>
              <div class="text pt-3 text-center">
                <h3>Siti Azizah A. Husain, S.Pd</h3>
                <span class="position mb-2">Guru Matematika</span>
                <div class="faded">
                  <p>Hidup bukan hanya untuk nilai dari hasil belajarmu, tetapi pengalaman dan ilmu pengetahuan yang bisa bermanfaat bagi orang banyak, itulah yang lebih penting.</p>
                  <ul class="ftco-social text-center">
                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url({{asset('index/images/bg_5.jpg')}});" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-end">
          <div class="col-md-6 py-5 px-md-5">
            <div class="py-md-5">
              <div class="heading-section heading-section-white ftco-animate mb-5">
                <h2 class="mb-4">Kritik Dan Saran</h2>
                <p>Tolong berikan masukan yang bermanfaat atau kritik yang membangun demi kemajuan sekolah ini.</p>
              </div>
              <form action="#" class="appointment-form ftco-animate">
                <div class="d-md-flex">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nama Depan">
                  </div>
                  <div class="form-group ml-md-4">
                    <input type="text" class="form-control" placeholder="Nama Belakang">
                  </div>
                </div>
                <div class="d-md-flex">
                  <div class="form-group">
                    <div class="form-field">
                      <div class="select-wrap">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="" id="" class="form-control">
                          <option value="">Cakupan Saran </option>
                          <option value="">Proses Pembelajaran</option>
                          <option value="">Layanan</option>
                          <option value="">Siswa</option>
                          <option value="">Guru</option>
                          <option value="">Lain-lain</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group ml-md-4">
                    <input type="text" class="form-control" placeholder="No HP">
                  </div>
                </div>
                <div class="d-md-flex">
                  <div class="form-group">
                    <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Saran "></textarea>
                  </div>
                  <div class="form-group ml-md-4">
                    <input type="submit" value="Kirim Saran" class="btn btn-primary py-3 px-4">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>Kegiatan</span> Terbaru</h2>
            <p>Kegiatan di SMAN 1 Momunu Senantiasa Dilaksanakan Secara Bersama-sama dan Berkeadilan Berlandaskan Kepada Azas Gotong Royong Di Bawah Nahkoda Kepimimpinan <b>KAHARUDIN TIMUMUN, S.Pd</b> </p>
          </div>
        </div>
        <div class="row">
          @foreach($beritas as $berita)
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url({{asset('index/images/beritas/'.$berita->img)}});">
                <div class="meta-date text-center p-2">
                  <span class="day">12</span>
                  <span class="mos">November</span>
                  <span class="yr">2017</span>
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="#">{{$berita->title}}</a></h3>
                <p>{{Str::limit("$berita->deskripsi", 60, ' ...')}}</p>
                <div class="d-flex align-items-center mt-4">
                  <p class="mb-0"><a href="{{url('berita/'.$berita->id)}}" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                  <p class="ml-auto mb-0">
                    <a href="#" class="mr-2">{{$berita->author_name}}</a>
                    <a href="#" class="meta-chat"><span class="icon-chat"></span> </a>
                  </p>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>

    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4">Tanggapan Siswa Terhadap SMANSA Momunu</h2>
            <p>Sekolah ini sudah berdiri sejak tahun 2011, Olehnya telah mendapat banyak tanggapan dan masukan baik dari alumni, orangtua siswa, masyarakat, dan pemerintah itu sendiri</p>
          </div>
        </div>
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url({{asset('index/images/teacher-1.jpg')}}">
                  </div>
                  <div class="text ml-2">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Jumlah siswa yang banyak bukti bahwa sekolah ini menjadi favorit khususnya di kecamatan Momunu</p>
                    <p class="name">Mawar</p>
                    <span class="position">Orang Tua Siswa</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url({{asset('index/images/teacher-2.jpg')}}">
                  </div>
                  <div class="text ml-2">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Dengan banyaknya siswa dan kurangnya Ruang Kelas Belajar, semoga sekolah ini mendapat perhatian dari stake-holders.</p>
                    <p class="name">Agus</p>
                    <span class="position">Jurnalis</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url({{asset('index/images/teacher-3.jpg')}})">
                  </div>
                  <div class="text ml-2">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Jumlah pengajar yang masih kurang kiranya dapat membuka lapangan pekerjaan yang baru buat generasi muda kabupaten Buol.</p>
                    <p class="name">Adin</p>
                    <span class="position">Dewan Komite</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url({{asset('index/images/teacher-4.jpg')}})">
                  </div>
                  <div class="text ml-2">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Menjadi satu-satunya sekolah lanjutan tingkat atas berstatus negeri di kecamatan Momunu membuat sekolah ini menjadi sekolah favorit.</p>
                    <p class="name">Ti Po'u</p>
                    <span class="position">Masyarakat</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url({{asset('index/images/teacher-5.jpg')}})">
                  </div>
                  <div class="text ml-2">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Semoga sekolah ini senantiasa melahirkan generasi-generasi muda bangsa yang dapat membanggakan daerahnya sendiri.</p>
                    <p class="name">Ti Jamal</p>
                    <span class="position">Orangtua Siswa</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-gallery">
      <div class="container-wrap">
        <div class="row no-gutters">
          <div class="col-md-3 ftco-animate">
            <a href="{{asset('index/images/image_1.jpg')}}" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{asset('index/images/image_1.jpg')}});">
              <div class="icon mb-4 d-flex align-items-center justify-content-center">
                <span class="icon-instagram"></span>
              </div>
            </a>
          </div>
          <div class="col-md-3 ftco-animate">
            <a href="{{asset('index/images/image_2.jpg')}}" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{asset('index/images/image_2.jpg')}});">
              <div class="icon mb-4 d-flex align-items-center justify-content-center">
                <span class="icon-instagram"></span>
              </div>
            </a>
          </div>
          <div class="col-md-3 ftco-animate">
            <a href="{{asset('index/images/image_3.jpg')}}" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{asset('index/images/image_3.jpg')}});">
              <div class="icon mb-4 d-flex align-items-center justify-content-center">
                <span class="icon-instagram"></span>
              </div>
            </a>
          </div>
          <div class="col-md-3 ftco-animate">
            <a href="{{asset('index/images/image_4.jpg')}}" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{asset('index/images/image_4.jpg')}});">
              <div class="icon mb-4 d-flex align-items-center justify-content-center">
                <span class="icon-instagram"></span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
@endsection