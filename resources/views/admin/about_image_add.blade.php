@extends('admin.admin_master')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-8 mx-auto">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title mb-4">Add Images to About Area </h4>

            <form method="post" action="/about_images/add" enctype="multipart/form-data">
                @csrf

            <div class="row mb-3">
                <label for="image" class="col-sm-2 col-form-label">About Image </label>
                <div class="col-sm-6">
                <input name="image[]" class="form-control" type="file"  id="image" multiple >
                @error('image.*') <p style="color:red;margin-bottom:0px;">{{$message}}</p> @enderror
                </div>
            </div>
            <!-- end row -->

              <div class="row mb-3">
                 <label for="example-text-input" class="col-sm-2 col-form-label">  </label>
                <div class="col-sm-10">
                    <img id="showImage" class="rounded avatar-lg" src="/storage/{{auth()->user()->image}}" alt="Card image cap">
                </div>
            </div>
            <!-- end row -->
            
            <div class="row mb-3">
            <input style="width: 500px;" type="submit" class="btn btn-info waves-effect waves-light mx-auto" value="Add Images">
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