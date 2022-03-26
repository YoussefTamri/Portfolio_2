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
            Add your resume
 
         </div>
      
        <form method="POST" action="{{route('about.update',$about->id)}}" enctype="multipart/form-data">
            @csrf
     


            <div class="form-group">
                <label for="exampleInputEmail1">add your photo</label>
                <input type="file"  class="form-control" name="photo">
                @error('photo')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>


            <div class="form-group">
                <label for="exampleInputEmail1">first name</label>
                <input type="text" class="form-control"value="{{$about ->first_name}}" name="first_name" placeholder="first name">
                @error('first_name')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>


            <div class="form-group">
                <label for="exampleInputEmail1">last name</label>
                <input type="text" class="form-control" value="{{$about ->last_name}}"  name="last_name" placeholder="last name">
                @error('last_name')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">email</label>
                <input type="email" class="form-control" value="{{$about ->email}}"   name="email" placeholder="email">
                @error('email')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">phone</label>
                <input type="text" class="form-control" value="{{$about ->phone}}"  name="phone"
                       placeholder="phone">
                @error('phone')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">address</label>
                <input type="text" class="form-control" value="{{$about ->address}}"   name="address"
                       placeholder="address">
                @error('address')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">facebook</label>
                <input type="text" class="form-control" value="{{$about ->facebook}}"  name="facebook"
                       placeholder="facebook">
                @error('facebook')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">linkdin</label>
                <input type="text" class="form-control" value="{{$about ->linkdin}}"  name="linkdin"
                       placeholder="linkdin">
                @error('linkdin')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">github</label>
                <input type="text" class="form-control" value="{{$about ->github}}"  name="github"
                       placeholder="github">
                @error('github')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">instagram</label>
                <input type="text" class="form-control" value="{{$about ->instagram }}"  name="instagram"
                       placeholder="instagram">
                @error('instagram')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">description</label>
                <textarea class="form-control"   name="description"  value="{{$about -> description}}"  id="exampleFormControlTextarea1" rows="3"></textarea>
                @error('description')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror 
            </div>
            <button type="submit" class="btn btn-primary"> update </button>
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