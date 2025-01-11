<form class="product-widget-form" action="<?php echo e(route('ads.location',[ $nowSearchSubCategoryUrl==0 ? $category->url : $nowSearchSubCategoryUrl, $nowSearchLocation ?? ''])); ?>" id="filter" method="post">
    <?php echo csrf_field(); ?>
    <?php echo method_field('POST'); ?>
    <?php echo $__env->make('web.components.filters.common', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <div class="col-md-6 col-lg-12">
        <div class="product-widget">
            <h6 class="product-widget-title"><?php echo e(GoogleTranslate::trans('apartment Size</h6>
            <div class="product-widget-group">
                <input type="number" value="{{session('filter_size_sf_min') ?? 0); ?>" name="size_sf_min" placeholder="min - 00">
                <input type="number" value="<?php echo e(session('filter_size_sf_max') ?? 0); ?>" name="size_sf_max" placeholder="max - 1B">
            </div>
            <button type="submit" class="product-widget-btn">
                <i class="fas fa-search"></i>
                <span>Add Filter</span>
            </button>
        </div>
    </div>

    <div class="col-md-6 col-lg-12">
        <div class="product-widget">
            <h6 class="product-widget-title">Bathrooms </h6>
            <ul class="product-widget-list product-widget-scroll">
                <?php
                    $retrievedArray = Session::get('filter_bathrooms') ?? [];
                ?>
                <?php $__currentLoopData = config('constants.BEDROOMS'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $bathrooms): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="product-widget-item">
                        <div class="product-widget-checkbox">
                            <input <?php if(in_array($key, $retrievedArray)): ?> checked <?php endif; ?>  name="bathrooms[]" value="<?php echo e($key); ?>" type="checkbox" id="">
                        </div>
                        <label class="product-widget-label" for="{">
                            <span class="product-widget-type" style="color: #0D0A0A"><?php echo e($bathrooms); ?></span>
                            <span class="product-widget-number"></span>
                        </label>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <button type="submit" class="product-widget-btn">
                <i class="fas fa-search"></i>
                <span>Add Filter</span>
            </button>
        </div>
    </div>

    <div class="col-md-6 col-lg-12">
        <div class="product-widget">
            <h6 class="product-widget-title"><?php echo e(GoogleTranslate::trans('Bedrooms', app()->getLocale())); ?></h6>
            <ul class="product-widget-list product-widget-scroll">
                <?php
                    $retrievedArray = Session::get('filter_rooms') ?? [];
                ?>
                <?php $__currentLoopData = config('constants.BEDROOMS'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $rooms): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="product-widget-item">
                        <div class="product-widget-checkbox">
                            <input <?php if(in_array($key, $retrievedArray)): ?> checked <?php endif; ?>  name="rooms[]" value="<?php echo e($key); ?>" type="checkbox" id="">
                        </div>
                        <label class="product-widget-label" for="{">
                            <span class="product-widget-type" style="color: #0D0A0A"><?php echo e($rooms); ?></span>
                            <span class="product-widget-number"></span>
                        </label>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <button type="submit" class="product-widget-btn">
                <i class="fas fa-search"></i>
                <span>Add Filter</span>
            </button>
        </div>
    </div>



</form>
<script>
    function submitForm() {
        document.getElementById("filter").submit();
    }
</script>
 ?><?php /**PATH C:\xampp\htdocs\yaka.lk\resources\views\web\components\filters\property\apartments-for-sale.blade.php ENDPATH**/ ?>