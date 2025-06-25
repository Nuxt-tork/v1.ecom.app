@extends('frontend.partials.master')

@section('content')

    <!-- Breadcrumb Section Begin -->
        <x-breadcrumb :title="'Register'" />
    <!-- Breadcrumb Section End -->

    <!-- Contact Form Begin -->
    <div class="contact-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__form__title">
                        <h2>Register</h2>
                    </div>
                </div>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0" style="list-style: none; padding-left: 0;">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

             <form action="{{ route('user.register') }}" method="post" id="userRegisterForm" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <input type="text" id="name" name="name" placeholder="Full Name (Required)" required>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <input type="text" id="address" name="address" placeholder="House Address">
                    </div>
                 
                    <div class="col-lg-6 col-md-6">
                        <input type="number" id="phone" name="phone" placeholder="Phone | Ex: 01********* (Required)" required>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <input type="email" id="email_or_phone" name="email_or_phone" placeholder="Email (Required)" required>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <input type="password" id="password" name="password" placeholder="Password (Required)" required> 
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <input type="password" id="confirm-password" name="password_confirmation" placeholder="Re-Enter Password (Required)" required>
                    </div>
                    <div class="col-lg-12 text-center">
                        <button type="submit" class="site-btn">REGISTER</button>
                    </div>
                </div>
            </form>

                <div class="col-lg-12 text-center mt-3">
                    <p>Already have an account? <a href="{{ route('frontend.login') }}">Login here</a></p>
                </div>

                <div class="col-lg-12 text-center mt-3">
                    <a href="#" class="btn btn-danger">
                        <img src="https://developers.google.com/identity/images/g-logo.png" alt="Google Logo" style="width:20px; height:20px; margin-right:8px;">
                        Register with Google
                    </a>
                </div>


        </div>
    </div>
    <!-- Contact Form End -->


@endsection

