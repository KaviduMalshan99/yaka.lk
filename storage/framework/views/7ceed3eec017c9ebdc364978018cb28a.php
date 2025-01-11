<?php $__env->startSection('content'); ?>

    <!--=====================================
                  SINGLE BANNER PART START
        =======================================-->
    <section class="inner-section single-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-content">
                        <h2><?php echo e(GoogleTranslate::trans('Ads', app()->getLocale())); ?></h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(route('/')); ?>"><?php echo e(GoogleTranslate::trans('Home', app()->getLocale())); ?></a></li>
                            <li class="breadcrumb-item" style="color: white"><?php echo e(GoogleTranslate::trans('Search', app()->getLocale())); ?></li>
                        </ol>
                    </div>
                </div>
            </div>
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
                <div class="col-lg-12 ">
                    <div class="row">
                        <?php $__currentLoopData = $adsdata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ads): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                                <?php echo $__env->make('web.components.cards.adCards', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <div class="row">
                        
                    </div>
                </div>
            </div>
    </section>
    <!--=====================================
                AD LIST PART END
    =======================================-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\yaka.lk\resources\views\web\search.blade.php ENDPATH**/ ?>