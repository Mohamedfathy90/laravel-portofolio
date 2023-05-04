@extends('admin.admin_master')

@section('content')

<div class="page-content">
<div class="container-fluid">


<div class="row">
    <div class="col-lg-6">
        <div class="card" style="margin-left: 230px;"><br><br>

<img style="margin-left: 130px;" class="rounded-circle avatar-xl" src="/storage/{{auth()->user()->image}}" alt="Card image cap">


            <div class="card-body mt-4">
                <h4 class="card-title">Name : {{ $admin->name }} </h4>
                <hr>
                <h4 class="card-title">User Email : {{ $admin->email }} </h4>
                <hr>
                <a href="/admin/edit/{{auth()->id()}}" class="btn btn-info btn-rounded waves-effect waves-light" > Edit Profile</a>

            </div>
        </div>
    </div> 


</div> 


</div>
</div>



@endsection