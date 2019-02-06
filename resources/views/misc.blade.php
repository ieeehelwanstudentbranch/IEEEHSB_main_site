@extends('layouts.app_home_articles')
@section('content')
<div class="slider-wrap">
        <div id="misc-slider">
            <div class="slide" style="background-image: url('./images/misc/hero-image.jpg');">
                <div class="gray-scale"></div>
                <div class="overlay"></div>
                <div class="background-text"><p>AWARDS</p></div>
                <div class="slide-content">
                    <h3>Exemplary Award (Sep 2018)</h3>
                    <p>
                        We had been honoured to win such an award that shows our worth of imitation for the second time in a row.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="carousel">
        <div class="entry-header">Gallery</div>
        <div class="carousel-wrap" id="carousel-wrap">
            <div id="arrow-left" class="arrow">
                <i class="fa fa-chevron-left fa-3x" aria-hidden="true"></i>
            </div>
            <div id="carousel-items">
                <div class="carousel-item">
                    <img src="images/misc/slider-1.jpg" alt="image title" width="390px" height="260px">
                    <h4>TECH VENTURE WIE Affinity Group ‚17</h4>
                </div>
                <div class="carousel-item">
                    <img src="images/misc/slider-2.jpg" alt="image title" width="390px" height="260px">
                    <h4>Maker Faire ‚17</h4>
                </div>
                <div class="carousel-item">
                    <img src="images/misc/slider-3.jpg" alt="image title" width="390px" height="260px">
                    <h4>High Board ‚19</h4>
                </div>
                <div class="carousel-item">
                    <img src="images/misc/slider-4.jpg" alt="image title" width="390px" height="260px">
                    <h4>IEEE HSB Crew ‚18</h4>
                </div>
                <div class="carousel-item">
                    <img src="images/misc/slider-5.jpg" alt="image title" width="390px" height="260px">
                    <h4>Closing ‚17</h4>
                </div>
            </div>
            <div id="arrow-right" class="arrow">
                <i class="fa fa-chevron-right fa-3x" aria-hidden="true"></i>
            </div>
        </div>
    </div>

    <section class="seminars">
        <div class="content-wrap">
            <h3 class="entry-header">seminars</h3>
        </div>
        <div class="content-wrap">
            <div class="seminar">
                <h4>Electrics Sewedy Preparation</h4>
                <time datetime="2018-03-23">23/3/2018</time>
                <ul>
                    <p>content:</p>
                    <li> how to write a CV.</li>
                    <li> How to pass the filtration phase for El-sewedy summer training.</li>
                    <li> El Sewedy Electric's Fields.</li>
                    <li> How to get job opportunity from El Sewedy Electric.</li>
                </ul>
            </div>
            <div class="seminar">

                <h4>JP Camp</h4>
                <time>16&17/2/2018 </time>
                <ul>
                    <p>Content:</p>
                    <li> How to set a goal. </li>
                    <li> Fields and Activities.</li>
                    <li> Time Management. </li>
                    <li> Negotiation Skills .</li>
                    <li> Communication between parents and children. </li>
                    <li> Technology problem. </li>
                    <li> Enthusiasm and encouragement. </li>
                    <li> Persuasion. </li>
                </ul>
            </div>
            <div class="seminar">
                <h4>Trajectory</h4>
                <time>15/7/2017</time>
                <ul>
                    <p>content:</p>
                    <li> Self Management.</li>
                    <li> Communication.</li>
                    <li> Negotiation Skills.</li>
                    <li> Decision Making Skills.</li>
                    <li> Financial Management.</li>
                </ul>
            </div>

        </div>

    </section>
    <div class="clear-fix"></div>
    <section class="confereces">
        <div class="content-wrap">
            <h3 class="entry-header">confereces</h3>
            <div class="content-row">
                <div class="left-content">
                    <div class="image-wrapper">
                        <div class="frame">
                            <h3>Modifier</h3>
                        </div>
                        <img src="images/misc/modifier.jpg" alt="modifier">
                    </div>
                </div>
                <div class="right-content">
                    <ul>
                        <li>Talks in different fields like AR, VR, 3D art and cybersecurity.</li>
                        <li>Workshops.</li>
                        <li>Competitions.</li>
                    </ul>
                </div>
                <div class="clear-fix"></div>
            </div>
            <div class="content-row">
                <div class="right-content">
                    <div class="image-wrapper">
                        <div class="frame">
                            <h3>Local hack day</h3>
                        </div>
                        <img src="images/misc/localhackday.jpg" alt="Local Hackday">
                    </div>
                </div>
                <div class="left-content">
                    <ul>
                        <li>Why Linux?</li>
                        <li>From Gamer to Developer Roadmap.</li>
                        <li>Intro to CTF and Reverse Engineering.</li>
                        <li>How to Play Competitive Programming?</li>
                        <li>Exploring Android World.</li>
                        <li>Web Design 101.</li>
                        <li>Intro to Robotics and ROV.</li>
                        <li>Web Development 101.</li>
                        <li>Intro to Embedded Systems.</li>
                        <li>ABC Python.</li>
                    </ul>
                </div>
                <div class="clear-fix"></div>
            </div>
            <div class="content-row">
                <div class="left-content">
                    <div class="image-wrapper">
                        <div class="frame">
                            <h3>L'ingénieure</h3>
                        </div>
                        <img src="images/misc/L'ingénieure.jpg" alt="L'ingénieure">
                    </div>
                </div>
                <div class="right-content">
                    <ul>
                        <li>Challenges that face women.</li>
                        <li>Female successful stories.</li>
                        <li>How Valeo empowers women.</li>
                        <li>Future you.</li>
                        <li>Women Career Path.</li>
                        <li>How to get ready for the work life.</li>
                        <li>How to get recruited.</li>
                    </ul>
                </div>
                <div class="clear-fix"></div>
            </div>
            <div class="content-row">
                <div class="right-content">
                    <div class="image-wrapper">
                        <div class="frame">
                            <h3>MEPCON</h3>
                        </div>
                        <img src="images/misc/MEPCON.jpg" alt="MEPCON">
                    </div>
                </div>
                <div class="left-content">
                    <p>It aims to review and discuss the scientific and
                        technological development in the field of electrical
                        power and the applications of renewable energy
                        systems and to discuss, as well, the challenges that
                        face the electrical power system in general and the
                        engineering education in specific. </p>
                </div>
                <div class="clear-fix"></div>
            </div>
        </div>
    </section>
    <div class="clear-fix"></div>
    <section class="faqs">
        <div class="content-wrap">
            <div class="faq">
                <h3>What’s IEEE stand for ?!</h3>
                <p>IEEE, pronounced "Eye-triple-E," stands for the Institute of Electrical and Electronics Engineers. The association is chartered under this name and it is the full legal name.</p>
            </div>
            <div class="faq">
                <h3>Who’s IEEE ?!</h3>
                <p>The Institute of Electrical and Electronics Engineers is a professional association with its corporate office in New York City and its operations center in Piscataway, New Jersey. It was formed in 1963 from the amalgamation of the American Institute of Electrical Engineers and the Institute of Radio Engineers.</p>
            </div>
            <div class="faq">
                <h3>How to be a member of IEEE ?</h3>
                <ol>
                    <li>Sign into your renewal using your IEEE Account. </li>
                    <li>Go to your renewal.</li>
                    <li>Add IEEE Membership.</li>
                    <li>You will see the following selections: Student or Professional.</li>
                    <li>Select I am a Student.</li>
                    <li>Select the Student status.</li>
                    <li>Enter the University Name.</li>
                    <li>Complete all the questions.</li>
                </ol>
            </div>
            <div class="faq">
                <h3>What’s PES in IEEE ?!</h3>
                <p>The IEEE Power & Energy Society (PES), formerly the IEEE Power Engineering Society, is the oldest society of the Institute of Electrical and Electronics Engineers (IEEE) focused on the scientific and engineering knowledge about electric power and energy.</p>
            </div>
            <div class="faq">
                <h3>What’s RAS in IEEE ?!</h3>
                <p>The IEEE Robotics and Automation Society (IEEE RAS) is a professional society of the IEEE that supports the development and the exchange of scientific knowledge in the fields of robotics and automation, including applied and theoretical issues.</p>
            </div>
            <div class="faq">
                <h3>What’s WIE in IEEE ?! </h3>
                <p>IEEE Women in Engineering (WIE) is one of the largest international professional organizations dedicated to promoting women engineers and scientists and inspiring girls around the world to follow their academic interests to a career in engineering.</p>
            </div>
        </div>
        <div class="clear-fix"></div>
    </section>
    <div class="clear-fix"></div>
@endsection
