<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IEEE Helwan Student Branch</title>
    <meta name="keywords" content="IEEE, HSB, Helwan Student Chapter, IEE HSB">
    <meta name="author" content="Mohamed Emad">
    <meta name="description" content="Was created in 2001 .. and it was the 3rd branch to be created in Egypt. Then it was re-activated again in October 2010 by Dr.omar hanfy and Mr. ahmed kamal. IEEE Helwan was the first student organization to be founded in Helwan university.">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.min.css')}}">
</head>

<body>
<header>
    <div class="content-wrap">
        <div class="site-branding">
            <a href="/" title="IEEE-Helwan Student Branch"> <img src="{{asset('images/logo.png')}}" alt="IEEE Helwan Student Branch"> </a>
        </div><!-- .site-branding -->
        <button id="menu-toggle" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
        <nav class="site-navigation" id="site-navigation">
            <ul id="menu">
                <li class="active"><a href="/" title="Home">Home</a></li>
                <li><a href="/about" title="about">About</a></li>
                <li><a href="/events" title="events">Events</a></li>
                <li class="menu-item-has-children">
                    <a href="#" title="Chapters">Chapters</a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/ras">RAS</a></li>
                        <li><a href="https://peshsc.com">Power Engineering Society</a></li>
                        <li><a href="/wie">Women In Engineering</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="#" title="EYE-EEE Magazine">EYE-EEE Magazine</a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/magazine" title="Magazine">Magazine</a></li>
                        @if (Auth::guest())
                            <li><a href="/articles" title="articles">Articles</a></li>
                        @endif
                        @if (!Auth::guest())
                            <li><a href="/articles-dashboard" title="articles">Articles</a></li>
                        @endif
                    </ul>
                </li>
            </ul>
        </nav><!-- site-navigation -->

    </div>
</header><!-- masthead -->




@include('messages')
@yield('content')




<div class="clear-fix"></div>
<!-- start Footer -->
<footer>
    <div class="content-wrap">
        <p class="copy-right">&copy; IEEE-HELWAN STUDENT BRANCH - All Copy Right Reseved</p>
        <!-- Social Media Links -->
        <ul class="social-media">
            <li><a href="https://www.facebook.com/ieeehsb/" alt="Facebook page"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="https://twitter.com/helwansb" alt="twitter account"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="https://www.instagram.com/ieee_hsb/" alt="Instgram account"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        </ul>
        <!-- end Social Media Links -->
    </div>
</footer>
<!-- End Footer -->

<script src="{{ asset('js/published-menu.min.js') }}"></script>
<script src="{{ asset('js/sticky-menu.min.js') }}"></script>
<script src="{{ asset('js/slider-settings.min.js') }}"></script>
<script src="{{ asset('js/carousel.min.js') }}"></script>
</body>

</html>

