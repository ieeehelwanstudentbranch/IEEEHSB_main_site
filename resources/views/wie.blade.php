@extends('layouts.app_home_articles')
@section('content')
<!-- hero image section -->
<div class="hero-image-container">
    <div class="hero-image" style="background-image: url('./images/wie/wie-hero-image.jpg');">
        <div class="overlay" style="background-image: url('./images/wie/wie-overlay.png');"></div>
        <div class="hero-image-content">
            <div class="content-wrap">
                <h1>WIE</h1>
                <p>
                    women in engineering (WIE) affinity group is an international professional no profit
                    organization <br>
                    encourages women engineers and scientists and girls to go forward in their academic interests
                    and career in engineering.
                </p>
            </div>
        </div>
    </div>
</div>
<!-- history section -->
<div class="history">
    <div class="content-wrap">
        <div class="left-content">
            <h2>
                OUR<br>HISTORY
            </h2>
            <p>
                IEEE gives opportunities to several women to hold up top leadership positions.</br>
                1993 was a special for IEEE's women cause fellow Martha Sloan had been the first woman who held
                IEEE presidential position and fellow Helen wood had been in 1993 vice president of IEEE
                publication board and Phyllis hall was staff executive of the publication department .</br>
                As like-minded people like gather and talk about things which everyone has in common, in 1993
                IEEE's female members decided to announce their own group .
            </p>
        </div>
        <div class="right-content">
            <img src="./images/wie/mariha-sloan.jpg" alt="Mariha Solan" title="Mariha Solan" width="300px" height="300px">
            <h3>MARTHA <br>SLOAN</h3>
        </div>
    </div>
</div>
<!-- start vision and mission -->
<section class="vision-mission">
    <!-- start wie vision -->
    <div class="vision">
        <div class="content-wrap">
            <div class="left-content">
                <p>
                    Support women to prove the importance of their effort in society for the technical and
                    non-technical sides, so they can affect in their society.
                </p>
            </div>
            <div class="right-content">
                <i class="fa fa-eye fa-4x" aria-hidden="true"></i>
                <p>VISION</p>
            </div>
        </div>
    </div>
    <!-- start wie mission -->
    <div class="mission">
        <div class="content-wrap">
            <div class="left-content">
                <i class="fa fa-fort-awesome fa-4x" aria-hidden="true"></i>
                <p>MISSION</p>
            </div>
            <div class="right-content">
                <p>
                    WIE discover women who can give, help and lead.<br>
                    Provide them with development programs and variable facilities which make them show what they
                    can do and get their requirements keep in touch with juniors and allow them sharing experience.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- start establish mail -->
<div class="establish-mail">
    <div class="content-wrap">
        <div class="left-content">
            <p>official<br><span>Establish</span><br>Mail From<br><span>IEEE</span></p>
        </div>
        <div class="right-content">
            <p>25 August 2015 has been a great day as women in Engineering Student Branch Affinity Group at Helwan
                University has been formed. <br>
                WIE formed their affinity group program and showed their student services department at 445 Hoes
                Lane, Piscataway, NJ 08854.</p>
        </div>
    </div>
</div>
<!-- start wie Events -->
<div class="wie-events">
    <div class="content-wrap">
        <div class="events-content">
            <div class="events">
                <div class="event">
                    <div class="overlay"></div>
                    <p><span>WIE</span><br>EVENTS</p>
                </div>
                <div class="event">
                    <div class="overlay"></div>
                    <p>Tech<br>&nbsp; venture</p>
                </div>
                <div class="event">
                    <div class="overlay"></div>
                    <p>Tech<br>&nbsp; venture 2.0</p>
                </div>
                <div class="event">
                    <div class="overlay"></div>
                    <p>Wie<br>&nbsp; juniors</p>
                </div>
                <div class="event">
                    <div class="overlay"></div>
                    <p>l'inge nieure</p>
                </div>
            </div>
            <div class="clear-fix"></div>
            <div class="workshops-container">
                <div class="workshops">
                    <h6>we have<br>&nbsp;  4 workshops:</h6>
                    <ol>
                        <li>
                            "Here comes the sun":
                            <p>teaching girls all about solar cells</p>
                        </li>
                        <li>
                            "How I think":
                            <p>teaching girls the use of math in their deals.</p>
                        </li>
                        <li>
                            "Have fun with animations":
                            <p>teaching girls the way to create games using scratch software</p>
                        </li>
                        <li>
                            "Reach the stars":
                            <p>where they learned how to make a telescope</p>
                        </li>
                    </ol>
                </div>
                <div class="make">
                    <p class="mobile-view">WIE MAKE WONDERS</p>
                    <p class="tablet-view">WIE</p>
                    <img src="./images/wie/events/wie.jpg" alt="">
                    <img src="./images/wie/events/make-wonders.jpg" alt="">
                    <p class="tablet-view">Make<br> WONDERS</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clear-fix"></div>
@endsection
