<div class="col-md-6 col-lg-12">
    <div class="product-widget">
        <ul class="product-widget-list">
            <?php
                $filter_price_types = Session::get('filter_price_types') ?? [];
            ?>
            <?php $__currentLoopData = config('constants.PRICE_TYPES'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $price_types): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="product-widget-item">
                    <div class="product-widget-checkbox">
                        <input  name="price_types[]" <?php if(in_array($key, $filter_price_types)): ?> checked <?php endif; ?>  value="<?php echo e($key); ?>" type="checkbox" id="new">
                    </div>
                    <label class="product-widget-label" for="check1">
                        <span class="product-widget-type" style="color: #0D0A0A"><?php echo e($price_types); ?> </span>
                        <span class="product-widget-number"></span>
                    </label>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        <button type="submit" class="product-widget-btn">
            <i class="fas fa-search"></i>
            <span>Add Filter </span>
        </button>
    </div>
</div>

<div class="col-md-6 col-lg-12">
    <div class="product-widget">
        <ul class="product-widget-list">
            <?php
                $filter_post_types = Session::get('filter_post_types') ?? [];
            ?>
            <?php $__currentLoopData = config('constants.POST_TYPES'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $post_types): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="product-widget-item">
                    <div class="product-widget-checkbox">
                        <input  name="post_types[]"  <?php if(in_array($key, $filter_post_types)): ?> checked <?php endif; ?>  value="<?php echo e($key); ?>" type="checkbox" id="new">
                    </div>
                    <label class="product-widget-label" for="check1">
                        <span class="product-widget-type" style="color: #0D0A0A"><?php echo e($post_types); ?> </span>
                        <span class="product-widget-number"></span>
                    </label>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        <button type="submit" class="product-widget-btn">
            <i class="fas fa-search"></i>
            <span>Add Filter </span>
        </button>
    </div>
</div>

<div class="col-md-6 col-lg-12">
    <div class="product-widget">
        <h6 class="product-widget-title"><?php echo e(GoogleTranslate::trans('Condition', app()->getLocale())); ?> </h6>
        <ul class="product-widget-list">
            <?php
                $filter_condition = Session::get('filter_condition') ?? [];

            ?>
            <li class="product-widget-item">
                <div class="product-widget-checkbox">
                    <input  name="condition[]"  <?php if(in_array('new', $filter_condition)): ?> checked <?php endif; ?> value="new" type="checkbox" id="new">
                </div>
                <label class="product-widget-label" for="check1">
                    <span class="product-widget-type" style="color: #0D0A0A">New </span>
                    <span class="product-widget-number"></span>
                </label>
            </li>
            <li class="product-widget-item">
                <div class="product-widget-checkbox">
                    <input  name="condition[]"  <?php if(in_array('used', $filter_condition)): ?> checked <?php endif; ?>  value="used" type="checkbox" id="used">
                </div>
                <label class="product-widget-label" for="check2">
                    <span class="product-widget-type " style="color: #0D0A0A">Used</span>
                    <span class="product-widget-number"></span>
                </label>
            </li>
        </ul>
        <button type="submit" class="product-widget-btn">
            <i class="fas fa-search"></i>
            <span>Add Filter </span>
        </button>
    </div>
</div>

<div class="col-md-6 col-lg-12">
    <div class="product-widget">
        <h6 class="product-widget-title"><?php echo e(GoogleTranslate::trans('Price ', app()->getLocale())); ?>(Rs) </h6>
        <div class="product-widget-group">
            <input type="number" value="<?php echo e(session('filter_minprice') ?? 0); ?>" name="minprice" placeholder="min - 00">
            <input type="number" value="<?php echo e(session('filter_maxprice') ?? 0); ?>" name="maxprice" placeholder="max - 1B">
        </div>
        <button type="submit" class="product-widget-btn">
            <i class="fas fa-search"></i>
            <span>Add Filter</span>
        </button>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\yaka.lk\resources\views\web\components\filters\common.blade.php ENDPATH**/ ?>