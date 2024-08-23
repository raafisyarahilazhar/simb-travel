@extends('layouts.app')

@section('title')
    SIMBS
@endsection

@section('content')
    
<!--Header-->

<header class="text-center">
<h1>
    EXPLORE THE WORLD
    <br />
    AS EASY ONE CLICK
</h1>
<p class="mt-3">
    you will see beautiful
    <br />
    moments you never see before
</p>

<a href="#popular" class="btn btn-get-started px-4 mt-4">
    Get Started
</a>

</header>

<main>
<div class="container">
    <section class="section-stats row justify-content-center" id="stats">

        <div class="col-3 col-md-2 stats-detail">
            <h2>20k</h2>
            <p>Members</p>
        </div>

        
        <div class="col-3 col-md-2 stats-detail">
            <h2>12</h2>
            <p>Countries</p>
        </div>
        
        <div class="col-3 col-md-2 stats-detail">
            <h2>3k</h2>
            <p>Hotels</p>
        </div>
        
        <div class="col-3 col-md-2 stats-detail">
            <h2>7k</h2>
            <p>partners</p>
        </div>
        
    </section>
</div>
<section class="section-popular" id="popular">
    <div class="container">
        <div class="row">
            <div class="col text-center section-popular-heading">
                <h2>Wisata Popular</h2>
                <p>
                    something that you never try
                    <br />
                    before in this world
                </p>
            </div>
        </div>
    </div>
</section>

<section class="section-popular-content" id="popularcontent">
    <div class="container">
        <div class="section-popular-travel row justify-content-center">
           @foreach ($items as $item)
            <div class="col-sm-6 col-md-4 col-lg-3">
                 <div 
                    class="card-travel text-center d-flex flex-column"
                    style="background-image: url('{{ $item->galleries->count() ? Storage::url($item->galleries->first()->image) : '' }}');">
                    <div class="travel-country">{{ $item->location }}</div>
                    <div class="travel-location">{{ $item->title }}</div>
                    <div class="travel-button mt-auto">
                        <a href="{{ url('/detail', $item->slug ) }}" class="btn btn-travel-details px-4">
                            View Details
                        </a>
                    </div>
                </div>
                 </div>
           @endforeach
        </div>
    </div>
</section>

<section class="section-networks">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2>OUR NETWORKS</h2>
                <P>companies are trusted as
                    <br />
                    more then just a trip
                </P>
            </div>
            <div class="col md-8 text-center">
                <img src="frontend/Images/partners.jpg" 
                alt="logo-partners" 
                class="img-partners">
            </div> 
        </div>
    </div>
</section>

<section class="section-testimonial-heading" id="testimonial heading">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2>They Are Loving Us</h2>
                <p>
                    moment where giving them
                    <br />
                    the best experience
                </p>
            </div>
        </div>
    </div>
</section>

<section class="section-testimonial-content" id="testimonialcontent">
    <div class="container">
        <div class="section-popular-travel row justify-content-center">
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="card card-testimonial text-center">
                    <div class="testimonial-content">
                        <img src="frontend/Images/testi-1.png" 
                        alt="user"
                        class="mb-4 rounded-circle">
                        <h3 class="mb-4">Raafi Syarahil Azhar</h3>
                        <p class="testimonial">
                            "Travel ini rasanya edan bangetttt guysss!!."
                        </p>
                    </div>
                    <hr>    
                    <p class="trip-to mt-2">
                        Trip to Deratan
                    </p>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="card card-testimonial text-center">
                    <div class="testimonial-content">
                        <img src="frontend/Images/testi2.png" 
                        alt="user"
                        class="mb-4 rounded-circle">
                        <h3 class="mb-4">Putra Rizal Al-hakim</h3>
                        <p class="testimonial">
                            "Rame euy aslina dengan travel ini. kalian harus coba
                            guys!!!"
                        </p>
                    </div>
                    <hr>    
                    <p class="trip-to mt-2">
                        Trip to HAWAI
                    </p>
                </div>
            </div> <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="card card-testimonial text-center">
                    <div class="testimonial-content">
                        <img src="frontend/Images/testi3.png" 
                        alt="user"
                        class="mb-4 rounded-circle">
                        <h3 class="mb-4">Naura Aufa Labiba</h3>
                        <p class="testimonial">
                            "Perjalanan yang sangat memuaskan 
                            sampai-sampai anda calangap guyss."
                        </p>
                    </div>
                    <hr>    
                    <p class="trip-to mt-2">
                        Trip to Raja Ampat
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
                    I Need Help
                </a>
                <a href="{{ route('register') }}" class="btn btn-get-started px-4 mt-4 mx-1">
                    Get Started
                </a>
            </div>
        </div>
    </div> 
</section>
</main>

@endsection