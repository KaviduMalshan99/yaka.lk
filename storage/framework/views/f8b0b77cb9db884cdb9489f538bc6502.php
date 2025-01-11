<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">

                 <!-- Display success message -->
                 <?php if(session('success')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo e(session('success')); ?>

                    </div>
                <?php endif; ?>


                <div style="display: flex; justify-content: space-between;">
                    <h4 style="margin-bottom: 20px" class="card-title">Banner List 
                        <a href="<?php echo e(route('dashboard.banner.create')); ?>" style="margin-left: 10px" class="btn btn-inverse-primary btn-fw">Create New Banner</a>
                    </h4>
                </div>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Image</th>
                                <th>Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($banner->id); ?></td>
                                    <td><img src="<?php echo e(asset('banners/' . $banner->img)); ?>" alt="Banner Image" width="100"></td>
                                    <td>
                                        <?php if($banner->type == 0): ?>
                                            Leaderboard (1140x180)
                                        <?php else: ?>
                                            Skyscraper (285x500)
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <div class="template-demo d-flex flex-nowrap">
                                            <a href="<?php echo e(route('dashboard.banner.update', [$banner->id])); ?>" class="btn btn-primary">Update</a>
                                            <a href="<?php echo e(route('dashboard.banner.delete', [$banner->id])); ?>" class="btn btn-danger">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>

                    <!-- Pagination links -->
                    <?php echo e($banners->links('pagination::bootstrap-5')); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminPanel.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\yaka.lk\resources\views\adminPanel\bannerManagement\index.blade.php ENDPATH**/ ?>