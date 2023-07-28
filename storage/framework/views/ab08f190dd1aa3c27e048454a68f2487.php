

<?php $__env->startSection('main-content'); ?>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Update Blog</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Blog Information</li>
        </ol>

        <div class="row">
            <div class="col-lg-12">
                <form action="<?php echo e(route('updateblogsave',$blogs->id)); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-group mb-3">
                        <input type="text" name="blogtitle" class="form-control" placeholder="Enter Blog Title"
                            value="<?php echo e($blogs->blogtitle); ?>">
                        <?php $__errorArgs = ['blogtitle'];
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
                        <input type="text" name="blogauthor" class="form-control" placeholder="Enter Blog Author"
                            value="<?php echo e($blogs->blogauthor); ?>">
                        <?php $__errorArgs = ['blogauthor'];
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
                        <textarea name="blogdes" class="form-control" rows="3" placeholder="Enter Blog Description"><?php echo e($blogs->blogdes); ?></textarea>
                        <?php $__errorArgs = ['blogdes'];
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
                        <input type="text" name="blogcata" class="form-control" placeholder="Enter Blog Category"
                            value="<?php echo e($blogs->blogcata); ?>">
                        <?php $__errorArgs = ['blogcata'];
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
                    <div class="col-8">
                        <div class="form-group mb-3">
                            <input type="file" name="blogImg" placeholder="Blog Image" class="form-control">
                            <?php $__errorArgs = ['blogImg'];
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
                        <?php if($blogs->blogImg): ?>
                            <div class="mb-3">
                                <img src="<?php echo e(asset('images/blogimgs/' . $blogs->blogImg)); ?>"
                                    alt="Blog Image" style="max-height: 200px;">
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="form-group mb-3">
                        <textarea name="blogsum" class="form-control" rows="3" placeholder="Enter Blog Summary"><?php echo e($blogs->blogsum); ?></textarea>
                        <?php $__errorArgs = ['blogsum'];
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
                    <div class="form-group b-3">
                        <label for="" class="form-label">Status</label>
                        <select class="form-select form-select-lg w-100 form-control" name="blogstatus">
                            <option value="1" <?php if($blogs->blogstatus == 1): ?> selected <?php endif; ?>>Published</option>
                            <option value="0" <?php if($blogs->blogstatus == 0): ?> selected <?php endif; ?>>Unpublished</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <button class="btn btn-primary w-50">Update Blog</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Back.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Php--BASIS\php\htdocs\ustore\resources\views/Back/updateblog.blade.php ENDPATH**/ ?>