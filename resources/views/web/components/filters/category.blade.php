<div class="col-md-6 col-lg-12">
    <div class="product-widget">
        <h6 class="product-widget-title">{{GoogleTranslate::trans('categories', app()->getLocale())}}</h6>
        <ul class="product-widget-list product-widget-scroll">
            @foreach($categories as $category)
                <li class="product-widget-item">
                    <a href="{{route('ads',[$category->url])}}">
                        <span class="product-widget-text">{{GoogleTranslate::trans($category->name, app()->getLocale())}}</span>
                        @php
                            $adsCount = \App\Models\Ads::where('cat_id', $category->id )->where('status', 1 )->count();
                        @endphp
                        <span class="product-widget-number">({{$adsCount}})</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>

