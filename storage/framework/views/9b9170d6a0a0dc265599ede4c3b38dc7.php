<div class="adpost-card">
    <div class="adpost-title">
        <h3><?php echo e(GoogleTranslate::trans('Motor vehicles - Buses', app()->getLocale())); ?></h3>
    </div>
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
                                           style="margin-right: 30px;"
                                           class="form-check"
                                           name='condition'
                                           id="use-check<?php echo e($key); ?>" >
                                    <label for="use-check<?php echo e($key); ?>" class="form-check-text"><?php echo e($condition); ?></label>
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
                <label class="form-label" id="button"><?php echo e(GoogleTranslate::trans('Brand', app()->getLocale())); ?></label>
                <select id="brand" name="brand" onchange="selecterror('1brand')" class="form-control custom-select">
                    <option value="0">Select Brand</option>
                    <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option <?php if(old('brand', 'default_value') == $brand->id): ?> selected <?php endif; ?> value="<?php echo e($brand->id); ?>" ><?php echo e($brand->name); ?></option>
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
                    <option <?php if(old('brand', 'default_value') == $brand->id): ?> selected <?php endif; ?> value="0">Select Model</option>
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
        <div class="col-lg-12">
            <div class="form-group">
                <label class="form-label"><?php echo e(GoogleTranslate::trans('Trim / Edition (optional)', app()->getLocale())); ?></label>
                <input value="<?php echo e(old('edition')); ?>"onchange="selecterror('edition')"type="text"name="edition" class="form-control" placeholder="What is Trim / Edition (optional) of your vehicle">
                <?php if($errors->has('edition')): ?>
                    <div class="alert alert-danger" id="edition">
                        <?php echo e($errors->first('edition')); ?>

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
                <label class="form-label"><?php echo e(GoogleTranslate::trans('Year of Manufacture', app()->getLocale())); ?></label>
                <input value="<?php echo e(old('manufacture_year')); ?>" onchange="selecterror('manufacture_year')" type="number" name="manufacture_year"class="form-control" placeholder="When was your vehicle manufatured">
                <?php if($errors->has('manufacture_year')): ?>
                    <div class="alert alert-danger" id="manufacture_year">
                        <?php echo e($errors->first('manufacture_year')); ?>

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
                <label class="form-label"><?php echo e(GoogleTranslate::trans('Mileage ', app()->getLocale())); ?>(km)</label>
                <input value="<?php echo e(old('Mileage')); ?>"onchange="selecterror('Mileage')"type="number" name="Mileage"class="form-control" placeholder="What is Mileage  of vehicle">
                <?php if($errors->has('Mileage')): ?>
                    <div class="alert alert-danger" id="Mileage">
                        <?php echo e($errors->first('Mileage')); ?>

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
                <label class="form-label"><?php echo e(GoogleTranslate::trans('Engine capacity ', app()->getLocale())); ?>(cc)</label>
                <input value="<?php echo e(old('engine_capacity')); ?>"onchange="selecterror('engine_capacity')"type="number"name="engine_capacity" class="form-control" placeholder="What is Engine capacity (cc)  of vehicle">
                <?php if($errors->has('engine_capacity')): ?>
                    <div class="alert alert-danger" id="engine_capacity">
                        <?php echo e($errors->first('engine_capacity')); ?>

                    </div>
                <?php endif; ?>
            </div>

        </div>
    </div>
    <br>
    <br>

    <?php echo $__env->make('web.components.AdsForms.common-fechas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php /**PATH C:\xampp\htdocs\yaka.lk\resources\views\web\components\AdsForms\vehicles\buses.blade.php ENDPATH**/ ?>