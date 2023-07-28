


 <?php $__env->startSection('main-content'); ?>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Manage Blog</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Blog  Information</li>
                        </ol>
                        <div class="container-fluid px-4">
                        <h1 class="mt-4">Blog Table Info</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Blog Table Info</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                
                              <a href="<?php echo e(Route('blog')); ?>" class="btn btn-primary btn-lg"><i class="fas fa-users me-1"></i> Add Blog</a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Serial No.</th>
                                            
                                            <th>Blog Title</th>
                                            <th>Blog Author</th>
                                            <th>Blog Description</th>
                                            <th>Blog Catagory</th>
                                            <th>Blog Image</th>
                                            <th>Blog Summary</th>
                                            <th>Blog Status</th>
                                            <th>Action</th>
                                           
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Serial No.</th>
                                            
                                            <th>Blog Title</th>
                                            <th>Blog Author</th>
                                            <th>Blog Description</th>
                                            <th>Blog Catagory</th>
                                            <th>Blog Image</th>
                                            <th>Blog Summary</th>
                                            <th>Blog Status</th>
                                            <th>Action</th>
                                           
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $b=1;
                                           
                                        ?>
                                        <?php if(count($blogs)>0): ?>
                                            <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($b++); ?></td>
                                                <th><?php echo e($blog->blogtitle); ?></th>
                                                <th><?php echo e($blog->blogauthor); ?></th>
                                                <th><?php echo e($blog->blogdes); ?></th>
                                                <th><?php echo e($blog->blogcata); ?></th>
                                                
                                                <th><img src="<?php echo e(asset('images/blogimgs/' . $blog->blogImg)); ?>" width="150px" height="100px" alt=""></th>

                                                <th><?php echo e($blog->blogsum); ?></th>
                                                <th>
                                                <td><?php if( $blog->blogstatus==1): ?>
                                                        <a href="<?php echo e(Route('inactiveblog',$blog->id)); ?>" class="btn btn-success  btn-sm">
                                                            <i class="fas fa-check"></i>Active
                                                        </a>
                                                    <?php else: ?>
                                                    <a href="<?php echo e(Route('activeblog',$blog->id)); ?>" class="btn btn-danger  btn-sm">
                                                        <i class="fas fa-times"></i>
                                                        Draft
                                                    </a>
                                                    <?php endif; ?>
                                                </td>
                                                </th>
                                                <td>
                                                <a href="<?php echo e(Route('updateblog',$blog->id)); ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit me-1"></i> </a>
                                                <a href="<?php echo e(Route('deleteblog', $blog->id)); ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash me-1"></i> </a>
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
<?php echo $__env->make('Back.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Php--BASIS\php\htdocs\ustore\resources\views/Back/manageblog.blade.php ENDPATH**/ ?>