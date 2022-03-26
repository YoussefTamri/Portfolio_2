 <!-- head-->
@include('include.front-end.head.header')
<!-- body-->
 @extends('include.front-end.layouts.layout')
 @section('content')
  




            <!-- about-->
            @include('include.front-end.body.about')
            <!-- experience-->
            @include('include.front-end.body.experience')
            <!-- education-->
            @include('include.front-end.body.education')
           
            <!-- skils-->
            @include('include.front-end.body.skills')
             <!-- Interests-->
             @include('include.front-end.body.interests')
  
      
            {{-- project --}}
            @include('include.front-end.body.myproject')

          {{-- contact --}}

           
            @include('include.front-end.body.contact')
           
     
        
         

        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        @if(Session::has('message_sent'))
      <script>
          swal("Sent !","{!!Session::get('message_sent')!!}","success",{
              button:"OK",
          })
          </script>
        @endif
    
          

            @stop
        
