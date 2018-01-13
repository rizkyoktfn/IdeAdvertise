@extends('layouts.app')

@section('content')
    <div class="stylebody">
        <div class="container-fluid bg-1 text-center">
            <h3 class="margin ">Who Are We ?</h3>
            <img src="logo.jpg" class="img-responsive: img-circle margin" style="display:inline" alt="Bird" width="350" height="350" text-align="center">
            <h3 class="margin">We Are Advertise Agency</h3>
        </div>

        <!-- Second Container -->
        <div class="container-fluid bg-2 text-center">
            <h3 class="margin">About Us?</h3>
            <div class="container-fluid bg-2-font text-center">
                <p>Your BEST AGENCY for your Digital Campaign, Integrated Website, Branding Design into Powerfull,  Digital Marketing Concept.</p>
                <p>WE Make Vission Happen</p>
            </div>

        </div>

        <!-- Third Container (Grid) -->
        <div class="container-fluid bg-3 text-center">
            <h3 class="margin">What We Make ?</h3><br>
            <div class="row">
                <span class="col-sm-2 text-center">
                   <p class="fontTittle">Website Designer</p>
                   <img src="web.png" class="img-responsive img-circle margin" style="width:100%" alt="Image">
                   <a href="website">See More</a>
                </span>

                <span class="col-sm-2 text-center">
                    <p class="fontTittle">Branding</p>
                    <img src="img2.jpg" class="img-responsive img-circle margin" style="width:100%" alt="Image">
                   <a href="branding">See More</a>
                </span>
            </div>
        </div>

    </div>
@endsection
