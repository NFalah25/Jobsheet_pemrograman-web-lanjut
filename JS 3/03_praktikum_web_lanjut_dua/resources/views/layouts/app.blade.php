<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Hatta-Naufal ~ @yield('titlePage')</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
	<link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ url('css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ url('css/templatemo-style.css') }}" rel="stylesheet">
</head>
<body>
    {{-- Header --}}
    @include('layouts.header')
    {{-- End Header --}}

    {{-- Sidebar --}}
    @yield('slider')
    {{-- End Sidebar --}}

    <div class="container">
        {{-- Content --}}
        @yield('content')
        {{-- End Content --}}

        {{-- Footer --}}
        @include('layouts.footer')
        {{-- End Footer --}}
	</div>


    <!-- jQuery -->
    <script type="text/javascript" src="{{ url('js/jquery-1.11.2.min.js') }}"></script>
	<!-- Templatemo Script -->
    <script type="text/javascript" src="{{ url('js/templatemo-script.js') }}"></script>
</body>
</html>