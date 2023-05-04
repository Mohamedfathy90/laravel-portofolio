@extends('admin.admin_master')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-8 mx-auto">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title mb-4">Edit Home Slider </h4>

            <form method="post" action="/slider/edit"  enctype="multipart/form-data">
                @csrf

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-6">
                    <input name="title" class="form-control" type="text" value="{{$slider->title}}"  id="example-text-input">
                    @error('name') <p style="color:red;margin-bottom:0px;">{{$message}}</p> @enderror
                </div>
            </div>
            <!-- end row -->

              <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-6">
                    <input name="description" class="form-control" type="text" value="{{$slider->description}}"  id="example-text-input">
                    @error('email') <p style="color:red;margin-bottom:0px;">{{$message}}</p> @enderror
                </div>
            </div>
            <!-- end row -->
            
            
            <div class="row mb-3">
                <label for="video" class="col-sm-2 col-form-label">Slider video </label>
                <div class="col-sm-6">
                <input name="video" class="form-control" type="text"  id="video">
                @error('video') <p style="color:red;margin-bottom:0px;">{{$message}}</p> @enderror
                </div>
            </div>
            
            <!-- end row -->

            <div class="row mb-3">
                <label for="image" class="col-sm-2 col-form-label">Slider Image </label>
                <div class="col-sm-6">
                <input name="image" class="form-control" type="file"  id="image">
                @error('image') <p style="color:red;margin-bottom:0px;">{{$message}}</p> @enderror
                </div>
            </div>
            <!-- end row -->

              <div class="row mb-3">
                 <label for="example-text-input" class="col-sm-2 col-form-label">  </label>
                <div class="col-sm-10">
                    <img id="showImage" class="rounded avatar-lg" src="/storage/{{$slider->image}}" alt="Card image cap">
                </div>
            </div>
            <!-- end row -->
            
            <div class="row mb-3">
            <input style="width: 500px;" type="submit" class="btn btn-info waves-effect waves-light mx-auto" value="Update Slider">
            </div>
        </form>



        </div>
    </div>
</div> <!-- end col -->
</div>



</div>
</div>


<script type="text/javascript">
    
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

@endsection 