@extends('admin.admin_master')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-8 mx-auto">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title mb-4">Edit About Area</h4>

            <form method="post" action="/about_text/edit"  enctype="multipart/form-data">
                @csrf

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-8">
                    <input name="title" class="form-control" type="text" value="{{$about->title}}"  id="example-text-input">
                    @error('title') <p style="color:red;margin-bottom:0px;">{{$message}}</p> @enderror
                </div>
            </div>
            <!-- end row -->

              <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-8">
                <textarea name="description" cols="50" rows="8">{{$about->description}}</textarea>    
                @error('Description') <p style="color:red;margin-bottom:0px;">{{$message}}</p> @enderror
                </div>
            </div>
            <!-- end row -->
            
            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">excerpt</label>
                <div class="col-sm-8">
                    <input name="excerpt" class="form-control" type="text" value="{{$about->excerpt}}"  id="example-text-input">
                    @error('excerpt') <p style="color:red;margin-bottom:0px;">{{$message}}</p> @enderror
                </div>
            </div>
            <!-- end row -->
            
            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Detailed Description</label>
                <div class="col-sm-8">
                <textarea name="detailed_description" cols="50" rows="20">{{$about->detailed_description}}</textarea>
                @error('detailed_description') <p style="color:red;margin-bottom:0px;">{{$message}}</p> @enderror
                </div>
            </div>
            <!-- end row -->
           

            <div class="row mb-3">
            <input style="width: 500px;" type="submit" class="btn btn-info waves-effect waves-light mx-auto" value="Update">
            </div>
        </form>



        </div>
    </div>
</div> <!-- end col -->
</div>



</div>
</div>




@endsection 