@extends('users.admin.layouts.app')

@section('title')
@endsection

@section('css')
<!-- DataTables.net  -->
  <link rel="stylesheet" type="text/css" href="../../users/css/addons/datatables.min.css">
  <link rel="stylesheet" href="../../users/css/addons/datatables-select.min.css">
@endsection

@section('content')
<main>
    <div class="container-fluid mb-5">

      <!-- Section: Basic examples -->
      <section>

        <!-- Gird column -->
        <div class="col-md-12">

          <h5 class="my-4 dark-grey-text font-weight-bold">Material DataTable</h5>

          <div class="card">
            <div class="card-body">
              <table id="dtMaterialDesignExample" class="table table-striped" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th>No
                    </th>
                    <th>Title
                    </th>
                    <th>Last Update
                    </th>
                    <th>#
                    </th>
                  </tr>
                </thead>
                <tbody>
                  @php 
                    $no = 0
                  @endphp
                  @foreach($beritas as $berita)
                  @php 
                    $no++
                  @endphp
                  <tr>
                    <td>{{$no}}</td>
                    <td>{{$berita->title}}</td>
                    <td>{{$berita->updated_at}}</td>
                    <td>61</td>
                  </tr>
                  @endforeach
                </tbody>
                <tfoot>
                  <tr>
                    <th>No
                    </th>
                    <th>Title
                    </th>
                    <th>Last Update
                    </th>
                    <th>#
                    </th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>

        </div>
        <!-- Gird column -->

      </section>
      <!-- Section: Basic examples -->

    </div>
  </main>
@endsection

@section('script')
<script type="text/javascript" src="../../users/js/addons/datatables.min.js"></script>
  <!-- DataTables Select  -->
  <script type="text/javascript" src="../../users/js/addons/datatables-select.min.js"></script>
  <!-- Custom scripts -->
  <script>
    // SideNav Initialization
    $(".button-collapse").sideNav();

    let container = document.querySelector('.custom-scrollbar');
    var ps = new PerfectScrollbar(container, {
      wheelSpeed: 2,
      wheelPropagation: true,
      minScrollbarLength: 20
    });

    $('#dtMaterialDesignExample').DataTable();

    $('#dtMaterialDesignExample_wrapper, #dt-material-checkbox_wrapper').find('label').each(function () {
      $(this).parent().append($(this).children());
    });
    $('#dtMaterialDesignExample_wrapper .dataTables_filter, #dt-material-checkbox_wrapper .dataTables_filter').find(
      'input').each(function () {
      $('input').attr("placeholder", "Search");
      $('input').removeClass('form-control-sm');
    });
    $('#dtMaterialDesignExample_wrapper .dataTables_length, #dt-material-checkbox_wrapper .dataTables_length').addClass(
      'd-flex flex-row');
    $('#dtMaterialDesignExample_wrapper .dataTables_filter, #dt-material-checkbox_wrapper .dataTables_filter').addClass(
      'md-form');
    $('#dtMaterialDesignExample_wrapper select, #dt-material-checkbox_wrapper select').removeClass(
      'custom-select custom-select-sm form-control form-control-sm');
    $('#dtMaterialDesignExample_wrapper select, #dt-material-checkbox_wrapper select').addClass('mdb-select');
    $('#dtMaterialDesignExample_wrapper .dataTables_filte, #dt-material-checkbox_wrapper .dataTables_filterr').find(
      'label').remove();

  </script>
@endsection
