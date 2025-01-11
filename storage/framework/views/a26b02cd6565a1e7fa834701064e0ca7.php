<div class="adpost-card">
    <div class="adpost-title">
        <h3><?php echo e(GoogleTranslate::trans('Services - Travel & Tourism', app()->getLocale())); ?></h3>
    </div>
   
   
   
    <br>
   


    <?php echo $__env->make('web.components.AdsForms.common-fechas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <br><br>
    
   <div class="row">
   <div class="col-lg-12">
           <div class="form-group">
               <label class="form-label"><?php echo e(GoogleTranslate::trans('Service type', app()->getLocale())); ?></label>
               <select name="type"onchange="selecterror('type')"class="form-control custom-select">
                   <option selected value="0">Service type</option>
                   <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       <option 
                       <?php if(old('type', 'default_value') == $type->id): ?> selected <?php endif; ?>
                       value="<?php echo e($type->id); ?>"><?php echo e($type->name); ?></option>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  
               </select>
               <?php if($errors->has('type')): ?>
                   <div class="alert alert-danger" id="type">
                       <?php echo e($errors->first('type')); ?>

                   </div>
               <?php endif; ?>
           </div>
       </div>
   </div>
   

    
</div><?php /**PATH C:\xampp\htdocs\yaka.lk\resources\views\web\components\AdsForms\services\travel-tourism.blade.php ENDPATH**/ ?>