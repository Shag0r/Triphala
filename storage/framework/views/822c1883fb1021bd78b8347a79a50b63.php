

<?php $__env->startSection('main-content'); ?>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Update Product</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Product Information</li>
        </ol>

        <div class="row">
            <div class="col-lg-12">
                <form action="<?php echo e(route('updatesaveproduct', $product->id)); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-group mb-3">
                        <input type="text" name="productName" class="form-control" placeholder="Enter Product Name"
                            value="<?php echo e($product->productName); ?>">
                        <?php $__errorArgs = ['productName'];
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
                                <input type="text" name="productCatagory" placeholder="Product Category"
                                    class="form-control" value="<?php echo e($product->productCatagory); ?>">
                                <?php $__errorArgs = ['productCatagory'];
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
                                <input type="text" name="productPrice" placeholder="Product Price" class="form-control"
                                    value="<?php echo e($product->productPrice); ?>">
                                <?php $__errorArgs = ['productPrice'];
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
                            <input type="file" name="productImage" placeholder="Product Image" class="form-control">
                            <?php $__errorArgs = ['productImage'];
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
                        <?php if($product->productImage): ?>
                            <div class="mb-3">
                                <img src="<?php echo e(asset('images/products/' . $product->productImage)); ?>"
                                    alt="Product Image" style="max-height: 200px;">
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="form-group b-3">
                        <label for="" class="form-label">Status</label>
                        <select class="form-select form-select-lg w-100 form-control" name="productStatus">
                            <option value="1" <?php if($product->productStatus == 1): ?> selected <?php endif; ?>>Published</option>
                            <option value="0" <?php if($product->productStatus == 0): ?> selected <?php endif; ?>>Unpublished</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <button class="btn btn-primary w-50">Update Product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Back.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Php--BASIS\php\htdocs\ustore\resources\views/Back/updateproduct.blade.php ENDPATH**/ ?>