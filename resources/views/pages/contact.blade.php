@extends('layouts.base')


@section('content')<!-- Banner Area -->
<section id="common_banner_area"  style="background-image: url('{{asset('04.jpeg')}}');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="commn_banner_page">
                    <h2><span class="color_big_heading">Contact</span></h2>
                    <ul class="breadcrumb_wrapper">
                        <li class="breadcrumb_item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb_item"><img src="assets/img/icon/arrow.png" alt="img"></li>
                        <li class="breadcrumb_item active">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Area -->
<section id="contact_arae_main" class="section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-12 col-sm-12 col-12">
                <div class="section_heading">
                    <h3>Contact with us</h3>
                    <h2>Get in
                        <span class="color_big_heading">touch</span>with us &
                        stay updates
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="contact_area_left">
                    <div class="contact_left_item">
                        <div class="contact_left_icon">
                            <img src="assets/img/icon/map_color.png" alt="icon">
                        </div>
                        <div class="contact_left_text">
                            <h3>Address:</h3>
                            <p>No. 139 Murtala Muhammed Way, Adjacent Wema Bank Plc,<br> Kano.</p>
                        </div>
                    </div>
                    <div class="contact_left_item">
                        <div class="contact_left_icon">
                            <img src="assets/img/icon/email-color.png" alt="icon">
                        </div>
                        <div class="contact_left_text">
                            <h3>Email:</h3>
                            <a href="mailto:support@domain.com">c4c4csinitiative@gmail.com</a>
                        </div>
                    </div>
                    <div class="contact_left_item">
                        <div class="contact_left_icon">
                            <img src="assets/img/icon/phon-color.png" alt="icon">
                        </div>
                        <div class="contact_left_text">
                            <h3>Phone number:</h3>
                            <a href="tel:+2348092855953">+2348092855953</a>
                            <a href="tel:+2348099995750">+2348099995750</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact_form_Wrapper">
                    <img src="{{asset("02.jpeg")}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection