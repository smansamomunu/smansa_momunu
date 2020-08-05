@extends('users.admin.layouts.app')

@section('title')
<title>SMANSA MOMUNU | Tambah Guru</title>
@endsection

@section('content')
<main>
    <div class="container-fluid">

      <!-- Section: Inputs -->
      <section class="section card mb-5">

        <div class="card-body">

          <!-- Section heading -->
          <h3 class="text-center my-5 h3">Tambah Guru</h3>

          <!-- Grid row -->
          <form method="POST" action="{{route('admin.guru.store')}}">
            {{ csrf_field() }}

          <div class="row">

            <!-- Grid column -->
            <div class="col-md-6 mb-6">
              <div class="md-form">
                <input name="email" type="email" id="email" class="form-control">
                <label for="email" class="">Email</label>
              </div>
            </div>
            <!-- Grid column -->
            <div class="col-md-6 mb-6">
              <div class="md-form">
                <input name="nama" type="text" id="nama" class="form-control">
                <label for="nama" class="">Nama</label>
              </div>
            </div>
            <!-- Grid column -->            
          </div>
          <div class="row">
            <!-- Grid column -->
            <div class="col-md-4 mb-4">
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
          </form>

        </div>

      </section>
    </div>
  </main>
@endsection

@section('script')
<script>
    // SideNav Initialization
    $(".button-collapse").sideNav();

    var container = document.querySelector('.custom-scrollbar');
    var ps = new PerfectScrollbar(container, {
      wheelSpeed: 2,
      wheelPropagation: true,
      minScrollbarLength: 20
    });

    // Material Select Initialization
    $(document).ready(function () {
      $('.mdb-select').materialSelect();
    });

  </script>
@endsection
