@extends('layouts.app')

@section('content')
    <div class="images bg-5 bg-2-font">
        <p></p>
        <img src="{{asset('logo.jpg')}}" class="img-circle" alt="Cinque Terre" width="250" height="250">
        <p></p>
        <p>IDEADVERTISE</p>
        <p> ENGAGE. CONNECT. PROMOTE.</p>
        <p></p>
    </div>

    @foreach($book as $b)

    <div class="images bg-5 bg-2-font">
        <p></p>
        <img src="{{asset($b->image)}}" class="img-circle" alt="Cinque Terre" width="250" height="250">
        <p></p>
        <p>{{$b->name}}</p>
        <p>{{$b->skill}}</p>
        <p>Rp.{{$b->price}}</p>
        <p>021-{{$b->phone}}</p>
        <p>{{$b->email}}</p>



    </div>
    @endforeach
@endsection