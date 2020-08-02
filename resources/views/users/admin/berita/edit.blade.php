@extends ('users.admin.layouts.app');

@section('title')
<title>Admin | Berita</title>
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.4/croppie.min.css">
@endsection

@section('content')
<main style="padding-top: 20px;">

    <div class="container">

      <!-- Section: Create Page -->
      <section class="my-5">

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-lg-12">

            <!-- First card -->
            <div class="card mb-3 post-title-panel">
              <div class="card-body">
                <div class="md-form mt-1 mb-0">
                  <input name="title" type="text" id="form1" class="form-control" value="{{$berita->title}}">
                  <label class="form-check-label" for="form1" class="">Post Title</label>
                </div>
              </div>
            </div>
            <!-- First card -->

            <!-- Second card -->
            <div class="card mb-3">
              <input type="text" name="post_content" id="post_content" value="{{$berita->deskripsi}}"></input>
            </div>
            <!-- Second card -->


          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-12">

            <!-- Card -->
            <div class="card card-cascade narrower mb-5">

              <!-- Card image -->
              <div class="view view-cascade gradient-card-header blue-gradient">
                <h5 class="font-weight-500 mb-0">Image</h5>
              </div>
              <!-- Card image -->

              <!-- Card content -->
              <div class="card-body card-body-cascade">

                <div id="image-preview"></div>
                  <div id="uploaded_image" align="center"></div>
                  <div class="form-group">
                     <input class="btn btn-primary" style="color: transparent;display: none;" type="file" name="upload_image" id="upload_image" />
                      <label class="btn btn-primary btn-block waves-effect" for="upload_image" style="
                            border: 1px solid #ccc;
                            display: inline-block;
                            cursor: pointer;
                            border-radius: 5px;
                       
                            ">
                        <strong>Pilih Gambar</strong>    
                      </label>
                  </div>
                  <button style="margin-bottom: 0px;" type="button" class="btn btn-primary btn-block simpan">SIMPAN</button>
              </div>
              <!-- Card content -->

            </div>
            <!-- Card -->

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </section>
      <!-- Section: Create Page -->

    </div>

  </main>
@endsection

@section('script')
<script type="text/javascript" src="{{asset('users/js/vendor/tinymce/tinymce.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.4/croppie.min.js"></script>

  <!-- Custom scripts -->
<script>
  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });


$(document).ready(function(){
  
  $image_crop = $('#image-preview').croppie({
    enableExif:true,
    viewport:{
      width:800,
      height:500,
      type:'square'
    },
    boundary:{
      width:900,
      height:600
    }
  });

  $('#upload_image').change(function(){
    var reader = new FileReader();

    reader.onload = function(event){
      $image_crop.croppie('bind', {
        url:event.target.result
      }).then(function(){
        console.log('jQuery bind complete');
      });
    }
    reader.readAsDataURL(this.files[0]);
  });

  $('.simpan').click(function(event){
    $image_crop.croppie('result', {
      type:'canvas',
      size:'viewport'
    }).then(function(response){
      var _token = $('input[name=_token]').val();
      var title = $('input[name=title]').val();
      var deskripsi = $("#post_content").val();
      var author_name = "{{Auth::user()->name}}";
      var author_job = 'Admin';
      $.ajax({
        url:'{{ url("admin.berita.store") }}',
        type:'patch',
        data:{"image":response, _token:_token, title, deskripsi, author_name, author_job},
        dataType:"json",
        success:function(data)
        {
          location.reload(true);
        }
      });
    });
  });
  
});

// TinyMCE Initialization
tinymce.init({
   forced_root_block : "",
   selector:'#post_content', 
   menubar: false, 
   height : "294",
    setup: function (editor) {
        editor.on('change', function () {
            tinymce.triggerSave();
        });
    }
});

    // SideNav Initialization
    $(".button-collapse").sideNav();

    var container = document.querySelector('.custom-scrollbar');
    var ps = new PerfectScrollbar(container, {
      wheelSpeed: 2,
      wheelPropagation: true,
      minScrollbarLength: 20
    });



  </script>
@endsection