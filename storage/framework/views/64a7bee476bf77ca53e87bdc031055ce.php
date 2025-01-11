<?php $__env->startSection('content'); ?>
    <div class="row">
            <div class="col-lg-6 grid-margin stretch-card mx-auto">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Update <?php if(isset($maincategory) && $category->mainId != 0 ): ?> Sub <?php endif; ?> Package</h4>

                    <?php if(isset($success) && $success): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e($success); ?>

                        </div>
                    <?php endif; ?>
                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php endif; ?>

                    <form class="forms-sample" id="admin-form" method="post" action="<?php echo e(route('dashboard.package.update-subpackage', $category->url)); ?>" enctype="multipart/form-data" >
                        <?php echo csrf_field(); ?>
                        
                        <input type="hidden" name="id" value="<?php echo e($category->id); ?>">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Name <span style="color: red">*</span></label>
                            <input type="text" required  class="form-control" id="exampleInputUsername1" name="name" value="<?php echo e(old('name') ?? $category->name); ?>" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Duration <span style="color: red">*</span></label>
                            <input type="text" required  class="form-control" id="exampleInputUsername1" name="duration" value="<?php echo e(old('duration') ?? $category->duration); ?>" placeholder="Duration">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Price <span style="color: red">*</span></label>
                            <input type="text" required  class="form-control" id="exampleInputUsername1" name="price" value="<?php echo e(old('price') ?? $category->price); ?>" placeholder="Price">
                        </div>

                      

                        <div class="form-group">
                            <label for="exampleFormControlSelect2">status </label>
                            <select class="form-control" name="status" id="exampleFormControlSelect2">
                                <option  <?php if($category->status == 0): ?> selected <?php endif; ?> value="0">N/A</option>
                                <option  <?php if($category->status == 1): ?> selected <?php endif; ?> value="1">Active</option>
                            </select>
                        </div>
                           <button type="submit" id="submit-form" class="btn btn-primary me-2">Submit</button>
                      
                        <?php if(isset($maincategory) && $category->id != 0 ): ?>
                        <a href="<?php echo e(route('dashboard.sub-packages',[$category->url])); ?>" class="btn btn-light">Cancel</a>

                        <?php else: ?>
                            <a href="<?php echo e(route('dashboard.sub-packages',[$category->url])); ?>" class="btn btn-light">Cancel</a>

                        <?php endif; ?>

                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminPanel.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\yaka.lk\resources\views\adminPanel\packageManagement\updateSubPackage.blade.php ENDPATH**/ ?>