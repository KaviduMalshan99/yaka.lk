<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div style="display: flex;justify-content: space-between">
                        <h4 style="margin-bottom: 20px" class="card-title">Package List   <a href="<?php echo e(route('dashboard.package.create')); ?>" style="margin-left: 10px" class="btn btn-inverse-primary btn-fw">Create New Package</a> </h4>
                        
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>url</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Action</th>
                                <th>Sub Package</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $packTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $packType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($packType->id); ?></td>
                                    <td><?php echo e($packType->url); ?></td>
                                    <td><?php echo e($packType->name); ?></td>
                                    <td>
                                        <?php if($packType->status == 1): ?>
                                            <span  class="btn btn-inverse-success btn-fw">Active</span>
                                        <?php else: ?>
                                            <span  class="btn btn-inverse-danger btn-fw">N/A</span>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <div class="template-demo d-flex  flex-nowrap">
                                            <a href="<?php echo e(route('dashboard.package.view',[$packType->url])); ?>"  class="btn btn-primary">
                                                View <!-- Assuming you want to use a "View" icon, change "ti-home" to the appropriate icon class -->
                                            </a>
                                            <a  href="<?php echo e(route('dashboard.package.update',[$packType->url])); ?>" class="btn btn-primary">
                                                Update<!-- Assuming you want to use an "Update" icon, change "ti-world" to the appropriate icon class -->
                                            </a>
                                            <a href="<?php echo e(route('dashboard.package.delete',[$packType->url])); ?>"  type="button" class="btn btn-primary">
                                                Delete<!-- Assuming you want to use a "Delete" icon, change "ti-email" to the appropriate icon class -->
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="template-demo d-flex justify-content-between flex-nowrap">
                                            <a href="<?php echo e(route('dashboard.sub-packages',[$packType->url])); ?>"  type="button" class="btn btn-primary">
                                                Manage<!-- Assuming you want to use a "Delete" icon, change "ti-email" to the appropriate icon class -->
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <?php echo e($packTypes->links('pagination::bootstrap-5')); ?>


                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminPanel.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\yaka.lk\resources\views\adminPanel\packageManagement\index.blade.php ENDPATH**/ ?>