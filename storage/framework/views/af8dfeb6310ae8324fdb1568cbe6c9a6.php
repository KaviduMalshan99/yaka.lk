<div class="adpost-card">
    <div class="adpost-title">
        <h3><?php echo e(GoogleTranslate::trans('Daily Essentials -  Fruits & Vegetables', app()->getLocale())); ?></h3>
    </div>
   
   
    <br>
    <?php echo $__env->make('web.components.AdsForms.common-fechas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <br><br>
    <div class="row mt-4">
    <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <ul class="form-check-list" >
                    <li>
                        <label class="form-label"><?php echo e(GoogleTranslate::trans('Type', app()->getLocale())); ?></label>
                    </li>
                   <div style="display: flex;">
                   
                   
                    <?php $__currentLoopData = config('constants.FOOD'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$food): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li style="margin-right: 140px;">
                    <div style="display: flex;">
                        <input type="radio" 
                        <?php echo e($food == 'Fruits' ? 'checked' : ''); ?>

                        value="<?php echo e($food); ?>"
                        style="margin-right: 30px;"
                        class="form-check" 
                        name='condition' 
                        id="use-check<?php echo e($key); ?>" >
                        <label for="use-check<?php echo e($key); ?>" class="form-check-text"><?php echo e($food); ?></label>
                        </div>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  
                   
                   
                    </div> 
                </ul>
            </div>
        </div>
        
    </div>
    
     

       
</div>
<?php /**PATH C:\xampp\htdocs\yaka.lk\resources\views\web\components\AdsForms\essentials\fruits-vegetables.blade.php ENDPATH**/ ?>