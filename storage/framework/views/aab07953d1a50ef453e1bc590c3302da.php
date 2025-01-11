<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="row">
      <div class="col-md-12 pt-5 pb-5">
        <h2 class="text-center mt-5 mb-4"><?php echo e(GoogleTranslate::trans('Ads Posting Criteria', app()->getLocale())); ?></h2>
        <ul class="posting-criteria-list text-center">
          <li class="mb-2"><?php echo e(GoogleTranslate::trans('1. Use correct quality pictures regarding the item.', app()->getLocale())); ?></li>
          <li class="mb-2"><?php echo e(GoogleTranslate::trans('2. Strictly only legal items.', app()->getLocale())); ?></li>
          <li class="mb-2"><?php echo e(GoogleTranslate::trans('3. Photos should match the item or service.', app()->getLocale())); ?></li>
          <li class="mb-2"><?php echo e(GoogleTranslate::trans('4. Do not post alcohol, tobacco, or related drugs.', app()->getLocale())); ?></li>
          <li class="mb-2"><?php echo e(GoogleTranslate::trans('5. Use correct contact numbers.', app()->getLocale())); ?></li>
          <li class="mb-2"><?php echo e(GoogleTranslate::trans('6. Do not post prohibited items.', app()->getLocale())); ?></li>
          <li class="mb-2"><?php echo e(GoogleTranslate::trans('7. Do not post several items in a single ad.', app()->getLocale())); ?></li>
        </ul>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\yaka.lk\resources\views\web\ad-posting-criteria.blade.php ENDPATH**/ ?>