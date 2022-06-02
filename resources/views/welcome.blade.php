@extends('layouts.welcome')

@section('content')
    <!--Start Boats Skipper Form Area-->
    <section class="boats-skipper-form-area thm_bgclr2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="boats-skipper-search-box style2 text-center">

                        @livewire('visitor-log-component')

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Boats Skipper Form Area-->

    <!--Start Create Boats Area-->
    <section class="create-boats-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="create-boats-content">
                        <div class="sec-title black">
                            <div class="icon"><span class="flaticon-rudder"></span></div>
                            <div class="big-title black">
                                <h1>About Us</h1>
                            </div>
                        </div>
                        <div class="inner-content">
                            <div class="text-box pl-0">
                                <p>Tenece Professional Services Limited (Tenece) is a multi-competency enterprise transformation and technology-consulting firm that combines expertise and capabilities across many industries and business functions to deliver superior value to its clients. Tenece collaborates with its clients, both in the private and public sectors, to build high performance enterprises.</p>
                                <a class="btn-one" href="#">Learn More</a>
                            </div>
                            <div class="img-box">
                                <img src="{{asset('images/slides/CORE-V.png')}}" alt="Awesome Image" style="width: 300px" >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="boats-featured-box text-center">
                        <ul>
                            <li>
                                <div class="icon"><span class="flaticon-team"></span></div>
                                <h3><a href="#"> Best efforts <br> 100% of the time</a></h3>
                                <div class="count">01</div>
                            </li>
                            <li>
                                <div class="icon"><span class="flaticon-clock"></span></div>
                                <h3><a href="#">Around the <br> clock response time</a></h3>
                                <div class="count">02</div>
                            </li>
                            <li>
                                <div class="icon"><span class="flaticon-gps"></span></div>
                                <h3><a href="#">Offices located <br> worldwide</a></h3>
                                <div class="count">03</div>
                            </li>
                            <li>
                                <div class="icon"><span class="flaticon-beach"></span></div>
                                <h3><a href="#">Giving you peace<br> while we build your bussiness</a></h3>
                                <div class="count">04</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Create Boats Area-->

@endsection
