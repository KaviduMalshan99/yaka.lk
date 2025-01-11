<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="row">
      <div class="col-md-12 pt-5 pb-5">
        <h2 class="text-center mt-5 mb-4"> <?php echo e(GoogleTranslate::trans('Ads Posting Allowances', app()->getLocale())); ?></h2>
        <p class="text-center mb-4"> <?php echo e(GoogleTranslate::trans('Free ad posting is available in every category. Contact us to become a Yaka.lk subscriber and own your stall today.', app()->getLocale())); ?></p>
        
        <ul class="posting-allowances-list">


          <?php
            $categories = \App\Models\Category::where('mainId', 0)->where('status', 1)->get();
          ?>

          <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="mb-2"><?php echo e($key+1); ?>. - <?php echo e(GoogleTranslate::trans($cat->name, app()->getLocale())); ?> - <?php echo e($cat->free_add_count); ?></li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\yaka.lk\resources\views\web\ads-posting-allowances.blade.php ENDPATH**/ ?>