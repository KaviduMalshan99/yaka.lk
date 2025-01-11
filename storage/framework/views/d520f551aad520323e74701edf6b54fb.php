<?php $__env->startSection('content'); ?>
    <section class="error-part">
        <div class="container">
            <div class="error">
                <h2><?php echo e(GoogleTranslate::trans('Oops! Empty Result', app()->getLocale())); ?></h2>
                <a href="<?php echo e(route('/')); ?>" class="btn btn-outline">
                    <i class="fas fa-home"></i>
                    <span><?php echo e(GoogleTranslate::trans('go to homepage', app()->getLocale())); ?></span>
                </a>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\yaka.lk\resources\views\web\empty.blade.php ENDPATH**/ ?>