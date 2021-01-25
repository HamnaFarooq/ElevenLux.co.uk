@extends('layouts.app')

@section('pagename')
Welcome to ElevenLux
@endsection

@section('content')
<div class="container">
    <div class="section-title" data-aos="fade-up">
        <h2>Services</h2>
    </div>

    <div class="row content">
        <div class="col" data-aos="fade-up" data-aos-delay="150">
            <p class="px-2">
                With over 10 years of sales and recruitment experience, we understand the importance of cost-saving when
                it comes to hiring, this is why we have created two unique products to support the ever-changing world
                of business.
            </p>
        </div>
    </div>
</div>

<!-- ======= Pricing Section ======= -->
<section id="pricing" class="pricing">
    <div class="container">
        <div class="row">
            <div class="col-md-5 box card justify-content-center px-5 mx-5">
                <div class="h-100" data-aos="zoom-in-left" data-aos-delay="200">
                    <h3>TheElevenLux</h3>
                    <p class="text-left">
                        Consultancy service that has a fixed fee to fit around a
                        recruitment budget and can be custom-made to help you keep on
                        top of your costs.
                    </p>
                    <br>
                    <ul class="text-left">
                        <li>
                            <i class="icofont-tick-mark" style="color: #e5545e"></i>Consultative Approach
                        </li>
                        <li>
                            <i class="icofont-tick-mark" style="color: #e5545e"></i>Access to ElevenLux candidate
                            database
                        </li>
                        <li>
                            <i class="icofont-tick-mark" style="color: #e5545e"></i>Fixed fee of 12%
                        </li>
                        <li>
                            <i class="icofont-tick-mark" style="color: #e5545e"></i>Account Manager
                        </li>
                        <li>
                            <i class="icofont-tick-mark" style="color: #e5545e"></i>24/7
                            support
                        </li>
                        <li>
                            <i class="icofont-tick-mark" style="color: #e5545e"></i>Weekly updates and calls
                        </li>
                        <li>
                            <i class="icofont-tick-mark" style="color: #e5545e"></i>Site
                            visit to understand what’s important to you
                        </li>
                    </ul>
                    <br>
                    <div class="btn-wrap">
                        <a href="https://booking.appointy.com/ElevenLux" target="_blank"> <button class="btn-buy p-3">
                                Let's meet! </button> </a>
                    </div>
                </div>
            </div>

            <div class="col-md-5 box card px-5 ml-3">
                <div class="h-100" data-aos="zoom-in-left" data-aos-delay="200">
                    <h3>PayRecruit</h3>
                    <p class="text-left">
                        Pay As You Go recruitment service which was designed to help
                        small to medium businesses. With a one-off upfront payment you
                        will be able to find the right talent for the right cost.
                    </p>
                    <ul class="text-left">
                        <li>
                            <i class="icofont-tick-mark" style="color: #e5545e"></i> On-demand service with no additional costs
                        </li>
                        <li>
                            <i class="icofont-tick-mark" style="color: #e5545e"></i> Starting from as little as £750
                        </li>
                        <li>
                            <i class="icofont-tick-mark" style="color: #e5545e"></i> Dedicated Account Manager
                        </li>
                        <li>
                            <i class="icofont-tick-mark" style="color: #e5545e"></i> Weekly updates and calls
                        </li>
                        <li>
                            <i class="icofont-tick-mark" style="color: #e5545e"></i> Money-back guarantee
                        </li>
                        <li>
                            <i class="icofont-tick-mark" style="color: #e5545e"></i> 24/7 support
                        </li>

                        <!-- <li>
                            <i class="icofont-tick-mark" style="color: #e5545e"></i>£750 per placement
                            <ul class="text-left pl-4">
                                <li> <span style="color: #e5545e; font-size:200%;"> » </span> Salaries from £25,000 and
                                    under</li>
                            </ul>
                        </li>

                        <li>
                            <i class="icofont-tick-mark" style="color: #e5545e"></i>£1500 per placement
                            <ul class="text-left pl-4">
                                <li> <span style="color: #e5545e; font-size:200%;"> » </span> Salaries from £25,000 to
                                    £35,000</li>
                            </ul>
                        </li>

                        <li>
                            <i class="icofont-tick-mark" style="color: #e5545e"></i>£2250 per placement
                            <ul class="text-left pl-4">
                                <li> <span style="color: #e5545e; font-size:200%;"> » </span> Salaries from £35,000+
                                </li>
                            </ul>
                        </li>
                        <li>
                            <i class="icofont-tick-mark" style="color: #e5545e"></i>Dedicated Account Manager
                        </li>
                        <li>
                            <i class="icofont-tick-mark" style="color: #e5545e"></i>Weekly reports
                        </li> -->
                    </ul>
                    <br>
                    <div class="btn-wrap">
                        <a href="https://booking.appointy.com/ElevenLux" target="_blank"> <button class="btn-buy p-3">
                                Let's meet! </button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container pb-5">
    <div class="row content">
        <div class="col" data-aos="fade-up" data-aos-delay="150">
            <p class="px-2 text-justify">
                Speak to a member of the team by emailing either
                <b>TheElevenLux@elevenlux.co.uk</b> or
                <b>PayRecruit@elevenlux.co.uk</b> and a member of the
                ElevenLux team will be in touch.
            </p>
        </div>
    </div>
</div>
<!-- End Pricing Section -->
@endsection