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
            Add your education
 
         </div>
      
        <form method="POST" action="{{route('education.store')}}" enctype="multipart/form-data">
            @csrf



         


            <div class="form-group">
                <label for="exampleInputPassword1">titre</label>
                <input type="text" class="form-control" name="titre"
                       placeholder="titre">
                @error('titre')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">sous titre</label>
                <input type="text" class="form-control" name="sous_titre"
                       placeholder="sous titre">
                @error('sous_titre')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">begin date</label>
                <input type="text" class="form-control" name="begin_date"
                       placeholder="begin date">
                @error('begin_date')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">end date</label>
                <input type="text" class="form-control" name="end_date"
                       placeholder="end date">
                @error('end_date')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
        
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">description</label>
                <textarea class="form-control"  name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                @error('description')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror 
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