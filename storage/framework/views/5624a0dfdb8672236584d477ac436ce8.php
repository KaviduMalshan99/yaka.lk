<form class="product-widget-form" action="<?php echo e(route('ads.location',[ $nowSearchSubCategoryUrl==0 ? $category->url : $nowSearchSubCategoryUrl, $nowSearchLocation ?? ''])); ?>" id="filter" method="post">
    <?php echo csrf_field(); ?>
    <?php echo method_field('POST'); ?>

    <?php echo $__env->make('web.components.filters.common', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>




    <div class="col-md-6 col-lg-12">
        <div class="product-widget">
            <h6 class="product-widget-title"> <?php echo e(GoogleTranslate::trans('service type', app()->getLocale())); ?></h6>
            <div>
                <ul class="product-widget-list">
                    <?php
                        $filter_service_type = Session::get('filter_service_type') ?? [];
                    ?>
                    <?php $__currentLoopData = $typs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $service_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="product-widget-item">
                            <div class="product-widget-checkbox">
                                <input  name="service_type[]" <?php if(in_array($service_type->id, $filter_service_type)): ?> checked <?php endif; ?>  value="<?php echo e($service_type->id); ?>" type="checkbox" id="new">
                            </div>
                            <label class="product-widget-label" for="check1">
                                <span class="product-widget-type" style="color: #0D0A0A"><?php echo e($service_type->name); ?> </span>
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
<?php /**PATH C:\xampp\htdocs\yaka.lk\resources\views\web\components\filters\vehicles\auto-services.blade.php ENDPATH**/ ?>