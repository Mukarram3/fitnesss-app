<div class="modal fade edituser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Country</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                 <form action="<?= route('update.user.details') ?>" method="post" id="update-user-form">
                    @csrf
                    <input type="hidden" name="id">
                    <div class="row">
                      <div class="col-md-9">
                        <div class="form-group">
                          <label>Name</label>
                          <input type="text" id="" name="name" class="form-control">
                        </div>
                      </div>
                      <span class="text-danger" id="">

                        @error ('name'){{$message}} @enderror

                            </span>

                      <div class="col-md-9">
                        <div class="form-group">
                          <label>Email</label>
                          <input type="text" id="" name="email" class="form-control">
                        </div>
                      </div>
                      <span class="text-danger" id="">

                        @error ('email'){{$message}} @enderror

                            </span>
                      <div class="col-md-9">
                        <div class="form-group">
                          <label>Password</label>
                          <input type="password" id="" name="password" class="form-control">
                        </div>
                      </div>
                      <span class="text-danger" id="">

                        @error ('password'){{$message}} @enderror

                            </span>
                      <div class="col-md-9">
                        <div class="form-group">
                          <label>Address</label>
                          <input type="text" id=""  name="address" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-9">
                        <div class="form-group">
                          <label>City</label>
                          <input type="text" id=""  name="city" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-9">
                        <div class="form-group">
                          <label>Mobile No</label>
                          <input type="text" id=""  name="mobile" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-9">
                          <div class="form-group">
                            <label>Age</label>
                            <input type="Number" id=""  name="age" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                              <label>Type</label>
                              <input type="text" id=""  name="type" class="form-control">
                            </div>
                          </div>
                        <div class="col-md-4">
                          <div class="">
                            <label for="">Image</label>
                            <input type="file" name="image" required class="btn btn-fill btn-success">
                          </div>
                        </div>
                      <div class="col-md-9">
                        <div class="form-group">
                          {{-- <a class="btn btn-primary" type="submit" name="btnadd">Add User</a> --}}
                          <button class="btn btn-primary" type='submit'>Submit</button>
                        </div>
                      </div>


                    </div>
                 </form>


            </div>
        </div>
    </div>
</div>
