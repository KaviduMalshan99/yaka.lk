<?php if(!empty($data->ads_animals[0]->condition)): ?>
    <li>
        <h6><?php echo e(GoogleTranslate::trans('Condition', app()->getLocale())); ?>:</h6>
        <p><?php echo e(GoogleTranslate::trans(config('constants.CONDITION')[$data->ads_animals[0]->condition], app()->getLocale())); ?></p>
    </li>
<?php endif; ?>


<?php if(!empty($data->ads_animals[0]->type)): ?>
    <li>
        <h6><?php echo e(GoogleTranslate::trans('Type', app()->getLocale())); ?>:</h6>
        <p><?php echo e(GoogleTranslate::trans($type[$data->ads_animals[0]->type], app()->getLocale())); ?></p>
    </li>
<?php endif; ?>



<?php /**PATH C:\xampp\htdocs\yaka.lk\resources\views\web\components\adsDetailsSpecification\animals.blade.php ENDPATH**/ ?>