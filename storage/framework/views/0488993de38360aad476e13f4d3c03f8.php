<div class="adpost-card">
    <div class="adpost-title">
        <h3><?php echo e(GoogleTranslate::trans('Home, lands & buildings - Apartments For Sale', app()->getLocale())); ?></h3>
    </div>
  <br>
  <?php echo $__env->make('web.components.AdsForms.common-fechas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <br><br>
  <div class="row">
    <div class="col-lg-12">
            <div class="form-group">
                <label class="form-label"><?php echo e(GoogleTranslate::trans('Bedrooms', app()->getLocale())); ?></label>
                <select name="rooms" onchange="selecterror('rooms')"class="form-control custom-select">
                    <option selected>Bedrooms</option>
                    <?php $__currentLoopData = config('constants.BEDROOMS'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$bedRooms): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($bedRooms); ?>"><?php echo e($bedRooms); ?></option>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </select>
                <?php if($errors->has('rooms')): ?>
                    <div class="alert alert-danger" id="rooms">
                        <?php echo e($errors->first('rooms')); ?>

                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div><br>
    <div class="row">
    <div class="col-lg-12">
            <div class="form-group">
                <label class="form-label"><?php echo e(GoogleTranslate::trans('Bathrooms', app()->getLocale())); ?></label>
                <select onchange="selecterror('bathrooms')"  name="bathrooms"class="form-control custom-select">
                    <option selected>Bathrooms</option>

                    <?php $__currentLoopData = config('constants.BEDROOMS'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$bedRooms): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($bedRooms); ?>"><?php echo e($bedRooms); ?></option>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('bathrooms')): ?>
                    <div class="alert alert-danger" id="bathrooms">
                        <?php echo e($errors->first('bathrooms')); ?>

                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
  <br>

    <div class="row">
    <div class="col-lg-12">
            <div class="form-group">
                <label class="form-label"> <?php echo e(GoogleTranslate::trans('apartment Size (sqft)', app()->getLocale())); ?></label>
                <input value="<?php echo e(old('size_sf')); ?>"name="size_sf"onchange="selecterror('size_sf')"  type="number" class="form-control" placeholder="What is size of your property">
                <?php if($errors->has('size_sf')): ?>
                    <div class="alert alert-danger" id="size_sf">
                        <?php echo e($errors->first('size_sf')); ?>

                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label class="form-label"><?php echo e(GoogleTranslate::trans('Address ', app()->getLocale())); ?></label>
                <input value="<?php echo e(old('address')); ?>" name="address"onchange="selecterror('address')"  type="text" class="form-control" placeholder="Enter street,house number and/or post code">
                <?php if($errors->has('address')): ?>
                    <div class="alert alert-danger" id="address">
                        <?php echo e($errors->first('address')); ?>

                    </div>
                <?php endif; ?>
            </div>
        </div></div>

</div>
<?php /**PATH C:\xampp\htdocs\yaka.lk\resources\views\web\components\AdsForms\property\apartments-for-sale.blade.php ENDPATH**/ ?>