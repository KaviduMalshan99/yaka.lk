<?php if(!empty($data->ads_electronics[0]->condition)): ?>
    <li>
        <h6> <?php echo e(GoogleTranslate::trans('Condition', app()->getLocale())); ?>:</h6>
        <p><?php echo e(GoogleTranslate::trans( config('constants.CONDITION')[$data->ads_electronics[0]->condition] , app()->getLocale())); ?></p>
    </li>
<?php endif; ?>
<?php if(!empty($data->ads_electronics[0]->brand)): ?>
    <li>
        <h6> <?php echo e(GoogleTranslate::trans('Brand', app()->getLocale())); ?>:</h6>
        <p><?php echo e(GoogleTranslate::trans( $brands[$data->ads_electronics[0]->brand] , app()->getLocale())); ?></p>
    </li>
<?php endif; ?>

<?php if(!empty($data->ads_electronics[0]->model)): ?>
    <li>
        <h6><?php echo e(GoogleTranslate::trans('Model', app()->getLocale())); ?>:</h6>
        <p><?php echo e(GoogleTranslate::trans( $model[$data->ads_electronics[0]->model] , app()->getLocale())); ?></p>
    </li>
<?php endif; ?>

<?php if(!empty($data->ads_electronics[0]->specialization)): ?>
    <li style="display: flex;flex-direction: column;align-items: start">
        <h6 style="margin-bottom: 5px"><?php echo e(GoogleTranslate::trans('specialization', app()->getLocale())); ?>:</h6>
        <p><?php echo e(GoogleTranslate::trans( $data->ads_electronics[0]->specialization , app()->getLocale())); ?></p>
    </li>
<?php endif; ?>

<?php if(!empty($data->ads_electronics[0]->type)): ?>
    <li>
        <h6> <?php echo e(GoogleTranslate::trans('type', app()->getLocale())); ?>:</h6>
        <p><?php echo e(GoogleTranslate::trans( $type[$data->ads_electronics[0]->type] , app()->getLocale())); ?></p>
    </li>
<?php endif; ?>

<?php if(!empty($data->ads_electronics[0]->screen_size)): ?>
    <li>
        <h6><?php echo e(GoogleTranslate::trans('Screen Size', app()->getLocale())); ?>:</h6>
        <p><?php echo e(GoogleTranslate::trans( $data->ads_electronics[0]->screen_size , app()->getLocale())); ?></p>
    </li>
<?php endif; ?>

<?php if(!empty($data->ads_electronics[0]->capacity)): ?>
    <li style="display: flex;flex-direction: column;align-items: start">
        <h6 style="margin-bottom: 5px"><?php echo e(GoogleTranslate::trans('Capacity', app()->getLocale())); ?>:</h6>
        <p><?php echo e(GoogleTranslate::trans( config('constants.CAPACITY')[$data->ads_electronics[0]->capacity] , app()->getLocale())); ?></p>
    </li>
<?php endif; ?>

<?php /**PATH C:\xampp\htdocs\yaka.lk\resources\views\web\components\adsDetailsSpecification\electronics.blade.php ENDPATH**/ ?>