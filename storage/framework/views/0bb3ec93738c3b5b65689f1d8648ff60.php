<div class="adpost-card">
    <div class="adpost-title">
        <h3><?php echo e(GoogleTranslate::trans('Electronics - Cameras & Camcorders', app()->getLocale())); ?></h3>
    </div>
    <br> <?php echo $__env->make('web.components.AdsForms.common-fechas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <br><br>
    <div class="row mt-4">
    <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <ul class="form-check-list" >
                    <li>
                        <label class="form-label"><?php echo e(GoogleTranslate::trans('product condition', app()->getLocale())); ?></label>
                    </li>
                   <div style="display: flex;">
                   
                   
                    <?php $__currentLoopData = config('constants.CONDITION'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$condition): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li style="margin-right: 140px;">
                    <div style="display: flex;">
                        <input type="radio" 
                        <?php echo e($condition == 'New' ? 'checked' : ''); ?>

                        value="<?php echo e($condition); ?>"
                        <?php echo e($condition == 'Reconditioned' ? 'hidden' : ''); ?>

                        style="margin-right: 30px;"
                        class="form-check" 
                        name='condition' 
                        id="use-check<?php echo e($key); ?>" >
                        <label 
                        <?php echo e($condition == 'Reconditioned' ? 'hidden' : ''); ?>

                        for="use-check<?php echo e($key); ?>"  value="<?php echo e($condition); ?>"class="form-check-text"><?php echo e($condition); ?></label>
                        </div>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  
                   
                   
                    </div> 
                </ul>
            </div>
        </div>
        
    </div>
    <br><br>
    <div class="row">
    <div class="col-lg-12">
            <div class="form-group">
                <label class="form-label"><?php echo e(GoogleTranslate::trans('Item Type', app()->getLocale())); ?></label>
                <select name="type"onchange="selecterror('type')"class="form-control custom-select">
                    <option selected value="0">Item Type</option>
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

    <br>
    <br>

    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label class="form-label" id="button"><?php echo e(GoogleTranslate::trans('Brand Name', app()->getLocale())); ?></label>
                <select  id="brand" name="brand" onchange="selecterror('1brand')" class="form-control custom-select">
                    <option value="0">Select Brand</option>
                    <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option  <?php if(old('brand', 'default_value') == $brand->id): ?> selected <?php endif; ?> value="<?php echo e($brand->id); ?>"><?php echo e($brand->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('brand')): ?>
                    <div class="alert alert-danger" id="1brand">
                        <?php echo e($errors->first('brand')); ?>

                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
   
       
       
           
        
       
  
     
       
</div>
<?php /**PATH C:\xampp\htdocs\yaka.lk\resources\views\web\components\AdsForms\electronics\cameras-camcorders.blade.php ENDPATH**/ ?>