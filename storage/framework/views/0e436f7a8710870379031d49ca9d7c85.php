<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="row">
      <div class="col-md-12 mt-5">
        <h1 class="text-center"><?php echo e(GoogleTranslate::trans('Contact Us', app()->getLocale())); ?></h1>
        <div class="contact-content text-center mb-5">
          <p><?php echo e(GoogleTranslate::trans('If you have any questions or concerns regarding these policies, please feel free to contact us at:', app()->getLocale())); ?></p>
          
          <ul class="list-unstyled">
            <li><strong><?php echo e(GoogleTranslate::trans('Email:', app()->getLocale())); ?>:</strong></li>
            <li>Info@yaka.lk</li>
            <li>Yaka.lk@outlook.com</li>
            <li>Yakalksrilanka@gmail.com</li>
          </ul>

          <ul class="list-unstyled">
            <li><strong><?php echo e(GoogleTranslate::trans('Phone:', app()->getLocale())); ?>:</strong> 070 5 321 321</li>
          </ul>
        </div>

        <!-- Contact Form -->
        <form action="<?php echo e(route('contact.submit')); ?>" method="post" style="background: #ffffff;padding: 22px;margin-bottom: 46px;">
          <?php echo csrf_field(); ?>
          <div class="form-group">
            <label for="name"><?php echo e(GoogleTranslate::trans('Name', app()->getLocale())); ?>:</label>
            <input type="text" id="name" name="name" class="form-control" required>
          </div>

          <div class="form-group">
            <label for="email"><?php echo e(GoogleTranslate::trans('Email', app()->getLocale())); ?>:</label>
            <input type="email" id="email" name="email" class="form-control" required>
          </div>

          <div class="form-group">
            <label for="message"><?php echo e(GoogleTranslate::trans('Message', app()->getLocale())); ?>:</label>
            <textarea id="message" name="message" class="form-control" required></textarea>
          </div>

          <button type="submit" class="btn btn-primary mt-3"><?php echo e(GoogleTranslate::trans('Send', app()->getLocale())); ?></button>
        </form>
        <!-- End of Contact Form -->

      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\yaka.lk\resources\views/web/contact.blade.php ENDPATH**/ ?>