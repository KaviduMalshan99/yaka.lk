
<?php if(!empty($data->ads_hobbysportsandkids[0]->condition)): ?>
    <li>
        <h6><?php echo e(GoogleTranslate::trans('Condition', app()->getLocale())); ?>:</h6>
        <p><?php echo e(GoogleTranslate::trans( config('constants.CONDITION')[$data->ads_hobbysportsandkids[0]->condition] , app()->getLocale())); ?></p>
    </li>
<?php endif; ?>
<?php if(!empty($data->ads_hobbysportsandkids[0]->type)): ?>
    <li>
        <h6><?php echo e(GoogleTranslate::trans('Type', app()->getLocale())); ?>:</h6>
        <p><?php echo e(GoogleTranslate::trans( $type[$data->ads_hobbysportsandkids[0]->type] , app()->getLocale())); ?></p>
    </li>
<?php endif; ?>
<?php if(!empty($data->ads_hobbysportsandkids[0]->gender)): ?>
    <li>
        <h6><?php echo e(GoogleTranslate::trans('Gender', app()->getLocale())); ?>:</h6>
        <p><?php echo e(GoogleTranslate::trans( config('constants.GENDER')[$data->ads_hobbysportsandkids[0]->gender] , app()->getLocale())); ?></p>
    </li>
<?php endif; ?>



<?php /**PATH C:\xampp\htdocs\yaka.lk\resources\views\web\components\adsDetailsSpecification\hobby-sports-and-kids.blade.php ENDPATH**/ ?>