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

    <div class="images bg-5 bg-2-font">
        <p></p>
        <img src="{{asset($client->image)}}" class="img-circle" alt="Cinque Terre" width="250" height="250">
        <p></p>
        <p>{{$client->name}}</p>
        <p>{{$client->skill}}</p>
        <p>Rp.{{$client->price}}</p>


        <a href="{{url('/book/'.$client->id)}}"> <button type="submit" class="btn btn-primary btn-md">Book</button></a>
    </div>
@endsection