<?php if(!empty($data->ads_vehicles[0]->condition)): ?>
<li>
    <h6><?php echo e(GoogleTranslate::trans('Condition', app()->getLocale())); ?>:</h6>
    <p><?php echo e(GoogleTranslate::trans(config('constants.CONDITION')[$data->ads_vehicles[0]->condition], app()->getLocale())); ?></p>
</li>
<?php endif; ?>

<?php if(!empty($data->ads_vehicles[0]->brand)): ?>
    <li>
        <h6><?php echo e(GoogleTranslate::trans('Brand', app()->getLocale())); ?>:</h6>
        <p><?php echo e(GoogleTranslate::trans($brands[$data->ads_vehicles[0]->brand], app()->getLocale())); ?></p>
    </li>
<?php endif; ?>

<?php if(!empty($data->ads_vehicles[0]->model)): ?>
    <li>
        <h6><?php echo e(GoogleTranslate::trans('Model', app()->getLocale())); ?>:</h6>
        <p><?php echo e(GoogleTranslate::trans($model[$data->ads_vehicles[0]->model], app()->getLocale())); ?></p>
    </li>
<?php endif; ?>

<?php if(!empty($data->ads_vehicles[0]->type)): ?>

    <?php echo e(GoogleTranslate::trans($data->subcategory->url, app()->getLocale())); ?>


    <?php if($data->subcategory->url == 'rentals' || $data->subcategory->url == 'auto-services' ): ?>
        <li>
            <h6><?php echo e(GoogleTranslate::trans('Service type', app()->getLocale())); ?>:</h6>
            <p><?php echo e(GoogleTranslate::trans($type[$data->ads_vehicles[0]->type], app()->getLocale())); ?></p>
        </li>
    <?php else: ?>
        <li>
            <h6><?php echo e(GoogleTranslate::trans('Body type', app()->getLocale())); ?>:</h6>
            <p><?php echo e(GoogleTranslate::trans(config('constants.BODY_TYPE')[$data->ads_vehicles[0]->type], app()->getLocale())); ?></p>
        </li>

    <?php endif; ?>

<?php endif; ?>

<?php if(!empty($data->ads_vehicles[0]->manufacture_year)): ?>
    <li style="display: flex;flex-direction: column;align-items: start">
        <h6 style="margin-bottom: 5px"><?php echo e(GoogleTranslate::trans('manufacture year', app()->getLocale())); ?>:</h6>
        <p><?php echo e(GoogleTranslate::trans($data->ads_vehicles[0]->manufacture_year, app()->getLocale())); ?></p>
    </li>
<?php endif; ?>

<?php if(!empty($data->ads_vehicles[0]->engine_capacity)): ?>
    <li style="display: flex;flex-direction: column;align-items: start">
        <h6 style="margin-bottom: 5px"><?php echo e(GoogleTranslate::trans('engine capacity', app()->getLocale())); ?>:</h6>
        <p><?php echo e(GoogleTranslate::trans($data->ads_vehicles[0]->engine_capacity, app()->getLocale())); ?> cc</p>
    </li>
<?php endif; ?>

<?php if(!empty($data->ads_vehicles[0]->gears_up)): ?>
    <li style="display: flex;flex-direction: column;align-items: start">
        <h6 style="margin-bottom: 5px"><?php echo e(GoogleTranslate::trans('gears up', app()->getLocale())); ?>:</h6>
        <p><?php echo e(GoogleTranslate::trans($data->ads_vehicles[0]->gears_up, app()->getLocale())); ?></p>
    </li>
<?php endif; ?>

<?php if(!empty($data->ads_vehicles[0]->Mileage)): ?>
    <li style="display: flex;flex-direction: column;align-items: start">
        <h6 style="margin-bottom: 5px"><?php echo e(GoogleTranslate::trans('Mileage', app()->getLocale())); ?>:</h6>
        <p><?php echo e(GoogleTranslate::trans($data->ads_vehicles[0]->Mileage, app()->getLocale())); ?> km</p>
    </li>
<?php endif; ?>

<?php if(!empty($data->ads_vehicles[0]->edition)): ?>
    <li style="display: flex;flex-direction: column;align-items: start">
        <h6 style="margin-bottom: 5px"><?php echo e(GoogleTranslate::trans('edition', app()->getLocale())); ?>:</h6>
        <p><?php echo e(GoogleTranslate::trans($data->ads_vehicles[0]->edition, app()->getLocale())); ?></p>
    </li>
<?php endif; ?>


<?php if(!empty($data->ads_vehicles[0]->model_year)): ?>
    <li style="display: flex;flex-direction: column;align-items: start">
        <h6 style="margin-bottom: 5px"><?php echo e(GoogleTranslate::trans('model year', app()->getLocale())); ?>:</h6>
        <p><?php echo e(GoogleTranslate::trans($data->ads_vehicles[0]->model_year, app()->getLocale())); ?></p>
    </li>
<?php endif; ?>

<?php if(!empty($data->ads_vehicles[0]->fuel_Type)): ?>
    <li style="display: flex;flex-direction: column;align-items: start">
        <h6 style="margin-bottom: 5px"><?php echo e(GoogleTranslate::trans('fuel Type', app()->getLocale())); ?>:</h6>
        <p><?php echo e(GoogleTranslate::trans(config('constants.FUEL_TYPE')[$data->ads_vehicles[0]->fuel_Type], app()->getLocale())); ?></p>
    </li>
<?php endif; ?>

<?php if(!empty($data->ads_vehicles[0]->transmission)): ?>
    <li style="display: flex;flex-direction: column;align-items: start">
        <h6 style="margin-bottom: 5px"><?php echo e(GoogleTranslate::trans('transmission', app()->getLocale())); ?>:</h6>
        <p><?php echo e(GoogleTranslate::trans(config('constants.TRANSMISSION')[$data->ads_vehicles[0]->transmission], app()->getLocale())); ?></p>
    </li>
<?php endif; ?>




<?php /**PATH C:\xampp\htdocs\yaka.lk\resources\views\web\components\adsDetailsSpecification\vehicles.blade.php ENDPATH**/ ?>