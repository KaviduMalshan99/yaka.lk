<?php $__env->startSection('content'); ?>

    <!--=====================================
                  SINGLE BANNER PART START
        =======================================-->
    <section class="inner-section single-banner" style="margin-bottom: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-content">
                        <h2><?php echo e($nowSearchSubCategoryUrl==0 ? GoogleTranslate::trans($category->name, app()->getLocale()) : GoogleTranslate::trans(preg_replace('/-/', ' ', $nowSearchSubCategoryUrl), app()->getLocale())); ?></h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(route('/')); ?>"><?php echo e(GoogleTranslate::trans('Home', app()->getLocale())); ?></a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo e($nowSearchSubCategoryUrl==0 ?  GoogleTranslate::trans($category->name, app()->getLocale()): GoogleTranslate::trans(preg_replace('/-/', ' ', $nowSearchSubCategoryUrl), app()->getLocale())); ?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="inner-section" style="margin-bottom: 50px;">
        <div class="container" style="overflow: hidden; padding: 0;">
            <figure id="zss">
                <?php
                    $banners = App\Models\Banners::where('type', 0)->inRandomOrder()->limit(4)->get();
                ?>
                <?php if($banners->count() >= 4): ?>
                    <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="zss" >
                            <img style="width: 100%;" src="<?php echo e(asset('banners/' . $banner->img)); ?>" alt="">
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class="zss" style="background: url('<?php echo e(asset('banners/' . $banners[0]->img)); ?>') no-repeat; background-size: cover;"></div>
                <?php endif; ?>
            </figure>
        </div>
    </section>

    <!--=====================================
              SINGLE BANNER PART END
    =======================================-->


    <!--=====================================
                AD LIST PART START
    =======================================-->
    <section class="inner-section ad-list-part">
        <div class="container">
            <div class="row content-reverse">
                <div class="col-lg-4 col-xl-3">
                    <div class="row">
                        <?php if($nowSearchSubCategoryUrl != 0): ?>
                            <?php echo $__env->make('web.components.filters.location', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php if($adsurl == 'jobs'): ?>
                                <?php echo $__env->make('web.components.filters.'.$adsurl.'.'.$adsurl, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php else: ?>
                            <?php echo $__env->make('web.components.filters.'.$adsurl.'.'.$nowSearchSubCategoryUrl, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endif; ?>
                        <?php else: ?>
                            <?php echo $__env->make('web.components.filters.category', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php echo $__env->make('web.components.filters.sub-category', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endif; ?>

                        <div class="col-md-6 col-lg-12" style="overflow: hidden;padding: 0px;">
                            <figure id="zss">
                                <?php
                                    // Fetch 4 random banners with type 0 (Leaderboard)
                                    $banners = App\Models\Banners::where('type', 1)->inRandomOrder()->limit(4)->get();
                                ?>

                                <?php if($banners->count() >= 4): ?>
                                    <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="zss" >
                                            <img style="width: 100%;" src="<?php echo e(asset('banners/' . $banner->img)); ?>" alt="">
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <div class="zss" style="height: 500px;background: url('<?php echo e(asset('banners/' . $banners[0]->img)); ?>') no-repeat; background-size: cover;"></div>
                                <?php endif; ?>
                            </figure>

                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-9">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header-filter">
                                <div class="filter-show">
                                    <span style="text-transform: capitalize"><i class="fas fa-map-marker-alt" style="margin-right: 10px;"></i>  <?php if($nowSearchLocation == 0): ?> <?php echo e(GoogleTranslate::trans('All Locations', app()->getLocale())); ?> <?php else: ?> <?php echo e(GoogleTranslate::trans(preg_replace('/-/', ' ', $nowSearchLocation), app()->getLocale())); ?><?php endif; ?></span>
                                </div>
                                <div class="filter-short">
                                    <span style="text-transform: capitalize"><i class="fas fa-tags" style="margin-right: 10px;"></i> <?php echo e($nowSearchSubCategoryUrl==0 ? GoogleTranslate::trans($category->name, app()->getLocale()) : GoogleTranslate::trans(preg_replace('/-/', ' ', $nowSearchSubCategoryUrl), app()->getLocale())); ?></span>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <?php if(count($Urgent)>0): ?>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="ad-feature-slider slider-arrow">
                                    <?php $__currentLoopData = $Urgent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ads): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php echo $__env->make('web.components.cards.slideAdsCards', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="row">
                        <?php $__currentLoopData = $topAdsData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ads): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                <?php echo $__env->make('web.components.cards.adCards', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <div class="row">
                        <?php $__currentLoopData = $adsData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ads): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                <?php echo $__env->make('web.components.cards.adCards', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <div class="row">
                        <?php echo e($adsData->links('pagination::bootstrap-5')); ?>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                AD LIST PART END
    =======================================-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\yaka.lk\resources\views\web\ads.blade.php ENDPATH**/ ?>