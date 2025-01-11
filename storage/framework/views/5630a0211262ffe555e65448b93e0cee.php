<div class="col-md-6 col-lg-12">
    <div class="product-widget">
        <h6 class="product-widget-title"><?php echo e(GoogleTranslate::trans('Location', app()->getLocale())); ?></h6>
        <ul class="product-widget-list product-widget-scroll">
            <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="product-widget-item">
                    <a href="<?php echo e(route('ads.location',[ $nowSearchSubCategoryUrl==0 ? $category->url : $nowSearchSubCategoryUrl, $location->url])); ?>">
                        <span class="product-widget-text"><?php echo e(GoogleTranslate::trans($location->name_en, app()->getLocale())); ?></span>
                        <?php
                            $locationId = $nowSearchSubCategoryUrl != 0 ? (\App\Models\Category::where('url', $nowSearchSubCategoryUrl)->where('status', 1 )->select('id')->firstOrFail())->id : (\App\Models\Category::where('url', $category->url)->where('status', 1 )->select('id')->firstOrFail())->id;

                            $adsCount = \App\Models\Ads::where('location', $location->id)->where('status', 1 );

                            if ($nowSearchSubCategoryUrl) {
                                $adsCount->where('sub_cat_id', $locationId);
                            } else {
                                $adsCount->where('cat_id', $category->id);
                            }
                            $adsCount = $adsCount->count();
                        ?>

                        <span class="product-widget-number">(<?php echo e($adsCount); ?>)</span>
                    </a>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\yaka.lk\resources\views\web\components\filters\location.blade.php ENDPATH**/ ?>