@extends('layouts.app')

@section('pagename')
Welcome to ElevenLux
@endsection

@section('content')
<div class="container pb-5">

    <div class="section-title" data-aos="fade-up">
        <h2>Vacancies</h2>
    </div>

    <div class="row">
    
    @if(1)

    <div class="col-md-6 p-4">
        <div class="job-item" data-aos="fade-left" data-aos-delay="150">
            <div class="job-instructor-profile">
                <div class="job-instructor-title text-center">
                    <div class="job-tag mb-2">
                        <span class="tag-normal">full time</span>
                        <span class="tag-urgent">urgent</span>
                    </div>
                    <h5>Senior Graphics Designer</h5>
                    <div class="job-meta mt-1">
                        <span><i class="far fa-map-marker-alt"></i> Position</span>
                        <span><i class="fal fa-usd-circle"></i> 250 - 495</span>
                    </div>
                    <div class="mt-3">
                        <section id="hero" class="p-0 m-0" style="height: min-content;">
                        <a href="{{ url('/candidates') }}"> <button class="btn-get-started scrollto">Apply</button></a>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 p-4">
        <div class="job-item" data-aos="fade-right" data-aos-delay="150">
            <div class="job-instructor-profile">
                <div class="job-instructor-title text-center">
                    <div class="job-tag mb-2">
                        <span class="tag-normal">full time</span>
                        <span class="tag-urgent">urgent</span>
                    </div>
                    <h5>Senior Graphics Designer</h5>
                    <div class="job-meta mt-1">
                        <span><i class="far fa-map-marker-alt"></i> 205 Main Road, New
                            York</span>
                        <span><i class="fal fa-usd-circle"></i> 250 - 495</span>
                    </div>
                    <div class="mt-3">
                        <!-- <button class="btn rounded vacancy-btn"> 
                            <a href="{{ url('/candidates') }}">Apply</a> 
                        </button> -->
                        <section id="hero" class="p-0 m-0" style="height: min-content;">
                        <a href="{{ url('/candidates') }}" class="btn-get-started">Apply</a>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @else

        <div class="col-md-6" data-aos="fade-left" data-aos-delay="150">
            <img src="{{ asset('img/empty.png') }}" alt="" width="100%">
        </div>
        <div class="col-md-6 d-flex justify-content-center align-items-center" height="100%" data-aos="fade-right" data-aos-delay="150">
            <p class="text-justify">
                We are sorry, There are no vacancies in our database right now. Please check again later.
            </p>
        </div>
    @endif
    
    </div>
    <!-- job-area-start -->
    <!-- <div class="job-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-9 col-md-12">
                    <div class="job-item mb-30">
                        <div class="row align-items-center">
                            <div class="col-xl-8">
                                <div class="job-wrapper">
                                    <div class="banck-icon">
                                        <i class="flaticon-dashboard"></i>
                                    </div>
                                    <div class="job-instructor-profile">
                                        <div class="job-instructor-img f-left">
                                            <img src="assets/img/job/j-06.png" alt="">
                                        </div>
                                        <div class="job-instructor-title">
                                            <div class="job-tag mb-20">
                                                <span class="tag-normal">full time</span>
                                                <span class="tag-urgent">urgent</span>
                                            </div>
                                            <h5><a href="candidates.html">Senior Graphics Designer</a></h5>
                                            <div class="job-meta mt-15">
                                                <span><i class="far fa-map-marker-alt"></i> 205 Main Road, New
                                                    York</span>
                                                <span><i class="fal fa-usd-circle"></i> 250 - 495</span>
                                            </div>
                                            <div class="job-btn mt-30 d-xl-none">
                                                <a class="b-btn btn-grey" href="candidates.html">Apply <i class="far fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 d-none d-xl-block">
                                <div class="job-btn text-right">
                                    <a class="b-btn btn-grey" href="candidates.html">Apply <i class="far fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="job-item mb-30">
                        <div class="row align-items-center">
                            <div class="col-xl-8">
                                <div class="job-wrapper">
                                    <div class="banck-icon">
                                        <i class="flaticon-dashboard"></i>
                                    </div>
                                    <div class="job-instructor-profile">
                                        <div class="job-instructor-img f-left">
                                            <img src="assets/img/job/j-01.png" alt="">
                                        </div>
                                        <div class="job-instructor-title">
                                            <div class="job-tag mb-20">
                                                <span class="tag-normal">full time</span>
                                            </div>
                                            <h5><a href="candidates.html">Marketing Officer (6 Month)</a></h5>
                                            <div class="job-meta mt-15">
                                                <span><i class="far fa-map-marker-alt"></i> 205 Main Road, New
                                                    York</span>
                                                <span><i class="fal fa-usd-circle"></i> 250 - 495</span>
                                            </div>
                                            <div class="job-btn mt-30 d-xl-none">
                                                <a class="b-btn btn-grey" href="candidates.html">Apply <i class="far fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 d-none d-xl-block">
                                <div class="job-btn text-right">
                                    <a class="b-btn btn-grey" href="candidates.html">Apply <i class="far fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="job-item mb-30">
                        <div class="row align-items-center">
                            <div class="col-xl-8">
                                <div class="job-wrapper">
                                    <div class="banck-icon">
                                        <i class="flaticon-dashboard"></i>
                                    </div>
                                    <div class="job-instructor-profile">
                                        <div class="job-instructor-img f-left">
                                            <img src="assets/img/job/j-02.png" alt="">
                                        </div>
                                        <div class="job-instructor-title">
                                            <div class="job-tag mb-20">
                                                <span class="tag-normal">full time</span>
                                            </div>
                                            <h5><a href="candidates.html">Senior Graphics Designer</a></h5>
                                            <div class="job-meta mt-15">
                                                <span><i class="far fa-map-marker-alt"></i> 205 Main Road, New
                                                    York</span>
                                                <span><i class="fal fa-usd-circle"></i> 250 - 495</span>
                                            </div>
                                            <div class="job-btn mt-30 d-xl-none">
                                                <a class="b-btn btn-grey" href="candidates.html">Apply <i class="far fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 d-none d-xl-block">
                                <div class="job-btn text-right">
                                    <a class="b-btn btn-grey" href="candidates.html">Apply <i class="far fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- job-area-end -->
</div>
@endsection