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



<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">titre</th>
        <th scope="col">sous titre</th>
        <th scope="col">begin date</th>
        <th scope="col">end date</th>
        <th scope="col">description</th>
        <th scope="col">operation</th>
    </tr>
    </thead>
    <tbody>


    @foreach($experience as $experiences)
        <tr>
            <th scope="row">{{$experiences -> id}}</th>
            <td>{{$experiences -> titre}}</td>
            <td>{{$experiences -> sous_titre}}</td>
            <td>{{$experiences -> begin_date}}</td>
            <td>{{$experiences -> end_date}}</td>
            <td>{{$experiences -> description}}</td>
         
           
            
         

            <td>
                <a href="{{url('experience/edit/'.$experiences -> id )}}" class="btn btn-success"> edit </a>
                <a href="{{route('experience.delete',$experiences -> id)}}" class="btn btn-danger"> delete </a>
             </td>

        </tr>
    @endforeach

    </tbody>





</table>
@if(Session::has('success'))
<script>
    swal("Great Job","{!!Session::get('success')!!}","success",{
        button:"OK",
    })
    </script>
@endif
</body>


</html>
@stop