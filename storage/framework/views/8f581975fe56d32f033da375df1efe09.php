
<?php if(!empty($data->ads_education[0]->condition)): ?>
    <li>
        <h6><?php echo e(GoogleTranslate::trans('condition', app()->getLocale())); ?>:</h6>
        <p><?php echo e(GoogleTranslate::trans(config('constants.CONDITION')[$data->ads_education[0]->condition], app()->getLocale())); ?></p>
    </li>
<?php endif; ?>
<?php if(!empty($data->ads_education[0]->type)): ?>
    <li>
        <h6><?php echo e(GoogleTranslate::trans('Type', app()->getLocale())); ?>:</h6>
        <p><?php echo e(GoogleTranslate::trans($type[$data->ads_education[0]->type], app()->getLocale())); ?></p>
    </li>
<?php endif; ?>




<?php /**PATH C:\xampp\htdocs\yaka.lk\resources\views\web\components\adsDetailsSpecification\education.blade.php ENDPATH**/ ?>