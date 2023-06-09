@extends('admin.admin_master')
@section('content')


<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-8 mx-auto">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Change Password Page </h4><br><br>

            <form method="post" action="/admin/password" >
                @csrf

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Old Password</label>
                <div class="col-sm-6">
                    <input name="old_password" class="form-control" type="password"   id="oldpassword">
                    @error('old_password') <p style="color:red;margin-bottom:0px;">{{$message}}</p> @enderror
                </div>
            </div>
            <!-- end row -->


             <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">New Password</label>
                <div class="col-sm-6">
                <input name="new_password" class="form-control" type="password"  id="newpassword">
                @error('new_password') <p style="color:red;margin-bottom:0px;"> {{$message}}</p> @enderror
                </div>
            </div>
            <!-- end row -->



             <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Confirm Password</label>
                <div class="col-sm-6">
                    <input name="new_password_confirmation" class="form-control" type="password"   id="confirm_password">
                </div>
            </div>
            <!-- end row -->




<input type="submit" class="btn btn-info waves-effect waves-light" value="Change Password">
            </form>



        </div>
    </div>
</div> <!-- end col -->
</div>



</div>
</div>



@endsection 