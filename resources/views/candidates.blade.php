@extends('layouts.app')

@section('pagename')
Welcome to ElevenLux
@endsection

@section('content')
<div class="container">

    <div class="section-title" data-aos="fade-up">
        <h2>Candidates</h2>
    </div>

    <div class="row content">
        <div class="col" data-aos="fade-up" data-aos-delay="150">
            <p class="px-2">
                We know how important finding the right job is, being happy and being recognized are key
                especially in the current world we live in. So we have created a unique experience where we
                give our candidates a weekly update on potential jobs and we wont stop working until you
                find your perfect role.
            </p>
        </div>
    </div>

    <div class="row content justify-content-center">
        <div class="col-sm-2 px-5" data-aos="fade-up" data-aos-delay="150">
            <img src="{{ asset('img/Hand.png') }}" alt="" height="100%" width="100%">
        </div>
    </div>

    <div class="row content mt-3">
        <div class="col" data-aos="fade-up" data-aos-delay="150">
            <p class="px-2">
                Please leave your details here – we’ll be in touch.
            </p>
        </div>
    </div>

    <div class="row content justify-content-center">
        <div class="col-sm-2 px-5" data-aos="fade-up" data-aos-delay="150">
        </div>
    </div>
    <hr>
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <input type="phone" class="form-control" name="phone" id="phone" placeholder="Your Phone number" data-rule="phone" data-msg="Please enter a valid Phone number" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Resume/CV in pdf format</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                        <div class="mb-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">
                                Your details have been sent. Thank you!
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->

</div>
@endsection