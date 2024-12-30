<div class="adpost-card">
    <div class="adpost-title">
        <h3>{{ GoogleTranslate::trans('leisure,kids items & sports - children items', app()->getLocale())}}</h3>
    </div>
   
   
    <br>
    @include('web.components.AdsForms.common-fechas')
   <br><br>
    <div class="row mt-4">
    <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <ul class="form-check-list" >
                    <li>
                        <label class="form-label">{{ GoogleTranslate::trans('Product Condition', app()->getLocale())}}</label>
                    </li>
                   <div style="display: flex;">
                   
                   
                    @foreach(config('constants.CONDITION') as $key=>$condition)
                    <li style="margin-right: 140px;">
                    <div style="display: flex;">
                        <input type="radio" 
                        {{ $condition == 'New' ? 'checked' : '' }}
                        value="{{$condition}}"
                        {{ $condition == 'Reconditioned' ? 'hidden' : '' }}
                        style="margin-right: 30px;"
                        class="form-check" 
                        name='condition' 
                        id="use-check{{ $key }}" >
                        <label 
                        {{ $condition == 'Reconditioned' ? 'hidden' : '' }}
                        for="use-check{{ $key }}"  value="{{$condition}}"class="form-check-text">{{$condition}}</label>
                        </div>
                        </li>
                    @endforeach
                  
                   
                   
                    </div> 
                </ul>
            </div>
        </div>
        
    </div>
    <br><br>
    <div class="row">
    <div class="col-lg-12">
            <div class="form-group">
                <label class="form-label">Item Type</label>
                <select name="type"onchange="selecterror('type')"class="form-control custom-select">
                    <option selected value="0">Item Type</option>
                    @foreach($types as $type)
                        <option 
                        @if(old('type', 'default_value') == $type->id) selected @endif
                        value="{{$type->id}}">{{$type->name}}</option>
                    @endforeach
                   
                </select>
                @if ($errors->has('type'))
                    <div class="alert alert-danger" id="type">
                        {{ $errors->first('type') }}
                    </div>
                @endif
            </div>
        </div>
    </div>

       <br>
    

    <div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <label class="form-label">Gender</label>
            <select onchange="selecterror('gender')"name="gender"class="form-control custom-select">
                 
            @foreach(config('constants.GENDER') as $key=>$gender)
                <option 
               
                value="{{ $key }}">{{$gender}}</option>
               
            @endforeach
            </select>
            @if ($errors->has('gender'))
                    <div class="alert alert-danger" id="gender">
                        {{ $errors->first('gender') }}
                    </div>
                @endif
        </div>
    </div></div>


    
</div>