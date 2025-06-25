@extends('frontend.partials.master')

@section('content')

    <!-- Breadcrumb Section Begin -->
        <x-breadcrumb :title="'Login'" />
    <!-- Breadcrumb Section End -->

    <!-- Contact Form Begin -->
    <div class="contact-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__form__title">
                        <h2>Login</h2>
                    </div>
                </div>
            </div>

            <form action="" method="POST" id="userLoginForm" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    
                    <div class="col-lg-12">
                        <input type="text" id="email_or_phone" name="email_or_phone" placeholder="Email Or Phone">
                    </div>
                    <div class="col-lg-12">
                        <input type="password" id="login-password" name="password" placeholder="Password">
                    </div>
                    <div class="col-lg-12 text-center">
                        <button type="submit" class="site-btn">LOGIN</button>
                    </div>
                    
                </div>
            </form>

            <div class="col-lg-12 text-center mt-3">
                <a href="#" class="btn btn-danger">
                    <img src="https://developers.google.com/identity/images/g-logo.png" alt="Google Logo" style="width:20px; height:20px; margin-right:8px;">
                    Login with Google
                </a>
            </div>
            
        </div>
        <div class="col-lg-12 text-center mt-3">
            <p>Don  't have an account? <a href="{{ route('frontend.register') }}">Register here</a></p>
        </div>
    </div>
    <!-- Contact Form End -->

@endsection

