@extends('layouts.app')

@section('titlePage', 'Features')

@section('slider')
<div class="tm-banner tm-bn-3">
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
    <div class="boxes-container">
        <div class="boxes-left">
            <div class="box">
                <div class="tm-block-1 tm-text-block content">
                    <h2 class="tm-h2">Duis Sedio Sitam Elit Class</h2>
                    <p class="text-justify tm-gray-text">Nam nec risus feugiat dui ultrices dignissim. Morbi ex purus, commodo a tristique eu, mollis a nisi. Pellentesque in enim sit amet tellus ornare fringilla eget eu arcu.</p>
                </div>	
            </div>
            <div class="box">
                <img src="img/features-1.jpg" alt="Features" class="tm-block-1 content">	
            </div>					
            <div class="box">
                <a href="#" class="content">
                    <div class="tm-block-1 tm-text-block tm-blue-box">
                        <i class="fa fa-align-left fa-3x"></i>
                        <h3 class="text-uppercase">Latest News</h3>
                    </div>	
                </a>	
            </div>
            <div class="box">
                <div class="tm-block-1 tm-text-block content">
                    <h2 class="tm-h2">Velit Prion Nigh Alitquet Isum</h2>
                    <p class="text-justify tm-gray-text">Ut tempor, tellus nec euismod laoreet, risus risus porttitor arcu, egestas tempus quam purus sed velit. Aenean sed nulla et mi ornare semper. Cras nec gravida augue.</p>
                </div>	
            </div>	
        </div>
        <div class="boxes-right">
            <div class="box col-lg-push-6 col-md-push-6 col-sm-push-6 col-xs-push-6">
                <img src="img/features-2.jpg" alt="Features" class="tm-block-1 content">	
            </div>					
            <div class="box col-lg-pull-6 col-md-pull-6 col-sm-pull-6 col-xs-pull-6">
                <div class="tm-block-1 tm-text-block content">
                    <h2 class="tm-h2">Bendum Actor Aenean Soli</h2>
                    <p class="text-justify tm-gray-text"><span class="tm-blue-text">Metro City</span> is free HTML5 layout from <span class="tm-blue-text">templatemo</span>. You can use this template for any website without giving any credit link back. Nulla gravida orci augue, egestas vestibulum.</p>
                </div>	
            </div>					
            <div class="box">
                <a href="#" class="content">
                    <div class="tm-block-1 tm-text-block tm-red-box">
                        <i class="fa fa-comments-o fa-3x"></i>
                        <h3 class="text-uppercase">Testimonials</h3>
                    </div>	
                </a>			
            </div>
            <div class="box">
                <div class="tm-block-1 tm-text-block content">
                    <h2 class="tm-h2">Consequat Ipsu Dinquis Bid</h2>
                    <p class="text-justify tm-gray-text">In et quam id libero venenatis venenatis. Morbi vitae justo vulputate, auctor augue eu, pulvinar augue. Vestibulum placerat sem eu posuere laoreet.</p>
                </div>	
            </div>	
        </div>
    </div>		
</div>
@endsection