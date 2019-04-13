@extends('layouts.app_home_articles')
@section('content')
    <div data-name="Single Item" class="glider-contain">
        <div class="glider" id="glider-single">
            <div class="slide">
                <img src="{{asset('images/home/starter.jpg')}}">
                <div class="overlay">
                    <div class="slide-content">
                        <h2>Vision</h2>
                        <div class="content-description">
                            <h4>REACH YOUR INFINITY</h4>
                            <p>Through:</p>
                            <ul>
                                <li>Holding Courses and Sessions to decrease the gap between theoretical scince and
                                    parctical life.</li>
                                <li>Holding technical workshops.</li>
                                <li>Helping our country by our community Service.</li>
                                <li>Participating in IEEE worldwide competitions.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slide">
                <img src="{{asset('images/home/eye-eee-magazine.jpg')}}" />
                <div class="overlay">
                    <!-- <div class="slide-content">
                        <div class="content-title"></div>
                        <div class="content-description"></div>
                    </div>  -->
                </div>
            </div>

            <div class="slide">
                <img src="{{asset('images/home/ras.jpg')}}" />
                <div class="overlay">
                    <!-- <div class="slide-content">
                        <div class="content-title"></div>
                        <div class="content-description"></div>
                    </div> -->
                </div>
            </div>

            <div class="slide">
                <img src="{{asset('images/home/pes.jpg')}}" alt="">
                <div class="overlay">
                    <!-- <div class="slide-content">
                        <div class="content-title"></div>
                        <div class="content-description"></div>
                    </div> -->
                </div>
            </div>

            <div class="slide">
                <img src="{{asset('images/home/wie.jpg')}}" alt="" srcset="">
                <div class="overlay">
                    <!-- <div class="slide-content">
                        <div class="content-title"></div>
                        <div class="content-description"></div>
                    </div> -->
                </div>

            </div>
        </div>
        <button role="button" aria-label="Previous" class="glider-prev" id="glider-prev">
            <i class="fa fa-chevron-left"></i>
        </button>
        <button role="button" aria-label="Next" class="glider-next" id="glider-next">
            <i class="fa fa-chevron-right"></i>
        </button>
        <div id="dots" class="glider-dots"></div>
    </div>
@endsection
