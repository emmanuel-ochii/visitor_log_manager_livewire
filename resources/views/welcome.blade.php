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
                            <p>create your</p>
                            <div class="big-title black">
                                <h1>Tailor-Made Boats</h1>
                            </div>
                        </div>
                        <div class="inner-content">
                            <div class="img-box">
                                <img src="images/resources/create-boats-img.jpg" alt="Awesome Image">
                            </div>
                            <div class="text-box">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have in
                                    some form by injected humour words which don't look even slightly quis ullamco laboris
                                    nisi ut aliquip.</p>
                                <a class="btn-one" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="boats-featured-box text-center">
                        <ul>
                            <li>
                                <div class="icon"><span class="flaticon-team"></span></div>
                                <h3><a href="#"> Get your family or a<br> group of friends</a></h3>
                                <div class="count">01</div>
                            </li>
                            <li>
                                <div class="icon"><span class="flaticon-boat-2"></span></div>
                                <h3><a href="#">Pick the yacht of<br> your preference</a></h3>
                                <div class="count">02</div>
                            </li>
                            <li>
                                <div class="icon"><span class="flaticon-gps"></span></div>
                                <h3><a href="#">Let’s choose your<br> destination</a></h3>
                                <div class="count">03</div>
                            </li>
                            <li>
                                <div class="icon"><span class="flaticon-beach"></span></div>
                                <h3><a href="#">Sail, Your’re ready to<br> enjoy now</a></h3>
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
