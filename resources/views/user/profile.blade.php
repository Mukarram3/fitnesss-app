<!--
=========================================================
Material Dashboard - v2.1.2
=========================================================

Product Page: https://www.creative-tim.com/product/material-dashboard
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim

=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Material Dashboard by Creative Tim
  </title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link rel="stylesheet" href="{{asset('css/material-dashboard.css')}}">
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link rel="stylesheet" href="{{asset('css/demo.css')}}">

  <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('datatable/css/dataTables.bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('datatable/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('sweetalert2/sweetalert2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('toastr/toastr.min.css') }}">
</head>

<body class="">
  <div class="wrapper ">


    @include('../header-footer/sidebar')


    <div class="main-panel">

    @include('../header-footer/navbar')


      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">

          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Profile</h4>
                </div>
                <div class="card-body">


                        <input type="hidden" id="userid" value="{{auth()->user()->id}}">

                        <div>

                            <div style="display: inline;" class="col-lg-4">
                                <h2> NAME:</h2>
                                <p>{{ auth()->user()->name}}</p>
                            </div>
                            <div style="display: inline;" class="col-lg-4">
                                <h2> Email:</h2>
                                <p>{{ auth()->user()->email}}</p>
                            </div>

                        </div>

                       <div>

                        <h2> Address:</h2>
                         <p>{{ auth()->user()->address}}</p>

                       </div>

                       <div>

                        <h2> City:</h2>
                         <p>{{ auth()->user()->city}}</p>

                       </div>

                       <div>

                        <h2> Mobile:</h2>
                         <p>{{ auth()->user()->Mobile}}</p>

                       </div>

                       <div>

                        <h2> Image:</h2>
                         <p><img style="width: 120px;" src="{{asset('storage/images/'.auth()->user()->image)}}" alt=""></p>

                       </div>

                       <div>

                        <h2> Age:</h2>
                         <p>{{ auth()->user()->age}}</p>

                       </div>

                       <button class="btn btn-sm btn-primary" id="editCountryBtn" id="editCountryBtn">Edit</button>


                    </form>




                </div>
              </div>
              {{-- <img src="{{asset('storage/images/'.$userimage->image)}}" alt=""> --}}
            </div>

          </div>
        </div>
      </div>

     @include('../header-footer/footer')
@include('user.edituser')

    </div>
  </div>

  <!--   Core JS Files   -->
  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/popper.min.js')}}"></script>
  <script src="{{asset('js/bootstrap-material-design.min.js')}}"></script>
  <script src="{{asset('js/perfect-scrollbar.jquery.min.js')}}"></script>
  <!-- Plugin for the momentJs  -->
  <script src="{{asset('js/moment.min.js')}}"></script>
  <script src="{{asset('js/sweetalert2.js')}}"></script>
  <script src="{{asset('js/jquery.validate.min.js')}}"></script>
  <script src="{{asset('js/jquery.bootstrap-wizard.js')}}"></script>
  <script src="{{asset('js/bootstrap-selectpicker.js')}}"></script>
  <script src="{{asset('js/bootstrap-datetimepicker.min.js')}}"></script>
  <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('js/bootstrap-tagsinput.js')}}"></script>
  <script src="{{asset('js/arrive.min.js')}}"></script>
  <script src="{{asset('js/jasny-bootstrap.min.js')}}"></script>
  <script src="{{asset('js/chartist.min.js')}}"></script>
  <script src="{{asset('js/bootstrap-notify.js')}}"></script>
  <script src="{{asset('js/material-dashboard.js?v=2.1.2')}}"></script>
  <script src="{{asset('js/demo.js')}}"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>



<script src="{{ asset('jquery/jquery.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('datatable/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('sweetalert2/sweetalert2.min.js') }}"></script>
<script src="{{ asset('toastr/toastr.min.js') }}"></script>

<script>

toastr.options.preventDuplicates = true;

$.ajaxSetup({
    headers:{
        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
    }
});

$(document).on('click','#editCountryBtn', function(){
               var user_id = $("#userid").val();
            //    alert(user_id);
               $('.edituser').find('form')[0].reset();
               $('.edituser').find('span.error-text').text('');
               $.post('{{route('get.user.details')}}',{user_id:user_id}, function(data){
                   //  alert(data.details.country_name);
                   $('.edituser').find('input[name="id"]').val(data.details.id);
                   $('.edituser').find('input[name="name"]').val(data.details.name);
                   $('.edituser').find('input[name="email"]').val(data.details.email);
                   $('.edituser').find('input[name="address"]').val(data.details.address);
                   $('.edituser').find('input[name="city"]').val(data.details.city);
                   $('.edituser').find('input[name="mobile"]').val(data.details.Mobile);
                   $('.edituser').find('input[name="age"]').val(data.details.age);
                   $('.edituser').find('input[name="type"]').val(data.details.type);
                   $('.edituser').modal('show');
               },'json');
           });


           $('#update-user-form').on('submit', function(e){
               e.preventDefault();
               var form = this;
               $.ajax({
                   url:$(form).attr('action'),
                   method:$(form).attr('method'),
                   data:new FormData(form),
                   processData:false,
                   dataType:'json',
                   contentType:false,
                   beforeSend: function(){
                        $(form).find('span.error-text').text('');
                   },
                   success: function(data){
                         if(data.code == 0){
                             $.each(data.error, function(prefix, val){
                                 $(form).find('span.'+prefix+'_error').text(val[0]);
                             });
                         }else{
                             $('#user-table').DataTable().ajax.reload(null, false);
                             $('.edituser').modal('hide');
                             $('.edituser').find('form')[0].reset();
                             toastr.success(data.msg);
                         }
                   }
               });
           });


</script>

<script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>


</body>

</html>
