@extends('user.master')
@section('content')

@if (session()->has('message'))
<div class = "alert alert-success">
    <button type = "button" class = "close" data-dismiss = "alert">x</button>
    {{ session()->get('message') }}
</div>
@endif

<div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="banner-section">
        <div class="container text-center wow fadeInUp">
            <nav aria-label="Breadcrumb">
                <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Doctors</li>
                </ol>
            </nav>
            <h1 class="font-weight-normal">Our Doctors</h1>
        </div> <!-- .container -->
    </div> <!-- .banner-section -->
</div> <!-- .page-banner -->

<div class="page-section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <div class="row">
                    @foreach($doctor as $doc)
                    <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
                        <div class="card-doctor">
                            <div class="header">
                                <img src="../assets/img/doctors/doctor_1.jpg" alt="{{ $doc->name }}">
                                <div class="meta">
                                    <a href="#"><span class="mai-call"></span></a>
                                    <a href="#"><span class="mai-logo-whatsapp"></span></a>
                                </div>
                            </div>
                            <div class="body">
                                <p class="text-xl mb-0">{{ $doc->name }}</p>
                                <span class="text-sm text-grey">{{ $doc->speciality }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>


            </div>
        </div>
    </div> <!-- .container -->
</div> <!-- .page-section -->

<div class="page-section">
    <div class="container">
        <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

<<<<<<< HEAD
        <form class="main-form">
            <div class="row mt-5 ">
                <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                    <input type="text" class="form-control" placeholder="Full name">
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                    <input type="text" class="form-control" placeholder="Email address..">
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                    <input type="date" class="form-control">
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                    <select name="departement" id="departement" class="custom-select">
                        <option value="general">General Health</option>
                        <option value="cardiology">Cardiology</option>
                        <option value="dental">Dental</option>
                        <option value="neurology">Neurology</option>
                        <option value="orthopaedics">Orthopaedics</option>
                    </select>
                </div>
                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <input type="text" class="form-control" placeholder="Number..">
                </div>
                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <textarea name="message" id="message" class="form-control" rows="6"
                        placeholder="Enter message.."></textarea>
                </div>
            </div>
=======

    <form class="main-form" action="{{url('appointment')}}" method="POST">

      @csrf

      <div class="row mt-5 ">
        <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
          <input type="text" name="name" class="form-control" placeholder="Full name">
        </div>
        <div class="col-12 col-sm-6 py-2 wow fadeInRight">
          <input type="text" name="email" class="form-control" placeholder="Email address..">
        </div>
        <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
          <input type="date" name="date" class="form-control">
        </div>
        <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
          <select name="doctor" id="departement" class="custom-select">
            <option>Select doctor</option>

                        @foreach($doctor as $doctors)

                        <option value="{{$doctors->name}}">{{$doctors->name}} **Speciality**  {{$doctors->speciality}}</option>
                        
                        @endforeach
          </select>
        </div>
        <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
          <input type="text" name="number" class="form-control" placeholder="Number..">
        </div>
        <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
          <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
        </div>
      </div>
>>>>>>> d0fd0e35113c8a2c7e1ebe65ea5d3677b6dee8d5

            <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
        </form>
    </div> <!-- .container -->
</div> <!-- .page-section -->


<div class="page-section banner-home bg-image" style="background-image: url(../assets/img/banner-pattern.svg);">
    <div class="container py-5 py-lg-0">
        <div class="row align-items-center">
            <div class="col-lg-4 wow zoomIn">
                <div class="img-banner d-none d-lg-block">
                    <img src="../assets/img/mobile_app.png" alt="">
                </div>
            </div>
            <div class="col-lg-8 wow fadeInRight">
                <h1 class="font-weight-normal mb-3">Get easy access of all features using One Health Application</h1>
                <a href="#"><img src="../assets/img/google_play.svg" alt=""></a>
                <a href="#" class="ml-2"><img src="../assets/img/app_store.svg" alt=""></a>
            </div>
        </div>
    </div>
</div> <!-- .banner-home -->

@endsection