<form class="product-widget-form" action="<?php echo e(route('ads.location',[ $nowSearchSubCategoryUrl==0 ? $category->url : $nowSearchSubCategoryUrl, $nowSearchLocation ?? ''])); ?>" id="filter" method="post">
    <?php echo csrf_field(); ?>
    <?php echo method_field('POST'); ?>
    <div class="col-md-6 col-lg-12">
        <div class="product-widget">
            <h6 class="product-widget-title"><?php echo e(GoogleTranslate::trans('Salary', app()->getLocale())); ?></h6>
            <div class="product-widget-group">
                <input type="number" value="<?php echo e(session('filter_minsalary_per_month') ?? 0); ?>" name="minsalary_per_month" placeholder="min - 00">
                <input type="number" value="<?php echo e(session('filter_maxsalary_per_month') ?? 0); ?>" name="maxsalary_per_month" placeholder="max - 1B">
            </div>
            <button type="submit" class="product-widget-btn">
                <i class="fas fa-search"></i>
                <span>Add Filter</span>
            </button>
        </div>
    </div>

    <div class="col-md-6 col-lg-12">
        <div class="product-widget">
            <h6 class="product-widget-title"><?php echo e(GoogleTranslate::trans('Job Type', app()->getLocale())); ?></h6>
            <ul class="product-widget-list product-widget-scroll">
                <?php
                    $retrievedArray = Session::get('filter_job_type') ?? [];
                ?>
                <?php $__currentLoopData = config('constants.JOBTYPE'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jobtype): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="product-widget-item">
                        <div class="product-widget-checkbox">
                            <input  name="job_type[]" <?php if(in_array($jobtype, $retrievedArray)): ?> checked <?php endif; ?> value="<?php echo e($jobtype); ?>" type="checkbox" id="<?php echo e($jobtype); ?>">
                        </div>
                        <label class="product-widget-label" for="<?php echo e($jobtype); ?>">
                            <span class="product-widget-type" style="color: #0D0A0A"><?php echo e($jobtype); ?></span>
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
            <h6 class="product-widget-title"><?php echo e(GoogleTranslate::trans('Education', app()->getLocale())); ?></h6>
            <ul class="product-widget-list product-widget-scroll">
                <?php
                    $retrievedArray = Session::get('filter_education') ?? [];
                ?>
                <?php $__currentLoopData = config('constants.EDUCATION'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ed): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="product-widget-item">
                        <div class="product-widget-checkbox">
                            <input  name="education[]" <?php if(in_array($ed, $retrievedArray)): ?> checked <?php endif; ?> value="<?php echo e($ed); ?>" type="checkbox" id="<?php echo e($ed); ?>">
                        </div>
                        <label class="product-widget-label" for="<?php echo e($ed); ?>">
                            <span class="product-widget-type" style="color: #0D0A0A"><?php echo e($ed); ?></span>
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
</form>
<script>
    function submitForm() {
        document.getElementById("filter").submit();
    }
</script>
<?php /**PATH C:\xampp\htdocs\yaka.lk\resources\views\web\components\filters\jobs\jobs.blade.php ENDPATH**/ ?>