
@extends('layout')


@section('css')
<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('datatable/css/dataTables.bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('datatable/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('sweetalert2/sweetalert2.min.css') }}">
<link rel="stylesheet" href="{{ asset('toastr/toastr.min.css') }}">
@endsection

    @section('main-content')

    <div class="wrapper ">


        @include('../header-footer/sidebar')


        <div class="main-panel">

        @include('../header-footer/navbar')


          <!-- End Navbar -->
          <div class="content">
            <div class="container-fluid">
                <a class="adduser btn btn-success" style="position: absolute;right:44px;z-index: 1000; top: 82px;">Add Users</a>
              <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header card-header-primary">
                      <h4 class="card-title">Users</h4>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-border table-hover" id="user-table">

                          <thead>
                            <tr>
                                <th><input type="checkbox" name="main_checkbox"><label></label></th>
                                <th>#</th>
                              <th width="100px">Name</th>
                              <th width="100px">Email</th>
                              <th width="100px">Address</th>
                              <th width="100px">Phone</th>
                              <th width="100px">Gender</th>
                              <th width="100px">Date of Birth</th>
                              <th width="100px">Type</th>
                              <th width="100px">Status</th>
                              <th>Actions <button class="btn btn-sm btn-danger d-none" id="deleteallusers">Delete All</button></th>

                            </tr>
                          </thead>
                          <tbody>

                          </tbody>


                        </table>
                        </table>
                      </div>
                    </div>
                  </div>
                  {{-- <img src="{{asset('storage/images/'.$userimage->image)}}" alt=""> --}}
                </div>

              </div>
            </div>
          </div>

         @include('../header-footer/footer')
         @include('user.add_user')
    @include('user.edituser')

        </div>
      </div>

    @endsection


@section('javascript')

<script>

    toastr.options.preventDuplicates = true;

    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).on('click','.adduser', function(){

                   $('.addusermodal').modal('show');

           });


    $(function(){

           //ADD NEW User
           $('#add-user').on('submit', function(e){
               e.preventDefault();
               var form = this;
               $.ajax({
                   url:$(form).attr('action'),
                   method:$(form).attr('method'),
                   data:new FormData(form),
                   processData:false,
                   dataType:'json',
                   contentType:false,
                   beforeSend:function(){
                        $(form).find('span.error-text').text('');
                   },
                   success:function(data){
                        if(data.code == 0){
                              $.each(data.error, function(prefix, val){
                                  $(form).find('span.'+prefix+'_error').text(val[0]);
                              });
                        }else{
                            $(form)[0].reset();
                           //  alert(data.msg);
                           $('#user-table').DataTable().ajax.reload(null, false);
                           $('.addusermodal').modal('hide');

                        }
                   }
               });
           });

           //GET ALL Users
          var table =  $('#user-table').DataTable({
                processing:true,
                info:true,
                ajax:"{{ route('getUserList') }}",
                "pageLength":5,
                "aLengthMenu":[[5,10,25,50,-1],[5,10,25,50,"All"]],
                columns:[
                   //  {data:'id', name:'id'},
                    {data:'checkbox', name:'checkbox', orderable:false, searchable:false},
                    {data:'DT_RowIndex', name:'DT_RowIndex'},
                    {data:'name', name:'name'},
                    {data:'email', name:'email'},
                    {data:'address', name:'address'},
                    {data:'phone', name:'phone'},
                    {data:'gender', name:'gender'},
                    {data:'dob', name:'dob'},
                    {data:'type', name:'type'},
                    {data:'status', name:'status'},
                    {data:'actions', name:'actions', orderable:false, searchable:false},
                ]
           });

           $(document).on('click','#editCountryBtn', function(){
               var user_id = $(this).data('id');
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


           //UPDATE COUNTRY DETAILS
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

           //DELETE COUNTRY RECORD
           $(document).on('click','#deleteUserBtn', function(){
               var user_id = $(this).data('id');
               var url = '{{route('del_user')}}';

               swal.fire({
                    title:'Are you sure?',
                    html:'You want to <b>delete</b> this country',
                    showCancelButton:true,
                    showCloseButton:true,
                    cancelButtonText:'Cancel',
                    confirmButtonText:'Yes, Delete',
                    cancelButtonColor:'#d33',
                    confirmButtonColor:'#556ee6',
                    width:400,
                    allowOutsideClick:true
               }).then(function(result){
                     if(result.value){
                         $.post(url,{user_id:user_id}, function(data){
                              if(data.code == 1){
                                  $('#user-table').DataTable().ajax.reload(null, false);
                                  toastr.success(data.msg);
                              }else{
                                  toastr.error(data.msg);
                              }
                         },'json');
                     }
               });

           });




      $(document).on('click','input[name="main_checkbox"]', function(){
             if(this.checked){
               $('input[name="country_checkbox"]').each(function(){
                   this.checked = true;
               });
             }else{
                $('input[name="country_checkbox"]').each(function(){
                    this.checked = false;
                });
             }
             toggledeleteAllBtn();
      });

      $(document).on('change','input[name="country_checkbox"]', function(){

          if( $('input[name="country_checkbox"]').length == $('input[name="country_checkbox"]:checked').length ){
              $('input[name="main_checkbox"]').prop('checked', true);
          }else{
              $('input[name="main_checkbox"]').prop('checked', false);
          }
          toggledeleteAllBtn();
      });


      function toggledeleteAllBtn(){
          if( $('input[name="country_checkbox"]:checked').length > 0 ){
              $('#deleteallusers').text('Delete ('+$('input[name="country_checkbox"]:checked').length+')').removeClass('d-none');
          }else{
              $('#deleteallusers').addClass('d-none');
          }
      }


      $(document).on('click','#deleteallusers', function(){
          var checkedusers = [];
          $('input[name="country_checkbox"]:checked').each(function(){
            checkedusers.push($(this).data('id'));
          });

          var url = '{{ route("delall_user") }}';
          if(checkedusers.length > 0){
              swal.fire({
                  title:'Are you sure?',
                  html:'You want to delete <b>('+checkedusers.length+')</b> Users',
                  showCancelButton:true,
                  showCloseButton:true,
                  confirmButtonText:'Yes, Delete',
                  cancelButtonText:'Cancel',
                  confirmButtonColor:'#556ee6',
                  cancelButtonColor:'#d33',
                  width:400,
                  allowOutsideClick:true
              }).then(function(result){
                  if(result.value){
                      $.post(url,{users_ids:checkedusers},function(data){
                         if(data.code == 1){
                             $('#user-table').DataTable().ajax.reload(null, true);
                             toastr.success(data.msg);
                         }
                      },'json');
                  }
              })
          }
      });




    });

</script>




@endsection
  <!--   Core JS Files   -->
