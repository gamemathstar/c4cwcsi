@extends('layouts.base')


@section('content')

    <!-- Banner Area -->
    <section id="home_one_banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner_one_text">
                        <h1><span><span class="color_big">Share</span> your love to</span>
                            make someone’s life better</h1>
                        <p>At Center for Child welfare and Community Support Initiative we recognize the importance of giving back to our community and supporting other organizations that share our commitment to empowering vulnerable individuals. We believe that by working together and pooling our resources, we can make a greater impact and create positive change in the world.</p>
                        <p>Through our outreach programs, we aim to support local orphanages in their efforts to improve the lives of children in need. We donated resources such as clothing, food, and school supplies, as well as provide financial support to help them meet up with their need and actualize their dreams.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner_one_img">
                        <img src="/01.avif" alt="img">
                        <div class="banner_element">
                            <img src="assets/img/banner/element-1.png" alt="icon" class="element_1 shape-1">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Top Area -->
    <section id="about_top_area" class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="about_top_boxed bg_one">
                        <div class="about_top_boxed_icon">
                            <img src="assets/img/icon/book.png" alt="img">
                        </div>
                        <div class="about_top_boxed_text">
                            <p>Donate for</p>
                            <h3>Children education</h3>
                            <a href="{{route('about')}}">More details...</a>
                        </div>
                        <div class="about_top_boxed_vector">
                            <img src="assets/img/icon/round.png" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="about_top_boxed bg_two">
                        <div class="about_top_boxed_icon">
                            <img src="assets/img/icon/paint.png" alt="img">
                        </div>
                        <div class="about_top_boxed_text">
                            <p>Donate for</p>
                            <h3>Clean mineral water</h3>
                            <a href="{{route('about')}}">More details...</a>
                        </div>
                        <div class="about_top_boxed_vector">
                            <img src="assets/img/icon/round.png" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="about_top_boxed bg_three">
                        <div class="about_top_boxed_icon">
                            <img src="assets/img/icon/heart.png" alt="img">
                        </div>
                        <div class="about_top_boxed_text">
                            <p>Donate for</p>
                            <h3>Surgery & treatment</h3>
                            <a href="{{route('about')}}">More details...</a>
                        </div>
                        <div class="about_top_boxed_vector">
                            <img src="assets/img/icon/round.png" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="about_top_boxed bg_four">
                        <div class="about_top_boxed_icon">
                            <img src="assets/img/icon/restaurant.png" alt="img">
                        </div>
                        <div class="about_top_boxed_text">
                            <p>Donate for</p>
                            <h3>Healthy & good food</h3>
                            <a href="{{route('about')}}">More details...</a>
                        </div>
                        <div class="about_top_boxed_vector">
                            <img src="assets/img/icon/round.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Area -->
    <section id="about_area" class="section_padding_bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="about_area_img">
                        <img src="03.jpg" alt="img">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="about_area_main_text">
                        <div class="about_area_heading">
                            <img src="assets/img/icon/about.png" alt="img">
                            <h3>Welcome to C4CWCSI</h3>
                        </div>
                        <div class="about_area_heading_two">
                            <h2>A world where <span class="color_big_heading">poverty</span> <br />
                                will not exists</h2>
                        </div>
                        <div class="about_area_para">
                            <h5>Center for Child welfare and Community Support Initiative Is a registered non-governmental organization in Nigeria, dedicated to rendering assistance to orphans, less privileged and abandoned children, under-privileged women in the society.</h5>
                            <p>We envision a world where the most vulnerable people will have the power to lift themselves out of poverty and to create vital, healthy and sustainable lives for their families and communities now and for the future.
                                We are carrying out philanthropic activities especially revolving around the poor people who are in need of good food, clothing and medicinal treatment.</p>
                        </div>
                        <div class="about_vedio_area">
                            <a href="{{route('about')}}" class="btn btn_theme btn_md">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection