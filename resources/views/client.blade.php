@extends('layouts.app')

@section('content')

    <div class="images bg-5 bg-2-font">
        <p></p>
        <img src="logo.jpg" class="img-circle" alt="Cinque Terre" width="250" height="250">
        <p></p>
        <p>IDEADVERTISE</p>
        <p> ENGAGE. CONNECT. PROMOTE.</p>
        <p></p>
    </div>


    <div class="container-fluid bg-5 text-center">
        <h1 class="margin">Our Talent</h1><br>
        <div class="row">

        @foreach($client as $c)
            <span class="col-sm-3 ">
               <p class="fontTittle">{{$c->name}}</p>
               <img src="{{$c->image}}" class="img-responsive img-circle margin images" style="width:100%" alt="Image" width="150" height="150">
               <a href="client/{{$c->id}}">See More</a>

            </span>
        @endforeach


        </div>
    </div>


@endsection