


 <?php $__env->startSection('main-content'); ?>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Manage Product</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Product Information</li>
                        </ol>
                        <div class="container-fluid px-4">
                        <h1 class="mt-4">Users Table Info</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Users Table Info</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                
                              <a href="<?php echo e(Route('product')); ?>" class="btn btn-primary btn-lg"><i class="fas fa-users me-1"></i> Add product</a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Serial No.</th>
                                            
                                            <th>Product Name</th>
                                            <th>Product Catagory</th>
                                            <th>Product Image</th>
                                            <th>Product Price</th>
                                            <th>Product Status</th>
                                            <th>Action</th>
                                           
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Serial No.</th>
                                            
                                            <th>Product Name</th>
                                            <th>Product Catagory</th>
                                            <th>Product Image</th>
                                            <th>Product Price</th>
                                            <th>Product Status</th>
                                            <th>Action</th>
                                           
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $p=1;
                                           
                                        ?>
                                        <?php if(count($products)>0): ?>
                                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($p++); ?></td>
                                                <th><?php echo e($product->productName); ?></th>
                                                <th><?php echo e($product->productCatagory); ?></th>
                                                <th><img src="<?php echo e(asset('images/products/' . $product->productImage)); ?>" width="150px" height="100px" alt=""></th>

                                                <th><?php echo e($product->productPrice); ?></th>
                                                <th>
                                                <td><?php if($product->productStatus==1): ?>
                                                        <a href="<?php echo e(Route('inactiveproduct', $product->id)); ?>" class="btn btn-success  btn-sm">
                                                            <i class="fas fa-check"></i>Active
                                                        </a>
                                                    <?php else: ?>
                                                    <a href="<?php echo e(Route('activeproduct', $product->id)); ?>" class="btn btn-danger  btn-sm">
                                                        <i class="fas fa-times"></i>
                                                        Draft
                                                    </a>
                                                    <?php endif; ?>
                                                </td>
                                                </th>
                                                <td>
                                                <a href="<?php echo e(Route('updateproduct', $product->id)); ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit me-1"></i> </a>
                                                <a href="<?php echo e(Route('deleteproduct',$product->id)); ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash me-1"></i> </a>
                                                </td>
                                            
                                            </tr>

                                                
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        
                                            
                                        <?php endif; ?>
                                       
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                       
                        
                    </div>
                        
                       
                        
                    </div>
                    <?php $__env->stopSection(); ?>
<?php echo $__env->make('Back.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Php--BASIS\php\htdocs\ustore\resources\views/Back/manageproduct.blade.php ENDPATH**/ ?>