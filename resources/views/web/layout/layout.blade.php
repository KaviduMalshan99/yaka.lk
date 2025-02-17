<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
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
    <title>Home - Classicads</title>

    <!--=====================================
                CSS LINK PART START
    =======================================-->
    <!-- FAVICON -->
    <link rel="icon" href="{{asset('web/images/favicon.png')}}">

    <!-- FONTS -->
    <link rel="stylesheet" href="{{asset('web/fonts/flaticon/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('web/fonts/font-awesome/fontawesome.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- VENDOR -->
    <link rel="stylesheet" href="{{asset('web/css/vendor/slick.min.css')}}">
    <link rel="stylesheet" href="{{asset('web/css/vendor/bootstrap.min.css')}}">

    <!-- CUSTOM -->
    <link rel="stylesheet" href="{{asset('web/css/custom/main.css?v='.time().rand())}}">
    <link rel="stylesheet" href="{{asset('web/css/custom/index.css?v='.time().rand())}}">
    <link rel="stylesheet" href="{{asset('web/css/custom/ad-details.css?v='.time().rand())}}">
    <link rel="stylesheet" href="{{asset('web/css/custom/ad-post.css?v='.time().rand())}}">
    <link rel="stylesheet" href="{{asset('web/css/custom/404.css?v='.time().rand())}}">


    <link rel="stylesheet" href="{{asset('web/css/banner.css?v='.time().rand())}}">
    <script src="{{asset('web/js/banner.js?v='.time().rand())}}"></script>



    
{{--    <script>window.$zoho=window.$zoho || {};$zoho.salesiq=$zoho.salesiq||{ready:function(){}}</script><script id="zsiqscript" src="https://salesiq.zohopublic.com/widget?wc=siqf8165bd0f57eb14e863292371939a6639390857fa494ba0693482d32e6b7cb4b" defer></script>--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!--=====================================
                CSS LINK PART END
    =======================================-->
</head>
<body>

<!--=====================================
            HEADER PART START
=======================================-->
@include('web.Blocks.nav')
<!--=====================================
            HEADER PART END
=======================================-->


<!--=====================================
            SIDEBAR PART START
=======================================-->
@include('web.Blocks.sidebar')
<!--=====================================
            SIDEBAR PART END
=======================================-->


<!--=====================================
            MOBILE-NAV PART START
=======================================-->
@include('web.Blocks.mobile-nav')
<!--=====================================
            MOBILE-NAV PART END
=======================================-->

@yield('content')

<!--=====================================
            FOOTER PART PART
=======================================-->
<footer class="footer-part" style="background-color:rgb(92, 2, 2); padding: 15px 0; text-align: left;" >
    <div class="container">
        <div class="row newsletter">
            <div class="col-lg-9" style="margin-top: 50px; text-align: left; margin-left: 30; padding:50px 20px 0px;">
                <div class="news-content" style="margin: 10px auto;">
                    <h2>{{GoogleTranslate::trans('Subscribe for Latest Offers', app()->getLocale())}}</h2>
                    <p>{{GoogleTranslate::trans('Don’t miss out on the best deals in Sri Lanka’s largest marketplace! Subscribe now to receive exclusive offers, promotions, and updates directly to your inbox. Be the first to know about discounts on a wide range of products and services, from electronics and fashion to home goods and vehicles. Our subscription ensures you stay connected with the latest opportunities and special events tailored just for you. Join our growing community of savvy shoppers and make the most of your shopping experience. Sign up today and start saving!', app()->getLocale())}}</p>
                </div>
            </div>

            <div class="col-lg-3" style="margin-top: 120px;">
                <div class="footer-info">
                    <a href="#"><img src="{{asset('Logo-re.png')}}" alt="logo" style="width: 300px; height: auto; object-fit: contain;"></a>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="footer-content">
                    <h3>{{GoogleTranslate::trans('Contact Us', app()->getLocale())}}</h3>
                    <ul class="footer-address">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <p>Colombo 10, Sri Lanka</p>
                        </li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <p>
                                <a href="mailto:Yaka.lk@outlook.com" style="text-decoration: none; color: inherit;">Yaka.lk@outlook.com</a> <span></span> 
                                <a href="mailto:Yakalksrilanka@gmail.com" style="text-decoration: none; color: inherit;">Yakalksrilanka@gmail.com</a>
                            </p>
                        </li>
                        <li>
                            <i class="fas fa-phone-alt"></i>
                            <p>
                                <a href="tel:+94705321321"style="text-decoration: none; color: inherit;" >070 5 321 321</a>
                            </p>
                        </li>
                    </ul>
                </div>
                
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="footer-content">
                    <h3>{{GoogleTranslate::trans('Quick Links', app()->getLocale())}}</h3>
                    <ul class="footer-widget">
                        <li><a href="{{route('about-us')}}">{{GoogleTranslate::trans('About Us', app()->getLocale())}}</a></li>
                        <li><a href="{{route('contact-us')}}">{{GoogleTranslate::trans('Contact Us', app()->getLocale())}}</a></li>
                        <li><a href="{{route('privacy-safety')}}">{{GoogleTranslate::trans('Privacy & Safety', app()->getLocale())}}</a></li>
                        {{-- <li><a href="{{route('careers')}}">Careers</a></li> --}}
                        <li><a href="{{route('tems-conditions')}}">{{GoogleTranslate::trans('Tems & Conditions', app()->getLocale())}}</a></li>
                        {{-- <li><a href="{{route('faq')}}">Faq</a></li> --}}
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="footer-content">
                    <h3>{{GoogleTranslate::trans('General', app()->getLocale())}}</h3>
                    <ul class="footer-widget">
                        <li><a href="{{route('tips')}}">{{GoogleTranslate::trans('Tips', app()->getLocale())}}</a></li>
                        <li><a href="{{route('boosting-ads')}}">{{GoogleTranslate::trans('Boosting ads', app()->getLocale())}}</a></li>
                        <li><a href="{{route('ads-posting-allowances')}}">{{GoogleTranslate::trans('Ad posting allowances', app()->getLocale())}}</a></li>
                        <li><a href="{{route('ad-posting-criteria')}}">{{GoogleTranslate::trans('Ad posting criteria', app()->getLocale())}}</a></li>
                        <li><a href="{{route('banner-ads')}}">{{GoogleTranslate::trans('Banner Ads', app()->getLocale())}}</a></li>
                    </ul>
                </div>
            </div>
            
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-card-content">
                    <div class="footer-payment" style=" display: flex; justify-content: space-between; ">
                        <ul class="footer-social">
                            <li><a href="https://www.facebook.com/profile.php?id=61565478456618" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://www.youtube.com/@Yakalk-g5d" target="_blank"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="https://www.instagram.com/yaka.lk6/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="https://wa.me/0705321321" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                    <div class="footer-app" style="display: flex;flex-wrap: wrap;">
                        <span style="width: 100%">{{GoogleTranslate::trans('Coming soon', app()->getLocale())}}</span>
                        <a href="#"><img src="{{asset('web/images/play-store.png')}}" alt="play-store"></a>
                        <a href="#"><img src="{{asset('web/images/app-store.png')}}" alt="app-store"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-end">
        <div class="container">
            <div class="footer-end-content" style="display: flex;justify-content: center;">
                <p>© Copyright 2024 - SATASME HOLDINGS (Pvt) Ltd , All Rights Reserved</p>

            </div>
        </div>
    </div>
</footer>
<!--=====================================
            FOOTER PART END
=======================================-->


<!--=====================================
          CURRENCY MODAL PART START
=======================================-->
<div class="modal fade" id="currency">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Choose a Currency</h4>
                <button class="fas fa-times" data-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <button class="modal-link active">United States Doller (USD) - $</button>
                <button class="modal-link">Euro (EUR) - €</button>
                <button class="modal-link">British Pound (GBP) - £</button>
                <button class="modal-link">Australian Dollar (AUD) - A$</button>
                <button class="modal-link">Canadian Dollar (CAD) - C$</button>
            </div>
        </div>
    </div>
</div>
<!--=====================================
          CURRENCY MODAL PART END
=======================================-->


<!--=====================================
          LANGUAGE MODAL PART END
=======================================-->
<div class="modal fade" id="language">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Choose a Language</h4>
                <button class="fas fa-times" data-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <button class="modal-link active">English</button>
                <button class="modal-link">bangali</button>
                <button class="modal-link">arabic</button>
                <button class="modal-link">germany</button>
                <button class="modal-link">spanish</button>
            </div>
        </div>
    </div>
</div>
<!--=====================================
           LANGUAGE MODAL PART END
=======================================-->


<!--=====================================
            JS LINK PART START
=======================================-->
<!-- VENDOR -->
<script src="{{asset('web/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('web/js/vendor/popper.min.js')}}"></script>
<script src="{{asset('web/js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('web/js/vendor/slick.min.js')}}"></script>

<!-- CUSTOM -->
<script src="{{asset('web/js/custom/slick.js')}}"></script>
<script src="{{asset('web/js/custom/main.js')}}"></script>

<script>
    function blinkBorder(className) {
    let elements = document.getElementsByClassName(className);

    // Convert HTMLCollection to array for easier iteration
    let elementsArray = Array.from(elements);

    elementsArray.forEach(function(element) {
        let intervalId = setInterval(function() {
            let currentColor = element.style.borderColor;
            let newColor = (currentColor === 'transparent' || currentColor === '') ? '#0ab968' : 'transparent';
            element.style.borderColor = newColor;
        }, 500); // Adjust blinking speed (500ms = 0.5 seconds)

        // Example: Stop blinking after 5 seconds
        setTimeout(function() {
            clearInterval(intervalId);
            element.style.borderColor = '#0ab968'; // Reset border color
        }, 50); // Blinking stops after 5 seconds (5000ms = 5 seconds)
    });
}
</script>

<script type="text/javascript">
    
    var url = "{{ route('changeLang') }}";
    
    $(".changeLang").change(function(){
        window.location.href = url + "?lang="+ $(this).val();
    });
    
</script>




<!--=====================================
            JS LINK PART END
=======================================-->
</body>
</html?>







