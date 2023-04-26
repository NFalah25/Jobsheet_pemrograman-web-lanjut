@extends('layouts.app')

@section('titlePage', 'Home')

@section('slider')
<div class="tm-banner tm-bn-1">
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
    <div class="tm-blocks-container">
        <div class="tm-home-left">
            <div class="tm-2-columns">						
                <div class="tm-home-block-small tm-img-text tm-position-relative tm-white-box">
                    <div class="tm-social-icons-container">
                        <a href="#"><i class="tm-social-icon fa fa-facebook"></i></a>
                        <a href="#"><i class="tm-social-icon fa fa-twitter"></i></a>
                        <a href="#"><i class="tm-social-icon fa fa-rss"></i></a>
                        <a href="#"><i class="tm-social-icon fa fa-google-plus"></i></a>
                    </div>
                    <h2 class="tm-h2">Duis Sedio Sitam Elit Class</h2>
                    <p class="text-justify tm-gray-text">Morbi accumsan ipsum velamso nec tellus roin ...</p>	
                </div>
                <div class="tm-home-block-small tm-position-relative">
                    <i class="fa fa-4x fa-caret-right tm-triangle-right"></i>
                    <img src="img/home-1.jpg" alt="image" class="tm-home-img-1">	
                </div>										
            </div>					
            <div class="tm-home-block-big tm-position-relative">
                <div class="tm-red-box tm-img-overlay tm-img-overlay-1">
                    <p>Ribendum elit conseqt ipsum sagittis nibh</p>	
                </div>						
                <img src="img/home-3.jpg" alt="image" class="img-responsive">
            </div>
            <div class="tm-2-columns">						
                <div class="tm-home-block-small tm-img-text tm-position-relative tm-white-box">
                    <div class="tm-social-icons-container">
                        <a href="#"><i class="tm-social-icon fa fa-facebook"></i></a>
                        <a href="#"><i class="tm-social-icon fa fa-twitter"></i></a>
                        <a href="#"><i class="tm-social-icon fa fa-rss"></i></a>
                        <a href="#"><i class="tm-social-icon fa fa-google-plus"></i></a>
                    </div>
                    <h2 class="tm-h2">Lorem Ipsum Do Elit Class</h2>
                    <p>By: David Hanson</p>
                </div>				
                <div class="tm-home-block-small tm-position-relative">
                    <img src="img/home-5.jpg" alt="image" class="tm-home-img-1">		
                </div>						
            </div>
        </div>			
        <div class="tm-home-right">
            <div class="tm-home-block-big tm-position-relative tm-home-img-big-2-container">
                <div class="tm-blue-box tm-img-overlay tm-img-overlay-2">
                    <p>Ribendum elit conseqt ipsum sagittis nibh</p>	
                </div>						
                <img src="img/home-2.jpg" alt="image" class="img-responsive">
            </div>
            <div class="tm-home-block-big tm-2-columns-tall">
                <div class="col tm-intro-container tm-position-relative tm-white-box">
                    <div class="tm-social-icons-container">
                        <a href="#"><i class="tm-social-icon fa fa-facebook"></i></a>
                        <a href="#"><i class="tm-social-icon fa fa-twitter"></i></a>
                        <a href="#"><i class="tm-social-icon fa fa-rss"></i></a>
                        <a href="#"><i class="tm-social-icon fa fa-google-plus"></i></a>
                    </div>
                    <h2 class="tm-h2 tm-intro-title">Lorem Ipsum Elit Conseaut Odiosi</h2>
                    <p class="tm-gray-text tm-intro-description">This is free responsive layout from <span class="tm-blue-text">templatemo</span>. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis odio sit amet nibh vulputate cursus.</p>
                    <a href="#" class="tm-button tm-blue-button margin-top-30">Learn More</a>				
                </div>
                <div class="col tm-2-rows tm-2-rows-2">
                    <div class="tm-home-block-small tm-home-img-1-container">
                        <img src="img/home-4.jpg" alt="image" class="tm-home-img-1">	
                    </div>							
                    <div class="tm-home-block-small padding-30 tm-dark-box tm-dark-box-img-text">
                        <h2 class="tm-h2 tm-dark-gray-text">Lorem Ipsumdol Elit Class</h2>
                        <a href="#" class="tm-button tm-blue-button margin-top-15">Learn More</a>
                    </div>	
                </div>						
            </div>					
        </div>
    </div>			
</div>

@endsection