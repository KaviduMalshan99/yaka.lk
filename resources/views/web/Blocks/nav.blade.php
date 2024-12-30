<div style="background-color: #FF0000 !important; padding: 6px 12px 6px 12px !important;" class="header-content">

    <div style="color: #ffffff !important;" class="header-form row">
        <div class="col-4"><i style="margin-right:15px !important;" class="fa-solid fa-phone  "></i> <span>{{ GoogleTranslate::trans('Contact',app()->getLocale())}} : 070 5 321 321</span></div>
        <div class="col-4"><i style="margin-right:15px !important;"  class="fa-solid fa-envelope "></i> <span>{{ GoogleTranslate::trans('Email', app()->getLocale())}} : Info@yaka.lk</span></div>
        <div class="col-4"><i style="margin-right:15px !important;"  class="fa-solid fa-location-dot "></i> <span>{{ GoogleTranslate::trans('Loaction', app()->getLocale())}} : Colombo 10, Sri Lanka</span>
        </div>
    </div>
    <select class="form-select changeLang" style="width: 200px; padding: 10px; border-radius: 5px; border: 1px solid #ccc; font-size: 14px;">
        <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
        <option value="si" {{ session()->get('locale') == 'si' ? 'selected' : '' }}>Sinhala</option>
        <option value="ta" {{ session()->get('locale') == 'ta' ? 'selected' : '' }}>Tamil</option>
    </select>

    <div style="color: #ffffff !important;" class="header-right">

        <span>
            <a href="https://www.facebook.com/profile.php?id=61565478456618" target="_blank">
                <i style="font-size: 20px  !important; color: black !important;" class="fab fa-facebook p-2"></i>
            </a>
        </span>
        <span>
            <a href="https://www.instagram.com/yaka.lk6/" target="_blank">
                <i style="font-size: 20px  !important; color: black !important;" class="fab fa-instagram p-2"></i>
            </a>
        </span>
   {{-- <span>
            <a href="" target="_blank">
                <i style="font-size: 20px  !important; color: black !important;" class="fab fa-tiktok p-2"></i>
            </a>
        </span> --}}
        <span>
            <a href="https://www.youtube.com/@Yakalk-g5d" target="_blank">
                <i style="font-size: 20px  !important; color: black !important;" class="fab fa-youtube p-2"></i>
            </a>
        </span>
        <!-- Added Instagram Icon -->

        <!-- Added TikTok Icon -->

    </div>

</div>

<header class="header-part">
    <div class="container">
        <div class="header-content">
            <div class="header-left">
                <a style="margin: 0px 45px 0 0;" href="{{route('/')}}" class="header-logo">
                    <img src="{{asset('Logo-re.png')}}" alt="logo">
                </a>


                <button type="button" class="header-widget search-btn">
                    <i class="fas fa-search"></i>
                </button>
            </div>

            <form class="header-form" method="get" action="{{route('search')}}">
                <div class="header-search">
                    <button type="submit" title="Search Submit "><i class="fas fa-search"></i></button>
                    <input required type="text" value="{{ $_GET['search'] ?? "" }}" placeholder="{{ GoogleTranslate::trans('Search,  Category Name , sub category Name , district  you needs...', app()->getLocale())}}" name="search">
                </div>
            </form>

            <div class="header-right">
                @if(isset(Session::get('user')['id']))
                    <a href="{{route('user.dashboard')}}" class="btn btn-inline post-btn">
                        <i class="fas fa-user"></i>
                        <span>{{Session::get('user')['first_name']. ' '.Session::get('user')['last_name']}}</span>
                    </a>
                @else
                    <a href="{{route('login')}}" class="btn btn-inline post-btn">
                        <i class="fas fa-user"></i>
                        <span>{{GoogleTranslate::trans('Login / Register', app()->getLocale())}}</span>
                    </a>
                @endif
                <a href="{{route('user.dashboard.ad-post.main')}}" class="btn btn-inline post-btn">
                    <i class="fas fa-plus-circle"></i>
                    <span>{{GoogleTranslate::trans('post your ad', app()->getLocale())}}</span>
                </a>
            </div>
        </div>
    </div>

{{--        <div style="background-color: #ffffff !important; padding: 6px 12px 6px 12px !important; border-top:solid rgb(211, 208, 208) 1px !important; border-bottom:solid rgb(211, 208, 208) 1px !important;" class="header-content">--}}
{{--            <div class="header-left ">--}}
{{--                <ul class="nav">--}}
{{--                    <li class="nav-item">--}}
{{--                        <a style="color: #5DA300" class="nav-link" href="http://127.0.0.1:8000"><p>Home</p></a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a style="color: #000000" class="nav-link" href="#"><p>About</p></a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a style="color: #000000" class="nav-link disabled"><p>Contact</p></a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}

</header>

