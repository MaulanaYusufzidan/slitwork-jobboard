<?php $__env->startSection('layout-holder'); ?>
  <?php echo $__env->make('inc.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
  <?php echo $__env->yieldContent('content'); ?>
  <?php echo $__env->make('inc.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Lenovo\Documents\PROJECT SEPTEMBER\Jobsliter\resources\views/layouts/auth.blade.php ENDPATH**/ ?>