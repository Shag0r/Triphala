


 <?php $__env->startSection('main-content'); ?>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Blog</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Blog information Information</li>
                        </ol>
                        
                        <div class="row">
        <div class="col-lg-12">
            <form action="<?php echo e(Route('addblog')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <!-- error massage  -->
                <!-- /resources/views/post/create.blade.php -->

                <!-- <h1>Create Post</h1>

                <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <?php endif; ?> -->

                <!-- Create Post Form -->
                <!-- error massage ends  -->

                <div class="form-group mb-3">

                    <input type="text" name="blogtitle" id="" class="form-control" placeholder="Enter Blog Title">
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
               
                <div class="row">
                    <div class="col-6">
                        <div class="form-group mb-3">
                            <input type="text" name="blogcata" id="" placeholder="Blog Catagory"
                                class="form-control">

                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group mb-3">
                            <input type="text" name="blogauthor" id="" placeholder="Blog Author"
                                class="form-control">
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
                    </div>
                </div>
                <div class="col-8">
                        <div class="form-group mb-3">
                            <input type="file" name="blogImg" id="" placeholder="Blog Image"
                                class="form-control">
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
                    </div>
                    <div class="form-group mb-3">

                    <textarea class="form-control" placeholder="Enter Blog description" name="blogdes"
                        id="" col=" 30" rows="3"></textarea>
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

                    <textarea class="form-control" placeholder="Enter Blog summary" name="blogsum"
                        id="" col=" 30" rows="3"></textarea>
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
                    <select class="form-select form-select-lg w-100 form-control" name="blogstatus" id="">
                        <option selected>-----Select one----</option>

                        <option value="1">Published</option>
                        <option value="0">Unpublished</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <button class="btn btn-primary w-50">
                        ADD Blog
                    </button>
                </div>

        </div>

        </form>
    </div>
                        
                    </div>
                    <?php $__env->stopSection(); ?>
<?php echo $__env->make('Back.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Php--BASIS\php\htdocs\ustore\resources\views/Back/addblog.blade.php ENDPATH**/ ?>