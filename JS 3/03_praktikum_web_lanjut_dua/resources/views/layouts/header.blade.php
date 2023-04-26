<div class="container">
    <div class="row">
        <div class="tm-header">
            <a href="{{ url('/') }}" class="tm-site-name">Metro City</a>
            <div class="mobile-menu-icon">
              <i class="fa fa-bars"></i>
            </div>
            <nav class="tm-nav">
                <ul>
                    <li><a href="{{ url('/') }}" class="{{ $active == 'home' ? 'active' : ''}}">Home</a></li>
                    <li><a href="{{ url('/about') }}" class="{{ $active == 'about' ? 'active' : ''}}">About</a></li>
                    <li><a href="{{ url('/features') }}" class="{{ $active == 'features' ? 'active' : ''}}">Features</a></li>
                    <li><a href="{{ url('/contact') }}" class="{{ $active == 'contact' ? 'active' : ''}}">Contact</a></li>
                </ul>
            </nav>
        </div>			
    </div>		
</div>