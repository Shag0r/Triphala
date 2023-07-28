 <?php $__env->startSection('main-content'); ?>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Video Table Info</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Video Table Info</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                
                              <a href="<?php echo e(Route('video')); ?>" class="btn btn-primary btn-lg"><i class="fas fa-users me-1"></i> Add Video</a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Serial No.</th>
                                            <th>Title</th>
                                            <th>Catagory</th>
                                            <th>Source</th>
                                            <th>Summary</th>
                                            <th>video</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                           
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Serial No.</th>
                                            <th>Title</th>
                                            <th>Catagory</th>
                                            <th>Source</th>
                                            <th>Summary</th>
                                            <th>video</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                           
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <!-- <?php
                                        $v=1;
                                        

                                            

                                        ?> -->
                                        <?php if(count($videos)>0): ?>
                                            <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <!-- <?php
                                                    $v=1;
                                            

                                                

                                                ?> -->
                                                <tr>
                                                    <td><?php echo e($loop->iteration); ?></td>
                                                    <td><?php echo e($video->vtitle); ?></td>
                                                    <td><?php echo e($video->vcata); ?></td>
                                                    <td><?php echo e($video->vsource); ?></td>
                                                    <td><?php echo e($video->vsumm); ?></td>
                                                    <td>
                                                        <video width="150" height="150" controls>
                                                        <!-- <source src="<?php echo e(asset('storage/videos/'.$video->video)); ?>" type="video/mp4">
                                                    -->
                                                            <source src="<?php echo e(Storage::url($video->video)); ?>" type="video/mp4">


                                                            Your browser does not support the video tag.
                                                        </video>
                                                    </td>
                                                    
                                                    <td><?php if( $video->vstatus==1): ?>
                                                            <a href="<?php echo e(Route('inactive',$video->id)); ?>" class="btn btn-success  btn-sm">
                                                                <i class="fas fa-check"></i>Active
                                                            </a>
                                                        <?php else: ?>
                                                        <a href="<?php echo e(Route('active',$video->id)); ?>" class="btn btn-danger  btn-sm">
                                                            <i class="fas fa-times"></i>
                                                            Draft
                                                        </a>
                                                        <?php endif; ?>
                                                    </td>
                                                    
                                                    <td>
                                                    <a href="<?php echo e(Route('updatevideo',$video->id)); ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit me-1"></i> </a>
                                                    <a href="<?php echo e(Route('deletevideo', $video->id)); ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash me-1"></i> </a>
                                                    </td>
                                                
                                                </tr>
                                                
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            
                                        <?php endif; ?>
                                    </tbody>
                                   
                                </table>
                            </div>
                        </div>
                       
                        
                    </div>
                    <?php $__env->stopSection(); ?>
<?php echo $__env->make('Back.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Php--BASIS\php\htdocs\ustore\resources\views/Back/managevideo.blade.php ENDPATH**/ ?>