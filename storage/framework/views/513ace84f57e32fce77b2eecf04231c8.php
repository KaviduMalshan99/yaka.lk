<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="dash-menu-list">
            <ul>
                <li><a  href="<?php echo e(route('user.dashboard')); ?>">dashboard</a></li>
                <li><a   href="<?php echo e(route('user.dashboard.ad-post.main')); ?>">ad post</a></li>
                <li><a class="active" href="<?php echo e(route('user.dashboard.my-ads',['all'])); ?>">my ads</a></li>
                <li><a href="<?php echo e(route('user.dashboard.setting',[Session::get('user')['url']])); ?>">Profile</a></li>
                <li><a href="/chatify">message</a></li>
                <li><a href="<?php echo e(route('logout')); ?>">logout</a></li>
            </ul>
        </div>
    </div>
</div>
</div>
</div>
</section>
    <section class="myads-part" style="margin: 50px 50px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="account-title">
                        <div style="display: flex">
                            <h5><a style="width: 125px;<?php if($type=='active'): ?>     color: var(--white);
                                        background: var(--primary);
                                        text-shadow: var(--primary-tshadow); <?php endif; ?>"
                                   href="<?php echo e(route('user.dashboard.my-ads',['active'])); ?>">Active Ads</a></h5><span
                                style="margin: 0 10px">/</span><h5><a style="width: 125px;<?php if($type=='pending'): ?>     color: var(--white);
                                        background: var(--primary);
                                        text-shadow: var(--primary-tshadow); <?php endif; ?>"
                                                                      href="<?php echo e(route('user.dashboard.my-ads',['pending'])); ?>">Pending
                                    Ads</a></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="row">
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $ads): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <?php echo $__env->make('web.components.cards.adCards', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-pagection">
                            <?php echo e($data->links('pagination::bootstrap-5')); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('web.user.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\yaka.lk\resources\views\web\user\my-ads.blade.php ENDPATH**/ ?>