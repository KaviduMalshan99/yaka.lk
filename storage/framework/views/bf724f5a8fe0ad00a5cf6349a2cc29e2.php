<div class="adpost-card">
    <div class="adpost-title">
        <h3><?php echo e(GoogleTranslate::trans('Jobs - Job', app()->getLocale())); ?></h3>
    </div>
    <br>

    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label class="form-label"><?php echo e(GoogleTranslate::trans('Job Role', app()->getLocale())); ?></label>
                <input type="text" onfocus="noneerror('role')" name="role" class="form-control" placeholder="Type your product title here" value="<?php echo e(old('role') ?? ""); ?>">
                <?php if($errors->has('role')): ?>
                    <div class="alert alert-danger" id="role" >
                        <?php echo e($errors->first('role')); ?>

                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <br>
    <br>


   <div class="row">
       <div class="col-lg-12">
           <div class="form-group">
               <label class="form-label"><?php echo e(GoogleTranslate::trans('Title', app()->getLocale())); ?></label>
               <input type="text" onfocus="noneerror('title')" name="title" class="form-control" placeholder="Type your product title here" value="<?php echo e(old('title') ?? ""); ?>">
               <?php if($errors->has('title')): ?>
                   <div class="alert alert-danger" id="title" >
                       <?php echo e($errors->first('title')); ?>

                   </div>
               <?php endif; ?>
           </div>
       </div>
   </div>
   <br>
   <br>

    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label class="form-label"><?php echo e(GoogleTranslate::trans('Description', app()->getLocale())); ?></label>
                <textarea class="form-control" onfocus="noneerror('description')" name="description" placeholder="Describe your message"><?php echo e(old('description') ?? ""); ?></textarea>
                <?php if($errors->has('description')): ?>
                    <div class="alert alert-danger" id="description" >
                        <?php echo e($errors->first('description')); ?>

                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <br>
    <br>

    <input type="hidden" name="price" value="0">

    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label class="form-label"><?php echo e(GoogleTranslate::trans('Salary', app()->getLocale())); ?></label>
                <input type="number" name="salary_per_month" onfocus="noneerror('salary_per_month')" class="form-control" placeholder="Enter your pricing amount" value="<?php echo e(old('salary_per_month')); ?>">
                <?php if($errors->has('salary_per_month')): ?>
                    <div class="alert alert-danger" id="salary_per_month" >
                        <?php echo e($errors->first('salary_per_month')); ?>

                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <br>
    <br>


    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <ul class="form-check-list">
                    <li>
                        <label class="form-label"><?php echo e(GoogleTranslate::trans('Job Type', app()->getLocale())); ?></label>
                    </li>
                    <?php $__currentLoopData = config('constants.JOBTYPE'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jobtype): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li style="display: flex;">
                            <input onchange="selecterror('job_type')"  <?php if(in_array($jobtype, old('job_type') ?? [])): ?> checked <?php endif; ?> type="checkbox" value="<?php echo e($jobtype); ?>" name="job_type[]" class="form-check" id="<?php echo e($jobtype); ?>">
                            <label for="<?php echo e($jobtype); ?>" class="form-check-text ml-4"><?php echo e($jobtype); ?></label>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>

            </div>
            <?php if($errors->has('job_type')): ?>
                <div class="alert alert-danger" id="job_type">
                    <?php echo e($errors->first('job_type')); ?>

                </div>
            <?php endif; ?>
        </div>
    </div>
    <br>
    <br>



    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label class="form-label"><?php echo e(GoogleTranslate::trans('work experience (years)', app()->getLocale())); ?></label>
                <input type="number" onfocus="noneerror('experience')" name="experience" class="form-control" placeholder="Type your product title here" value="<?php echo e(old('experience') ?? ""); ?>">
                <?php if($errors->has('experience')): ?>
                    <div class="alert alert-danger" id="experience" >
                        <?php echo e($errors->first('experience')); ?>

                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <br>
    <br>


    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <ul class="form-check-list">
                    <li>
                        <label class="form-label"><?php echo e(GoogleTranslate::trans('Education', app()->getLocale())); ?></label>
                    </li>
                    <?php $__currentLoopData = config('constants.EDUCATION'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ed): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                        <li style="display: flex;">
                            <input onchange="selecterror('education')" <?php if(in_array($ed, old('education') ?? [])): ?> checked <?php endif; ?> type="checkbox" value="<?php echo e($ed); ?>" name="education[]" class="form-check" id="<?php echo e($ed); ?>">
                            <label for="<?php echo e($ed); ?>" class="form-check-text ml-4"><?php echo e($ed); ?></label>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>

            </div>
            <?php if($errors->has('education')): ?>
                <div class="alert alert-danger" id="education">
                    <?php echo e($errors->first('education')); ?>

                </div>
            <?php endif; ?>
        </div>
    </div>
    <br>
    <br>

    <div class="row">
        <div class="col-lg-12">
            <div class="mb-5">
                <label for="formFile1" onclick="cnoneerror('mainImage')" class="form-label"><?php echo e(GoogleTranslate::trans('Upload Main Image', app()->getLocale())); ?></label>
                <input style="display: none" name="mainImage" class="form-control" type="file" id="formFile1" onchange="preview('frame1')" >
                <?php if($errors->has('mainImage')): ?>
                    <div class="alert alert-danger" id="mainImage" >
                        <?php echo e($errors->first('mainImage')); ?>

                    </div>
                <?php endif; ?>
            </div>
            <img id="frame1" src="" class="img-fluid" />
        </div>
    </div>


    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label class="form-label"><?php echo e(GoogleTranslate::trans('Application deadline', app()->getLocale())); ?></label>
                <input type="date" onfocus="noneerror('application_deadline')" name="application_deadline" class="form-control" placeholder="Type your product title here" value="<?php echo e(old('application_deadline') ?? ""); ?>">
                <?php if($errors->has('application_deadline')): ?>
                    <div class="alert alert-danger" id="application_deadline" >
                        <?php echo e($errors->first('application_deadline')); ?>

                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <br>
    <br>

    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label class="form-label"><?php echo e(GoogleTranslate::trans('CV sent Email', app()->getLocale())); ?></label>
                <input type="email" onfocus="noneerror('cv_sent_email')" name="cv_sent_email" class="form-control" placeholder="Type your product title here" value="<?php echo e(old('cv_sent_email') ?? ""); ?>">
                <?php if($errors->has('cv_sent_email')): ?>
                    <div class="alert alert-danger" id="cv_sent_email" >
                        <?php echo e($errors->first('cv_sent_email')); ?>

                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <br>
    <br>







</div>
<?php /**PATH C:\xampp\htdocs\yaka.lk\resources\views\web\components\AdsForms\jobs\jobs.blade.php ENDPATH**/ ?>