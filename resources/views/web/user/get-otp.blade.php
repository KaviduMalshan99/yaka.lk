<!DOCTYPE html>
<html lang="en">
<head>
    <!--=====================================
                META-TAG PART START
    =======================================-->
    <!-- REQUIRE META -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- AUTHOR META -->
    <meta name="author" content="Mironcoder">
    <meta name="email" content="mironcoder@gmail.com">
    <meta name="profile" content="https://themeforest.net/user/mironcoder">

    <!-- TEMPLATE META -->
    <meta name="name" content="Classicads">
    <meta name="type" content="Classified Advertising">
    <meta name="title" content="Classicads - Classified Ads HTML Template">
    <meta name="keywords" content="classicads, classified, ads, classified ads, listing, business, directory, jobs, marketing, portal, advertising, local, posting, ad listing, ad posting,">
    <!--=====================================
                META-TAG PART END
    =======================================-->

    <!-- FOR WEBPAGE TITLE -->
    <title>Classicads - User Form</title>

    <!--=====================================
                CSS LINK PART START
    =======================================-->
    <!-- FOR PAGE TITLE ICON -->
    <link rel="icon" href="{{asset('web/images/favicon.png')}}">

    <!-- FOR FONTAWESOME -->
    <link rel="stylesheet" href="{{asset('web/fonts/font-awesome/fontawesome.css')}}">

    <!-- FOR BOOTSTRAP -->
    <link rel="stylesheet" href="{{asset('web/css/vendor/bootstrap.min.css')}}">

    <!-- FOR COMMON STYLE -->
    <link rel="stylesheet" href="{{asset('web/css/custom/main.css')}}">

    <!-- FOR USER FORM PAGE STYLE -->
    <link rel="stylesheet" href="{{asset('web/css/custom/user-form.css')}}">
    <!--=====================================
                CSS LINK PART END
    =======================================-->
</head>
<body>
<!--=====================================
            USER-FORM PART START
=======================================-->

<section class="user-form-part">
    <div class="user-form-banner">
        <div class="user-form-content">
            <a href="#"><img src="{{asset('Logo-re.png')}}" alt="logo"></a>
            <h1>Advertise your assets <span>Buy what you want</span></h1>
            <p>Biggest online marketplace in Sri Lanka</p> 
        </div>
    </div>

    <div class="user-form-category">
        <div class="user-form-header">
            <a href="#"><img src="{{asset('yaka-payment.png')}}" alt="logo"></a>
            <a href="/"><i class="fas fa-arrow-left"></i></a>
        </div>
        <div class="user-form-category-btn">
            <ul class="nav nav-tabs">
                <li><a href="#login-tab" class="nav-link active" data-toggle="tab">Forgot Password</a></li>
            </ul>
        </div>

        <div class="tab-pane active" id="login-tab">
            <div class="user-form-title">
                <h2>Confirmation</h2>
            </div>

            <form method="POST" action="{{ route('comfirmOtp') }}">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <input type="text" class="form-control" name="otp"  value="{{old('otp')}}" placeholder="Enter OTP">
                            @if ($errors->has('otp'))
                                <span class="text-danger">{{ $errors->first('otp') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" name="password"  id="pass" placeholder="New Password">
                            <small class="form-alert">Password must be 8 characters</small>
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-inline">
                                <i class="fas fa-otp"></i>
                                <span>Confirmation</span>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!--=====================================
            USER-FORM PART END
=======================================-->


<!--=====================================
            JS LINK PART START
=======================================-->
<!-- FOR BOOTSTRAP -->
<script src="{{asset('web/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('web/js/vendor/popper.min.js')}}"></script>
<script src="{{asset('web/js/vendor/bootstrap.min.js')}}"></script>

<!-- FOR INTERACTION -->
<script src="{{asset('web/js/custom/main.js')}}"></script>
<!--=====================================
            JS LINK PART END
=======================================-->
</body>
</html>





