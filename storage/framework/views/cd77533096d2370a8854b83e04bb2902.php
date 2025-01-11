<form class="product-widget-form" action="<?php echo e(route('ads.location',[ $nowSearchSubCategoryUrl==0 ? $category->url : $nowSearchSubCategoryUrl, $nowSearchLocation ?? ''])); ?>" id="filter" method="post">
    <?php echo csrf_field(); ?>
    <?php echo method_field('POST'); ?>

    <?php echo $__env->make('web.components.filters.common', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="col-md-6 col-lg-12">
        <div class="product-widget">
            <h6 class="product-widget-title"><?php echo e(GoogleTranslate::trans('Brands', app()->getLocale())); ?></h6>
            <ul class="product-widget-list product-widget-scroll">
                <?php
                    $retrievedArray = Session::get('filter_brand') ?? [];
                ?>
                <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="product-widget-item">
                        <div class="product-widget-checkbox">
                            <input  name="brand[]" <?php if(in_array($brand->id, $retrievedArray)): ?> checked <?php endif; ?> value="<?php echo e($brand->id); ?>" type="checkbox" id="<?php echo e($brand->url); ?>">
                        </div>
                        <label class="product-widget-label" for="<?php echo e($brand->url); ?>">
                            <span class="product-widget-type" style="color: #0D0A0A"><?php echo e($brand->name); ?></span>
                            <span class="product-widget-number"></span>
                        </label>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <button type="submit" class="product-widget-btn">
                <i class="fas fa-search"></i>
                <span>Add Filter </span>
            </button>
        </div>
    </div>

    <div class="col-md-6 col-lg-12">
        <div class="product-widget">
            <h6 class="product-widget-title"><?php echo e(GoogleTranslate::trans('Year of Manufacture', app()->getLocale())); ?></h6>
            <div class="product-widget-group">
                <input type="number" value="<?php echo e(session('filter_manufacture_year_min') ?? 0); ?>" name="manufacture_year_min" placeholder="min">
                <input type="number" value="<?php echo e(session('filter_manufacture_year_max') ?? 0); ?>" name="manufacture_year_max" placeholder="max">
            </div>
            <button type="submit" class="product-widget-btn">
                <i class="fas fa-search"></i>
                <span>Add Filter</span>
            </button>
        </div>
    </div>

    <div class="col-md-6 col-lg-12">
        <div class="product-widget">
            <h6 class="product-widget-title"><?php echo e(GoogleTranslate::trans('Transmission', app()->getLocale())); ?></h6>
            <ul class="product-widget-list">
                <?php
                    $filter_transmission = Session::get('filter_transmission') ?? [];
                ?>
                <?php $__currentLoopData = config('constants.TRANSMISSION'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $transmission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="product-widget-item">
                        <div class="product-widget-checkbox">
                            <input  name="transmission[]" <?php if(in_array($key, $filter_transmission)): ?> checked <?php endif; ?>  value="<?php echo e($key); ?>" type="checkbox" id="new">
                        </div>
                        <label class="product-widget-label" for="check1">
                            <span class="product-widget-type" style="color: #0D0A0A"><?php echo e($transmission); ?> </span>
                            <span class="product-widget-number"></span>
                        </label>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <button type="submit" class="product-widget-btn">
                <i class="fas fa-search"></i>
                <span>Add Filter </span>
            </button>
        </div>
    </div>

    <div class="col-md-6 col-lg-12">
        <div class="product-widget">
            <h6 class="product-widget-title"><?php echo e(GoogleTranslate::trans('Fuel type', app()->getLocale())); ?></h6>
            <ul class="product-widget-list">
                <?php
                    $filter_fuel_Type = Session::get('filter_fuel_Type') ?? [];
                ?>
                <?php $__currentLoopData = config('constants.FUEL_TYPE'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $fuel_Type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="product-widget-item">
                        <div class="product-widget-checkbox">
                            <input  name="fuel_Type[]" <?php if(in_array($key, $filter_fuel_Type)): ?> checked <?php endif; ?>  value="<?php echo e($key); ?>" type="checkbox" id="new">
                        </div>
                        <label class="product-widget-label" for="check1">
                            <span class="product-widget-type" style="color: #0D0A0A"><?php echo e($fuel_Type); ?> </span>
                            <span class="product-widget-number"></span>
                        </label>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <button type="submit" class="product-widget-btn">
                <i class="fas fa-search"></i>
                <span>Add Filter </span>
            </button>
        </div>
    </div>

    <div class="col-md-6 col-lg-12">
        <div class="product-widget">
            <h6 class="product-widget-title"><?php echo e(GoogleTranslate::trans('Body type', app()->getLocale())); ?></h6>
            <div>
                <ul class="product-widget-list">
                    <?php
                        $filter_body_type = Session::get('filter_body_type') ?? [];
                    ?>
                    <?php $__currentLoopData = config('constants.BODY_TYPE'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $body_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="product-widget-item">
                            <div class="product-widget-checkbox">
                                <input  name="body_type[]" <?php if(in_array($key, $filter_body_type)): ?> checked <?php endif; ?>  value="<?php echo e($key); ?>" type="checkbox" id="new">
                            </div>
                            <label class="product-widget-label" for="check1">
                                <span class="product-widget-type" style="color: #0D0A0A"><?php echo e($body_type); ?> </span>
                                <span class="product-widget-number"></span>
                            </label>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <button type="submit" class="product-widget-btn">
                    <i class="fas fa-search"></i>
                    <span>Add Filter </span>
                </button>
            </div>
        </div>
    </div>

</form>
<script>
    function submitForm() {
        document.getElementById("filter").submit();
    }
</script>
<?php /**PATH C:\xampp\htdocs\yaka.lk\resources\views\web\components\filters\vehicles\cars.blade.php ENDPATH**/ ?>