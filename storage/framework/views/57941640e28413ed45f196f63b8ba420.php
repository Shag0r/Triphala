







<!-- headerpart -->
<?php echo $__env->make('Front.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   
    <!-- Quick view -->
    <!-- quick view to be inserted -->
    <!-- Header  -->
    <?php echo $__env->make('Front.layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   <!-- End Header  -->




   <?php echo $__env->make('Front.layouts.mobilenav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--End header-->

    <main class="main">
      <?php echo $__env->yieldContent('main-content'); ?>
    </main>
    <?php echo $__env->make('Front.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('Front.layouts.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Php--BASIS\php\htdocs\ustore\resources\views/Front/master.blade.php ENDPATH**/ ?>