<div class="adpost-card">
    <div class="adpost-title">
        <h3><?php echo e(GoogleTranslate::trans('Electronics - Mobile Phones', app()->getLocale())); ?></h3>
    </div>
<br>
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
    <br>
    <br>

    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label class="form-label" id="button"><?php echo e(GoogleTranslate::trans('Brand Name', app()->getLocale())); ?></label>
                <select id="brand" name="brand" onchange="selecterror('1brand')" class="form-control custom-select">
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
    <br>
    <br>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-label"><?php echo e(GoogleTranslate::trans('Model', app()->getLocale())); ?></label>
                <select id="model" onchange="selecterror('1model')" name="model" class="form-control custom-select">
                    <option value="0">Select Model</option>
                </select>
                <?php if($errors->has('model')): ?>
                    <div class="alert alert-danger" id="1model">
                        <?php echo e($errors->first('model')); ?>

                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <br>
    <br>

    <div class="row">
        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <ul class="form-check-list">
                    <li>
                        <label class="form-label"><?php echo e(GoogleTranslate::trans('Features (optional)', app()->getLocale())); ?></label>
                    </li>
                    <?php $__currentLoopData = config('constants.FEATURES'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($key <= 12): ?>
                            <li style="display: flex;">
                                <input type="checkbox" value="<?php echo e($feature); ?>" name="specialization[]" class="form-check" id="<?php echo e($feature); ?>">
                                <label for="<?php echo e($feature); ?>" class="form-check-text ml-4"><?php echo e($feature); ?></label>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <ul class="form-check-list mt-4">
                    <?php $__currentLoopData = config('constants.FEATURES'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($key > 12): ?>
                            <li style="display: flex;">
                                <input type="checkbox" value="<?php echo e($feature); ?>" name="specialization[]" class="form-check" id="<?php echo e($feature); ?>">
                                <label for="<?php echo e($feature); ?>" class="form-check-text ml-4"><?php echo e($feature); ?></label>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
    </div>

</div>
<?php /**PATH C:\xampp\htdocs\yaka.lk\resources\views\web\components\AdsForms\electronics\mobile-phones.blade.php ENDPATH**/ ?>