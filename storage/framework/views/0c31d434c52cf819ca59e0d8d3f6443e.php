

<?php if(!empty($data->ads_services[0]->type)): ?>
    <li>
        <h6><?php echo e(GoogleTranslate::trans('Type', app()->getLocale())); ?>:</h6>
        <p><?php echo e(GoogleTranslate::trans( $type[$data->ads_services[0]->type] , app()->getLocale())); ?></p>
    </li>
<?php endif; ?>



<?php /**PATH C:\xampp\htdocs\yaka.lk\resources\views\web\components\adsDetailsSpecification\other-ads.blade.php ENDPATH**/ ?>