<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div style="display: flex;justify-content: space-between">
                        <h4  style="margin-bottom: 20px" class="card-title">Type List   <a href="<?php echo e(route('dashboard.adsTypes.create')); ?>" style="margin-left: 10px" class="btn btn-inverse-primary btn-fw">Create New Type</a> </h4>
                        <form action="<?php echo e(route('dashboard.adsTypes')); ?>" style="width: 30%; display: flex; align-items: center;">
                            <input name="name" value="<?php echo e($_GET['name'] ?? ""); ?>" type="search" id="searchInput" class="form-control" placeholder="Type Name Search" title="Search here" style="flex-grow: 1; margin-right: 10px;">
                            <button type="submit" style="width: 90px;border: none;background: #5c3939;color: white;padding: 7px;border-radius: 3px;">
                                Search
                            </button>
                            <a href="<?php echo e(route('dashboard.adsTypes')); ?>" style="text-decoration: none;margin-left: 10px;width: 90px;border: none;background: #5c3939;color: white;padding: 7px;border-radius: 3px;">Clear</a>
                        </form>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>url</th>
                                <th>Name</th>
                                <th>Sub Category</th>
                                <th>Status</th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $packageTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $packType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($packType->id); ?></td>
                                    <td><?php echo e($packType->url); ?></td>
                                    <td><?php echo e($packType->name); ?></td>
                                    <td><?php echo e($packType->category->name); ?></td>
                                    <td>
                                        <?php if($packType->status == 1): ?>
                                            <span  class="btn btn-inverse-success btn-fw">Active</span>
                                        <?php else: ?>
                                            <span  class="btn btn-inverse-danger btn-fw">N/A</span>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <div class="template-demo d-flex  flex-nowrap">
                                            <a href="<?php echo e(route('dashboard.adsTypes.view',[$packType->url])); ?>"  class="btn btn-primary">
                                                View <!-- Assuming you want to use a "View" icon, change "ti-home" to the appropriate icon class -->
                                            </a>
                                            <a  href="<?php echo e(route('dashboard.adsTypes.update',[$packType->url])); ?>" class="btn btn-primary">
                                                Update<!-- Assuming you want to use an "Update" icon, change "ti-world" to the appropriate icon class -->
                                            </a>
                                            
                                        </div>
                                    </td>

                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminPanel.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\yaka.lk\resources\views\adminPanel\adsTypesManagement\index.blade.php ENDPATH**/ ?>