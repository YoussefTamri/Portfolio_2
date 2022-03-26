@extends('include\back-end\layouts\dashbord-darck')


@section('content')





<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        .full-height {
            height: 100vh;
        }
        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }
        .position-ref {
            position: relative;
        }
        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }
        .content {
            text-align: center;
        }
        .title {
            font-size: 84px;
        }
        .error {
            color: #ae1c17;
        }
        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    


    <div class="flex-center position-ref full-height">
    <div class="content">
        

        <br>

        <div class="title m-b-md">
            Add Admin
 
         </div>
      
        <form method="POST" action="{{route('admin_pipline.edit')}}" enctype="multipart/form-data">
            @csrf


            <div class="form-group">
                <label for="exampleInputEmail1"> name</label>
                <input type="text" class="form-control" value="{{$admin_pipline->name}}"  name="name" placeholder=" name">
                @error('name')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>



            <div class="form-group">
                <label for="exampleInputPassword1">email</label>
                <input type="email" class="form-control" value="{{$admin_pipline->email}}" name="email" placeholder="email">
                @error('email')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>

          

            <div class="row mb-3">
                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            
            <div class="row mb-3">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Confirm Password</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>


        
            <button type="submit" class="btn btn-primary"> save </button>
        </form>
    







        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        @if(Session::has('success'))
      <script>
          swal("Great Job","{!!Session::get('success')!!}","success",{
              button:"OK",
          })
          </script>
    @endif
    

       
@endsection