<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
                <span class="icon-menu"></span>
            </button>
        </div>
        <div>
            <a class="navbar-brand brand-logo" href="<?php echo e(route('/')); ?>">
                <img src="<?php echo e(asset('yaka-payment.png')); ?>" alt="logo">
            </a>
            <a class="navbar-brand brand-logo-mini" href="<?php echo e(route('/')); ?>">
                <img src="<?php echo e(asset('yaka-payment.png')); ?>" alt="logo">
            </a>
        </div>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-top">
        <ul class="navbar-nav">
            <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
                <h1 class="welcome-text">Hello,<span class="text-black fw-bold"><?php echo e(Auth::user()->first_name); ?></span></h1>
            </li>
        </ul>

        <ul class="navbar-nav ms-auto">
            <?php
                $pendingads = \App\Models\Ads::where('status',0)->with('user')->orderBy('created_at', 'DESC')->get();
                $pendingads_count = count($pendingads);
            ?>

            <li class="nav-item dropdown">
                <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                    <i class="icon-mail "></i>
                    <?php if($pendingads_count > 0): ?>
                        <span style="color: #fff;position: absolute;top: -11px;background: #ff4949;border-radius: 43px;width: 21px;font-weight: bold;left: 10px;"><?php echo e($pendingads_count); ?></span>
                    <?php endif; ?>
                </a>
                <div style="height:300px; overflow:hidden;overflow-y:scroll;" class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
                    <a class="dropdown-item py-3 border-bottom">
                        <p class="mb-0 font-weight-medium float-left"><?php echo e($pendingads_count); ?> Pending ads </p>
                        <a style="display: block;position: absolute;top: 13px;right: 2px;" href="<?php echo e(route('dashboard.ads')); ?>"><span class="badge badge-pill badge-primary float-right">View all</span></a>
                    </a>
                    <?php $__currentLoopData = $pendingads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ads): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="dropdown-item preview-item py-3">
                            <div class="preview-thumbnail">
                                <i class="mdi mdi-alert m-auto text-primary"></i>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject fw-normal text-dark mb-1"><?php echo e($ads->user->first_name ." ".$ads->user->last_name); ?></h6>
                                <p class="fw-light small-text mb-0"> <?php echo e($ads->created_at->diffForHumans()); ?> </p>
                            </div>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </li>

            <li class="nav-item dropdown d-none d-lg-block user-dropdown">
                    <?php if(isset(Session::get('user')['profileImage']) && Session::get('user')['profileImage']!=''): ?>
                        <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false"><img class="img-xs rounded-circle" src="<?php echo e(asset('images/user/'.Session::get('user')['profileImage'])); ?>" alt="Profile image"> </a>
                    <?php else: ?>

                    <?php endif; ?>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>
<?php /**PATH C:\xampp\htdocs\yaka.lk\resources\views\adminPanel\blocks\nav.blade.php ENDPATH**/ ?>