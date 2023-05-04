<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Register | Upcube - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('back')}}/assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="{{asset('back')}}/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('back')}}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('back')}}/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
        
    </head>

    <body class="auth-body-bg">
        <div class="bg-overlay"></div>
        <div class="wrapper-page">
            <div class="container-fluid p-0">
                <div class="card">
                    <div class="card-body">
    
                        <div class="text-center mt-4">
                            <div class="mb-3">
                                <a href="/" class="auth-logo">
                                    <img src="{{asset('back')}}/assets/images/logo-dark.png" height="30" class="logo-dark mx-auto" alt="">
                                    <img src="{{asset('back')}}/assets/images/logo-light.png" height="30" class="logo-light mx-auto" alt="">
                                </a>
                            </div>
                        </div>
    
    
                        <h4 class="text-muted text-center font-size-18"><b>Register</b></h4>

    <form id="register_form" class="form-horizontal mt-3" method="POST" action="/register" enctype="multipart/form-data" onsubmit="saveregisterform(event)">
        @csrf

        <!-- Name -->
        <div class="form-group mb-2 row">
        <div class="col-12">
        <input class="form-control" type="text" name="name" value="{{old('name')}}" placeholder="Enter Your Username" >
        <div style='color:red' id="name-error"></div>
        </div>
        </div>

        <!-- Email Address -->
        <div class="form-group mb-2 row">
        <div class="col-12">
        <input class="form-control" type="email" name='email' value="{{old('email')}}" placeholder="Enter your Email" >
        <div style='color:red' id="email-error"></div>
        </div>
        </div>
        
        
        <!-- Password -->
        <div class="form-group mb-2 row">
        <div class="col-12">
        <input class="form-control" type="password" name='password' required placeholder="Password">
        <div style='color:red' id="password-error"></div>
        </div>
        </div>

        <!-- Confirm Password -->
        <div class="form-group mb-2 row">
        <div class="col-12">
        <input class="form-control" type="password" name='password_confirmation' placeholder="Confirm your Password">
        </div>
        </div>

         <!-- Profile Image -->
        <div class="form-group mb-2 row">
        <div class="col-12">
        <label for="image" class="mb-0">Profile Image </label>
        <input id='image' class="form-control" type="file" name='image'>
        <div style='color:red' id="image-error"></div>
        </div>
        </div>
        
        <!-- terms and conditions -->
        <div class="form-group mb-3 row">
        <div class="col-12">
        <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" name='checkbox' value=1 id="customCheck1">
        <label class="form-label ms-1 fw-normal" for="customCheck1">I accept <a href="#" class="text-muted">Terms and Conditions</a></label>
        <div style='color:red' id="checkbox-error"></div>
        </div>
        </div>
        </div>    
            
           
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
           
           
           
            <div class="form-group text-center row mt-3 pt-1">
            <div class="col-12">
            <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Register</button>
            </div>
            </div>
            
            
        </div>
    </form>

   <!-- JAVASCRIPT -->
   <script src="{{asset('back')}}/assets/libs/jquery/jquery.min.js"></script>
        <script src="{{asset('back')}}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('back')}}/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{asset('back')}}/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="{{asset('back')}}/assets/libs/node-waves/waves.min.js"></script>

        <script src="{{asset('back')}}/assets/js/app.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </body>
</html>

<script>
   
   function saveregisterform(e)
    {
        e.preventDefault()
        var registerData = $('#register_form')[0];
        var formData = new FormData(registerData);
        $.ajax({
            headers: {
            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
            url:"/register",
            type:"POST",
            enctype:"multipart/form-data",
            data:formData,
            processData: false,
            contentType: false,
            
            success:function(response){
                window.location.href=response.url;
            },
            
            error:function(response){
            let formErrors = response.responseJSON.errors;
            
            if(formErrors.hasOwnProperty('password')) {
            $('#password-error').html(formErrors.password[0]);
            }
            if(formErrors.hasOwnProperty('name')) {
            $('#name-error').html(formErrors.name[0]);
            }
            if(formErrors.hasOwnProperty('email')) {
             $('#email-error').html(formErrors.email[0]); 
            } 
            if(formErrors.hasOwnProperty('image')) {
            $('#image-error').html(formErrors.image[0]);
            }
            if(formErrors.hasOwnProperty('checkbox')) {
            $('#checkbox-error').html(formErrors.checkbox[0]);
            }
            }
    })
}
</script>