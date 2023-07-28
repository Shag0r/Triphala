

<?php $__env->startSection('main-content'); ?>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Update Video</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Video Information</li>
        </ol>

        <div class="row">
            <div class="col-lg-12">
                <form action="<?php echo e(Route('updatevideosave',$video->id)); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>

                    <div class="form-group mb-3">
                        <input type="text" name="vtitle" class="form-control" placeholder="Enter Video Title" value="<?php echo e($video->vtitle); ?>">
                        <?php $__errorArgs = ['vtitle'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group mb-3">
                                <input type="text" name="vcata" placeholder="Video Category" class="form-control" value="<?php echo e($video->vcata); ?>">
                                <?php $__errorArgs = ['vcata'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mb-3">
                                <input type="text" name="vsource" placeholder="Video Source" class="form-control" value="<?php echo e($video->vsource); ?>">
                                <?php $__errorArgs = ['vsource'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <textarea class="form-control" placeholder="Enter Video Summary" name="vsumm" rows="3"><?php echo e($video->vsumm); ?></textarea>
                        <?php $__errorArgs = ['vsumm'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="form-group mb-3">
                        <input type="file" name="video" id="" placeholder="Upload Video" class="form-control">
                        <?php $__errorArgs = ['video'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <video width="450" height="450" controls>
                                                        <!-- <source src="<?php echo e(asset('storage/videos/'.$video->video)); ?>" type="video/mp4">
                                                    -->
                        <source src="<?php echo e(Storage::url($video->video)); ?>" type="video/mp4">


                        Your browser does not support the video tag.
                    </video>

                    <div class="form-group b-3">
                        <label for="" class="form-label">Status</label>
                        <select class="form-select form-select-lg w-100 form-control" name="vstatus">
                            <option value="1" <?php echo e($video->vstatus == 1 ? 'selected' : ''); ?>>Published</option>
                            <option value="0" <?php echo e($video->vstatus == 0 ? 'selected' : ''); ?>>Unpublished</option>
                        </select>
                        <?php $__errorArgs = ['vstatus'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="form-group mb-3">
                        <button class="btn btn-primary w-50">
                            Update Video
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Back.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Php--BASIS\php\htdocs\ustore\resources\views/Back/updatevideo.blade.php ENDPATH**/ ?>