<?php $__env->startSection('layout-holder'); ?>
    
    <?php echo $__env->make('inc.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <div class="container my-4">
        <div class="account-layout">
            <div class="account-hdr border">
                <h5><i class="fas fa-cog"></i> Account Settings</h5>
            </div>
            <div class="account-bdy">
                <div class="row">
                    <div class="col-sm-12 col-md-3 pr-md-0 pr-sm-3">
                        
                        <?php echo $__env->make('inc.account-nav', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    </div>
                    <div class="col-sm-12 col-md-9 pl-md-0 pl-sm-3 ">
                        <?php echo $__env->yieldContent('content'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo $__env->make('inc.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Lenovo\Documents\PROJECT SEPTEMBER\Jobsliter\resources\views/layouts/account.blade.php ENDPATH**/ ?>