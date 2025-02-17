@extends('web.layout.layout')


@section('content')


    <!--=====================================
            BANNER PART START
=======================================-->
    @include('web.Blocks.user-banner')
    <!--=====================================
            BANNER PART END
=======================================-->
   <section class="inner-section" style="margin-bottom: 50px;">
        <div class="container" style="overflow: hidden; padding: 0;">
            <figure id="zss">
                @php
                    $banners = App\Models\Banners::where('type', 0)->inRandomOrder()->limit(4)->get();
                @endphp
                @if($banners->count() >= 4)
                    @foreach ($banners as $banner)
                        <div class="zss" >
                            <img style="width: 100%;" src="{{ asset('banners/' . $banner->img) }}" alt="">
                        </div>
                    @endforeach
                    <div class="zss" style="background: url('{{ asset('banners/' . $banners[0]->img) }}') no-repeat; background-size: cover;"></div>
                @endif
            </figure>
        </div>
    </section>

    <!--=====================================
                SUGGEST PART START
    =======================================-->
    <section class="suggest-part" style="padding-top: 0 ;margin-top: 100px;">
        <div class="container" style="display: flex;flex-wrap: wrap;justify-content: space-evenly;">
                @foreach($categories as $category)
                    <a href="{{route('ads',[$category->url])}}" class="suggest-card" style="width: 165px !important ;margin-bottom: 20px">
                        <img src="{{asset('images/Category/'.$category->image)}}" alt="car">
                        <h6>{{ GoogleTranslate::trans($category->name, app()->getLocale()) }}</h6>
                        @php
                            $adsCount = \App\Models\Ads::where('cat_id', $category->id )->where('status',1)->count();
                        @endphp
                        <p>({{ $adsCount }} {{ GoogleTranslate::trans('ads', app()->getLocale()) }})</p>
                    </a>
                @endforeach
        </div>
    </section>

    <section class="intro-part" style="margin-top: 100px;padding: 55px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                </div>
            </div>
        </div>
    </section>


    {{-- <section class="suggest-part">
        <div class="container">
            <div class="suggest-slider slider-arrow">
                @foreach($categories as $category)
                    <a href="{{route('ads',[$category->url])}}" class="suggest-card">
                        <img src="{{asset('images/Category/'.$category->image)}}" alt="car">
                        <h6>{{ $category->name }}</h6>
                        @php
                            $adsCount = \App\Models\Ads::where('cat_id', $category->id )->where('status',1)->count();
                        @endphp
                        <p>({{ $adsCount }} ads)</p>
                    </a>
                @endforeach
            </div>
        </div>
    </section> --}}
    <!--=====================================
                SUGGEST PART END
    =======================================-->

       @if(count($superAds)>4)
    <section class="section feature-part" style="padding-top: 0;margin-top: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-lg-7">
                    <div>
                        <div class="feature-card-slider slider-arrow">
                            @foreach($superAds as $ads)
                                @include('web.components.cards.slideAdsCards')
                            @endforeach
                        </div>
                        <div class="feature-thumb-slider">
                            @foreach($superAds as $ads)
                                <div class="feature-thumb" style="height: 160px;background: url({{asset('images/Ads/'.$ads->mainImage)}});background-size: cover;background-position: center">
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <p class="mt-4">The Super Ads section on Sri Lanka’s largest classified website yaka.lk offers premium visibility for your listings, ensuring maximum exposure and faster results. Whether you’re buying, selling, or promoting services, Super Ads help your posts stand out with priority placement and enhanced features, connecting you to a wider audience efficiently.</p>
                </div>
                <div class="col-md-5 col-lg-5">
                    <div class="section-side-heading">
                        <h2>{{ GoogleTranslate::trans('Find your needs in our best ', app()->getLocale()) }}<span>{{ GoogleTranslate::trans('Super Ads', app()->getLocale()) }}</span></h2>
{{--                        <p>{{ GoogleTranslate::trans('Lorem ipsum dolor sit amet consectetur adipisicing elit aspernatur illum vel sunt libero--}}
{{--                            voluptatum repudiandae veniam maxime tenetur fugiat eaque alias nobis doloremque culpa--}}
{{--                            nam.', app()->getLocale()) }}</p>--}}
{{--                        <p>{{ GoogleTranslate::trans('Lorem ipsum dolor sit amet consectetur adipisicing elit aspernatur illum vel sunt libero--}}
{{--                            voluptatum repudiandae veniam maxime tenetur fugiat eaque alias nobis doloremque culpa--}}
{{--                            nam.', app()->getLocale()) }}</p>--}}
{{--                        <p>{{ GoogleTranslate::trans('Lorem ipsum dolor sit amet consectetur adipisicing elit aspernatur illum vel sunt libero--}}
{{--                            voluptatum repudiandae veniam maxime tenetur fugiat eaque alias nobis doloremque culpa--}}
{{--                            nam.', app()->getLocale()) }}</p>--}}

                        <div class="col-md-6 col-lg-12" style="overflow: hidden;padding: 0px;">
                            <figure id="zss">
                                @php
                                    // Fetch 4 random banners with type 0 (Leaderboard)
                                    $banners = App\Models\Banners::where('type', 1)->inRandomOrder()->limit(4)->get();
                                @endphp

                                @if($banners->count() >= 4)
                                    @foreach ($banners as $banner)
                                        <div class="zss" >
                                            <img style="width: 100%;" src="{{ asset('banners/' . $banner->img) }}" alt="">
                                        </div>
                                    @endforeach
                                    <div class="zss" style="height: 789px;background: url('{{ asset('banners/' . $banners[0]->img) }}') no-repeat; background-size: cover;"></div>
                                @endif
                            </figure>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
   @endif
    <!--=====================================
                FEATURE PART START
    =======================================-->
   @if(count($topAds)>5)
        <section class="section feature-part" style="padding-top: 0;margin-top: 100px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-lg-5">
                        <div class="section-side-heading">
                            <h2>{{ GoogleTranslate::trans('Find your needs in our best ', app()->getLocale()) }}<span>{{ GoogleTranslate::trans('Top Ads', app()->getLocale()) }}</span></h2>
{{--                            <p>{{ GoogleTranslate::trans('Elevate your visibility with our Top add Listings category, designed for sellers who want to stand out in the bustling marketplace of Sri Lanka. This exclusive section showcases your ads that receive enhanced exposure, ensuring your products and services reach a wider audience. Ideal for businesses and individual sellers alike, Premium Listings offer priority placement, eye-catching features, and the opportunity to attract more potential buyers. Whether you’re promoting real estate, vehicles, electronics, or unique local goods, investing in a premium listing will give you the competitive edge needed to succeed. Join us today and make your offerings shine!', app()->getLocale()) }}</p>--}}
                            <div class="col-md-6 col-lg-12" style="overflow: hidden;padding: 0px;">
                                <figure id="zss">
                                    @php
                                        // Fetch 4 random banners with type 0 (Leaderboard)
                                        $banners = App\Models\Banners::where('type', 1)->inRandomOrder()->limit(4)->get();
                                    @endphp

                                    @if($banners->count() >= 4)
                                        @foreach ($banners as $banner)
                                            <div class="zss" >
                                                <img style="width: 100%;" src="{{ asset('banners/' . $banner->img) }}" alt="">
                                            </div>
                                        @endforeach
                                        <div class="zss" style="height: 789px;background: url('{{ asset('banners/' . $banners[0]->img) }}') no-repeat; background-size: cover;"></div>
                                    @endif
                                </figure>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-7">
                        <div>
                            <div class="feature-card-slider slider-arrow">
                                @foreach($topAds as $ads)
                                    @include('web.components.cards.slideAdsCards')
                                @endforeach
                            </div>
                            <div class="feature-thumb-slider">
                                @foreach($topAds as $ads)
                                    <div class="feature-thumb" style="height: 160px;background: url({{asset('images/Ads/'.$ads->mainImage)}});background-size: cover;background-position: center">
    {{--                                    <img src="{{asset('/images/Ads/'.$ads->mainImage)}}" alt="feature">--}}
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <p class="mt-4">The Top Ads section on Sri Lanka’s largest classified website yaka.lk guarantees your listings premium placement at the top of search results. With higher visibility and priority ranking, Top Ads ensure your products or services reach more potential buyers quickly and effectively.</p>
                    </div>
                </div>
            </div>
        </section>
   @endif
    <!--=====================================
                FEATURE PART END
    =======================================-->


    <!--=====================================
                RECOMEND PART START
    =======================================-->
    @if(count($recommendAds)>4)
    <section class="section recomend-part" style="padding-top: 0;margin-top: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-center-heading">
                        <h2><span>{{ GoogleTranslate::trans('Ads', app()->getLocale()) }}</span></h2>
                        <p style="
                        width: 100%;
                    ">{{ GoogleTranslate::trans('Lorem ipsum dolor sit amet consectetur adipisicing elit aspernatur illum vel sunt libero
                            voluptatum repudiandae veniam maxime tenetur.', app()->getLocale()) }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="recomend-slider slider-arrow">
                        @foreach($recommendAds as $ads)
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                @include('web.components.cards.adCards')
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-50">
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    <!--=====================================
                RECOMEND PART START
    =======================================-->


    <!--=====================================
                TREND PART START
    =======================================-->
    @if(count($popular) >5)
    <section class="section trend-part" style="padding-top: 0;margin-top: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-center-heading">
                        <h2>{{ GoogleTranslate::trans('Popular Trending ', app()->getLocale()) }}<span>{{ GoogleTranslate::trans('Ads', app()->getLocale()) }}</span></h2>
                        <p style="
                        width: 100%;
                    ">{{ GoogleTranslate::trans('Lorem ipsum dolor sit amet consectetur adipisicing elit aspernatur illum vel sunt libero
                            voluptatum repudiandae veniam maxime tenetur.', app()->getLocale()) }}</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">

                    @foreach($popular as $ads)
                        <div class="col-md-11 col-lg-8 col-xl-6">
                            @include('web.components.cards.adCards')
                        </div>
                    @endforeach
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-20">
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    <!--=====================================
                TREND PART END
    =======================================-->




    <!--=====================================
                CITY PART START
    =======================================-->
    {{-- <section class="section city-part" style="padding-top: 0;margin-top: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-center-heading">
                        <h2>Top Districts by <span>Ads</span></h2>
                        <p style="
                        width: 100%;
                    ">Welcome to our Districts section, where you can easily find local listings tailored to your specific area in Sri Lanka! Whether you’re searching for real estate, vehicles, job opportunities, or unique items, our platform allows you to browse ads by district, ensuring you discover exactly what you need in your community. Explore a wide range of categories, connect with local sellers, and make informed decisions based on your preferences. With our user-friendly interface, finding the right products and services in your district has never been easier but you will be thanks to yaka.lk to make it real.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @php
                    $style = [3,4,5,5,4,3,];
                @endphp
                @foreach($districts as $key => $district)
                    <div class="col-sm-6 col-md-6   col-lg-{{$style[$key]}}">
                        <a href="#"  class="city-card" style="background: url({{asset('web/destinations/'.$district->url.'.jpg')}}) no-repeat center; background-size: cover">
                            <div class="city-content">
                                @php
                                    $adcount = \App\Models\Ads::where('location',$district->id )->count();
                                @endphp
                                <h4>{{$district->name_en}}</h4>
                                <p>({{$adcount}}) ads</p>
                            </div>
                        </a>
                    </div>
                @endforeach
        </div>
    </section> --}}
    <!--=====================================
                CITY PART END
    =======================================-->


    <!--=====================================
                CATEGORY PART START
    =======================================-->
    <section class="section category-part" style="padding-top: 0;margin-top: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                </div>
            </div>
            <div class="row">
                @foreach($topcategories as $topcategory)
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="category-card">
                            

                            <ul class="category-list">
                                @foreach($topcategory->subcat as $key => $subcategory)
                                    @php
                                        $subadcount = \App\Models\Ads::where('sub_cat_id',$subcategory->id )->where('status',1)->count();
                                    @endphp
                                    @if($key <= 4)
                                        <li><a href="{{route('ads',[$subcategory->url])}}"><h6>{{ GoogleTranslate::trans($subcategory->name, app()->getLocale())}}</h6>
                                        <p>({{$subadcount}})</p></a></li>
                                    @endif
                                @endforeach
                            </ul>

                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-20">
{{--                        <a href="category-list.html" class="btn btn-inline">--}}
{{--                            <i class="fas fa-eye"></i>--}}
{{--                            <span>view all categories</span>--}}
{{--                        </a>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                CATEGORY PART END
    =======================================-->


    <!--=====================================
                INTRO PART START
    =======================================-->

    <!--=====================================
                INTRO PART END
    =======================================-->


    <!--=====================================
                 PRICE PART START
    =======================================-->
    {{-- <section class="price-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-center-heading">
                        <h2>Best Reliable Pricing Plans</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit aspernatur illum vel sunt libero
                            voluptatum repudiandae veniam maxime tenetur.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($package as $pkg)
                    <div class="col-md-6 col-lg-3">
                    <div class="price-card" style="position: relative">
                        <div class="price-head">
                            <img style="height: 40px;top: 16px;position: absolute;right: 15px;" src="{{asset('web/images/'.$pkg->url.'.png')}}" alt="">
                            <h4>{{$pkg->name}}</h4>
                        </div>
                        <ul class="price-list">
                            <li>
                                <i class="fas fa-plus"></i>
                                <p>1 Regular Ad for 7 days</p>
                            </li>
                            <li>
                                <i class="fas fa-times"></i>
                                <p>No Credit card required</p>
                            </li>

                        </ul>
                        @if(!isset(Session::get('user')['id']))
                            <div class="price-btn">
                                <a href="{{route('user.dashboard.ad-post.main')}}" class="btn btn-inline">
                                    <i class="fas fa-sign-in-alt"></i>
                                    <span>Register Now</span>
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section> --}}

    <section class="inner-section" style="margin: 100px 0 50px;">
        <div class="container" style="overflow: hidden; padding: 0;">
            <figure id="zss">
                @php
                    // Fetch 4 random banners with type 0 (Leaderboard)
                    $banners = App\Models\Banners::where('type', 0)->inRandomOrder()->limit(4)->get();
                @endphp
                @if($banners->count() >= 4)
                    @foreach ($banners as $banner)
                        <div class="zss" >
                            <img style="width: 100%;" src="{{ asset('banners/' . $banner->img) }}" alt="">
                        </div>
                    @endforeach
                    <div class="zss" style="background: url('{{ asset('banners/' . $banners[0]->img) }}') no-repeat; background-size: cover;"></div>
                @endif
            </figure>
        </div>
    </section>

@endsection
