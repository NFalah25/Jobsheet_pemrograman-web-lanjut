@extends('layouts.app')

@section('titlePage', 'Contact')

@section('slider')
<div class="tm-banner tm-bn-4">
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
    <div class="tm-contact-lr">
        <div class="tm-map-container">
            <div id="google-map"></div>	
        </div>				
        <div class="tm-2-columns">	
            <div class="col-lg-push-6 col-md-push-6 col-sm-push-6 col-xs-push-6 tm-contact-small-box tm-about-container tm-position-relative tm-white-box">
                <h2 class="tm-h2 tm-about-title">Follow Us On <span class="tm-red-text margin-top-15">Social Networks</span></h2>						
            </div>				
            <div class="col-lg-pull-6 col-md-pull-6 col-sm-pull-6 col-xs-pull-6 tm-contact-small-box tm-red-box">
                <i class="fa fa-4x fa-caret-left tm-triangle-left"></i>
                <div class="tm-contact-social-icons">
                    <a href="#" class="tm-contact-social-icon"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="tm-contact-social-icon"><i class="fa fa-rss"></i></a>
                    <a href="#" class="tm-contact-social-icon"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="tm-contact-social-icon"><i class="fa fa-google-plus"></i></a>
                </div>
            </div>
            
        </div>
    </div>
    <div class="tm-contact-lr">				
        <div class="tm-2-columns">
            <div class="tm-contact-small-box tm-about-container tm-position-relative tm-white-box">
                <h2 class="tm-h2 margin-bottom-0"><i class="fa fa-map-marker"></i> Our <span class="tm-blue-text">Address</span></h2>							
            </div>
            <div class="tm-contact-small-box">
                <i class="fa fa-4x fa-caret-right tm-triangle-right"></i>
                <p class="tm-address">123, Rama IX Road,<br>Bangkok 12345,<br>Thailand.</p>
                <img src="img/contact.jpg" alt="image" class="tm-contact-address-img">
            </div>
        </div>
        <div class="tm-contact-form-container">
            <form action="#" method="post" class="tm-contact-form">
                <h2 class="tm-h2 tm-white-text">Contact <span class="tm-blue-text">Form</span></h2>
                <div class="form-group margin-top-30">
                    <input type="text" id="contact_name" class="form-control" placeholder="NAME" />
                  </div>
                  <div class="form-group">
                    <input type="email" id="contact_email" class="form-control" placeholder="EMAIL" />
                </div>
                <div class="form-group">
                    <input type="text" id="contact_subject" class="form-control" placeholder="SUBJECT" />
                </div>
                <div class="form-group">
                    <textarea id="contact_message" class="form-control" rows="6" placeholder="MESSAGE"></textarea>
                </div>
                <div class="form-group">
                    <button class="tm-blue-button tm-form-submit-button" type="submit" name="submit">Send</button> 
                </div>  
            </form>
        </div>
    </div>
</div>
@endsection