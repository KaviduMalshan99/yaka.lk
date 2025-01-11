<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div style="display: flex;justify-content: space-between">
                        <h4 style="margin-bottom: 20px" class="card-title">Brands   <a href="<?php echo e(route('dashboard.configuration.brands-and-models.create')); ?>" style="margin-left: 10px" class="btn btn-inverse-primary btn-fw">Create New Brands</a> </h4>
                        <form action="<?php echo e(route('dashboard.configuration.brands-and-models')); ?>" style="width: 30%; display: flex; align-items: center;">
                            <input name="name" value="<?php echo e($_GET['name'] ?? ""); ?>" type="search" id="searchInput" class="form-control" placeholder="Brand Name Search" title="Search here" style="flex-grow: 1; margin-right: 10px;">
                            <button type="submit" style="width: 90px;border: none;background: #5c3939;color: white;padding: 7px;border-radius: 3px;">
                                Search
                            </button>
                            <a href="<?php echo e(route('dashboard.configuration.brands-and-models')); ?>" style="text-decoration: none;margin-left: 10px;width: 90px;border: none;background: #5c3939;color: white;padding: 7px;border-radius: 3px;">Clear</a>
                        </form>
                    </div>
                    <?php if(isset($success) && $success): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e($success); ?>

                        </div>
                    <?php endif; ?>
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
                                <th>Models</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($brand->id); ?></td>
                                    <td><?php echo e($brand->url); ?></td>
                                    <td><?php echo e($brand->name); ?></td>
                                    <td><?php echo e($brand->category->name ?? ""); ?></td>
                                    <td>
                                        <?php if($brand->status == 1): ?>
                                            <span  class="btn btn-inverse-success btn-fw">Active</span>
                                        <?php else: ?>
                                            <span  class="btn btn-inverse-danger btn-fw">N/A</span>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <div class="template-demo d-flex  flex-nowrap">
                                            <a href="<?php echo e(route('dashboard.configuration.brands-and-models.view',[$brand->url])); ?>"  class="btn btn-primary">
                                                View <!-- Assuming you want to use a "View" icon, change "ti-home" to the appropriate icon class -->
                                            </a>
                                            <a  href="<?php echo e(route('dashboard.configuration.brands-and-models.update',[$brand->url])); ?>" class="btn btn-primary">
                                                Update<!-- Assuming you want to use an "Update" icon, change "ti-world" to the appropriate icon class -->
                                            </a>
                                            
                                        </div>
                                    </td>
                                    <td>
                                        <div class="template-demo d-flex justify-content-between flex-nowrap">
                                            <a href="<?php echo e(route('dashboard.configuration.models',[$brand->url])); ?>"  type="button" class="btn btn-primary">
                                                Manage<!-- Assuming you want to use a "Delete" icon, change "ti-email" to the appropriate icon class -->
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

<?php echo $__env->make('adminPanel.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\yaka.lk\resources\views\adminPanel\brandsAndModelsManagement\index.blade.php ENDPATH**/ ?>