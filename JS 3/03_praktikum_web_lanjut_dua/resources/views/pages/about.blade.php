@extends('layouts.app')

@section('titlePage', 'About')

@section('slider')
<div class="tm-banner tm-bn-2">
    <div class="container">
        <div class="row">
            <div class="tm-banner-text">
                <div class="tm-banner-text-inner">
                    <h1 class="tm-banner-title">Creative Design Agency</h1>
                    <p class="tm-banner-description">Lorem Ipsum Proin Gravida</p>
                </div>	
            </div>			
        </div>			
    </div>			
</div>	
@endsection

@section('content')
<div class="row">
    <div class="tm-about-left tm-about-lr tm-white-box">
        <article class="tm-about-text">
            <header class="text-uppercase">
                <h2 class="tm-h2">Lorem Ipsum Nam Telus Odion</h2>
                <h3 class="tm-red-text">Elit Class Himese Juso</h3>	
            </header>
            <div class="tm-intro-description tm-gray-text">
                <p class="tm-about-text-block"><span class="tm-blue-text">Metro City</span> is free responsive layout from <span class="tm-blue-text">templatemo</span>. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibu.</p>
                <p class="tm-about-text-block">Rcondimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Prion condimentum fermentum nunc. Etiam pharetra.</p>
                <ul class="tm-red-circle-check tm-about-text-block">
                    <li><i class="fa fa-check-circle tm-check"></i> Aenean sollicitudin lorem quis</li>
                    <li><i class="fa fa-check-circle tm-check"></i> Duis sed odio sit amet</li>
                    <li><i class="fa fa-check-circle tm-check"></i> Morbi accumsan ipsum velit.</li>
                    <li><i class="fa fa-check-circle tm-check"></i> Nam nec tellus a odio</li>
                    <li><i class="fa fa-check-circle tm-check"></i> Sed non mauris vitae erat consequat</li>
                </ul>
                <a href="#" class="tm-button tm-red-button tm-about-text-block">Read More</a>
            </div>
        </article>				
    </div>
    <div class="tm-about-right tm-about-lr">
        <img src="img/about-1.jpg" alt="Image" class="tm-about-img">
        <div class="tm-2-columns">
            <div class="tm-about-container tm-position-relative tm-light-gray-box">
                <h2 class="tm-h2 tm-about-title">What <span class="tm-blue-text">We Do</span></h2>
                <p class="tm-gray-text">Morbi accumsan ipsum velit dam nec tellus a odio tincidunt auctor a ornare odio.</p>
                <a href="#"><i class="fa fa-3x fa-angle-down tm-blue-text"></i></a>
            </div>
            <div>
                <img src="img/about-2.jpg" alt="image" class="tm-about-img-2">						
            </div>					
        </div>
    </div>
</div>
<div class="row">
    <div class="tm-about-left">
        <div class="tm-video-box">
            <div class="tm-video-box-overlay">
                <p class="tm-video-description"><span class="tm-red-text">Video</span><br>Recondiment</p>
                <a href="#" class="tm-play absolute-center tm-flex-center">
                    <i class="fa fa-4x fa-play-circle tm-red-button-alpha"></i>
                </a>						
            </div>
            <img src="img/about-3.jpg" alt="Image" class="tm-video-img">
        </div>
    </div>
    <div class="tm-about-right">
        <div class="tm-2-columns">
            <div>
                <img src="img/about-4.jpg" alt="image" class="tm-about-img-4">
            </div>
            <div class="tm-about-container tm-position-relative tm-light-gray-box">
                <h2 class="tm-h2 tm-intro-title">Our <span class="tm-blue-text">Services</span></h2>
                <p class="tm-gray-text">Morbi accumsan ipsum velit dam nec tellus a odio tincidunt auctor a ornare odio.</p>
                <a href="#"><i class="fa fa-3x fa-angle-down tm-blue-text"></i></a>
            </div>					
        </div>
    </div>
</div>
@endsection