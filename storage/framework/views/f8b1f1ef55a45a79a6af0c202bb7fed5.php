<div class="adpost-card">
    <div class="adpost-title">
        <h3><?php echo e(GoogleTranslate::trans('Home, lands & buildings - Land For Sale', app()->getLocale())); ?></h3>
    </div>
 <br>

 <?php echo $__env->make('web.components.AdsForms.common-fechas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <br><br>
 <div class="row">
    <div class="col-lg-12">
            <div class="form-group">
                <label class="form-label"><?php echo e(GoogleTranslate::trans('Land Type', app()->getLocale())); ?></label>
                <select name="type"onchange="selecterror('type')"class="form-control custom-select">
                    <option selected value="0">Select Land Type</option>
                    <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($type->id); ?>"><?php echo e($type->name); ?></option>
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
    <div class="row">
        <div class="col-lg-8">
            <div class="form-group">
                <label class="form-label"><?php echo e(GoogleTranslate::trans('Land size', app()->getLocale())); ?></label>
                <input value="<?php echo e(old('size_of_land')); ?>" onchange="selecterror('size_of_land')"type="number" name="size_of_land"class="form-control" placeholder="What is size of your land">
                <?php if($errors->has('size_of_land')): ?>
                    <div class="alert alert-danger" id="size_of_land">
                        <?php echo e($errors->first('size_of_land')); ?>

                    </div>
                <?php endif; ?>
            </div>
        </div>
        <br>
        <div class="col-lg-4">
            <div class="form-group">
                <label class="form-label"><?php echo e(GoogleTranslate::trans('Unit', app()->getLocale())); ?></label>
                <select value="<?php echo e(old('unit')); ?>" onchange="selecterror('unit')" name="unit" class="form-control custom-select">
                <?php $__currentLoopData = config('constants.UNIT'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$unit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($key); ?>"><?php echo e($unit); ?></option>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('unit')): ?>
                    <div class="alert alert-danger" id="unit">
                        <?php echo e($errors->first('unit')); ?>

                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label class="form-label"><?php echo e(GoogleTranslate::trans('Address', app()->getLocale())); ?></label>
                <input value="<?php echo e(old('address')); ?>" onchange="selecterror('address')"name="address"type="text" class="form-control" placeholder="Enter street,house number and/or post code">
                <?php if($errors->has('address')): ?>
                    <div class="alert alert-danger" id="address">
                        <?php echo e($errors->first('address')); ?>

                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    
</div>
<?php /**PATH C:\xampp\htdocs\yaka.lk\resources\views\web\components\AdsForms\property\land-for-sale.blade.php ENDPATH**/ ?>