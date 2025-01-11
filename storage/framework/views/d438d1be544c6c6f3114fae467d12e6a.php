<?php if(!empty($data->ads_property[0]->condition)): ?>
    <li>
        <h6><?php echo e(GoogleTranslate::trans('Condition', app()->getLocale())); ?>:</h6>
        <p><?php echo e(GoogleTranslate::trans( config('constants.CONDITION')[$data->ads_property[0]->condition], app()->getLocale())); ?></p>
    </li>
<?php endif; ?>

<?php if(!empty($data->ads_property[0]->brand)): ?>
    <li>
        <h6><?php echo e(GoogleTranslate::trans('Brand', app()->getLocale())); ?>:</h6>
        <p><?php echo e(GoogleTranslate::trans( $brands[$data->ads_property[0]->brand] , app()->getLocale())); ?></p>
    </li>
<?php endif; ?>

<?php if(!empty($data->ads_property[0]->size_of_land)): ?>
    <li>
        <h6><?php echo e(GoogleTranslate::trans('Land Size', app()->getLocale())); ?>:</h6>
        <p><?php echo e(GoogleTranslate::trans($data->ads_property[0]->size_of_land . ' '. config('constants.UNIT')[$data->ads_property[0]->unit], app()->getLocale())); ?></p>
    </li>
<?php endif; ?>

<?php if(!empty($data->ads_property[0]->size_sf)): ?>
    <li>
        <h6><?php echo e(GoogleTranslate::trans('House Size (Sqft)', app()->getLocale())); ?>:</h6>
        <p><?php echo e(GoogleTranslate::trans($data->ads_property[0]->size_sf, app()->getLocale())); ?></p>
    </li>
<?php endif; ?>

<?php if(!empty($data->ads_property[0]->address)): ?>
    <li style="display: flex;flex-direction: column;align-items: start">
        <h6 style="margin-bottom: 5px"><?php echo e(GoogleTranslate::trans('Address', app()->getLocale())); ?>:</h6>
        <p><?php echo e(GoogleTranslate::trans( $data->ads_property[0]->address , app()->getLocale())); ?></p>
    </li>
<?php endif; ?>

<?php if(!empty($data->ads_property[0]->rooms)): ?>
    <li>
        <h6><?php echo e(GoogleTranslate::trans('Bedrooms', app()->getLocale())); ?>:</h6>
        <p><?php echo e(GoogleTranslate::trans($data->ads_property[0]->rooms, app()->getLocale())); ?></p>
    </li>
<?php endif; ?>


<?php if(!empty($data->ads_property[0]->bathrooms)): ?>
    <li>
        <h6> <?php echo e(GoogleTranslate::trans('Bathrooms', app()->getLocale())); ?>:</h6>
        <p><?php echo e(GoogleTranslate::trans($data->ads_property[0]->bathrooms, app()->getLocale())); ?></p>
    </li>
<?php endif; ?>


<?php if(!empty($data->ads_property[0]->type)): ?>
    <li>
        <h6><?php echo e(GoogleTranslate::trans('Type', app()->getLocale())); ?>:</h6>
        <p><?php echo e(GoogleTranslate::trans( $type[$data->ads_property[0]->type] , app()->getLocale())); ?></p>
    </li>
<?php endif; ?>



<?php /**PATH C:\xampp\htdocs\yaka.lk\resources\views\web\components\adsDetailsSpecification\property.blade.php ENDPATH**/ ?>