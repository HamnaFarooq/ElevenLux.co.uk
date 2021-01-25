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
                    <form action=" {{ url('/send_cv') }} " method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" required placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" name="position" class="form-control" id="position" required placeholder="For Position" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" required placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="number" id="phone" required placeholder="Your Phone number" data-rule="minlen:9" data-msg="Please enter at least 9 digit number"  />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Resume/CV in pdf format</label>
                            <input type="file" class="form-control-file" name="cv" id="exampleFormControlFile1" required accept="application/pdf">
                            <small class="text-muted"> No other format will be accepted.</small>
                        </div>
                        <!-- <div class="form-group">
                            <label for="file">Upload a file</label>
                            <input name="file" type="file" name="cv" class="form-control">
                        </div> -->
                        @if($errors->any())
                        @foreach ($errors->all() as $error)
                        <div class="text-danger">
                            {{$error}}
                        </div>
                        @endforeach
                        @endif
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