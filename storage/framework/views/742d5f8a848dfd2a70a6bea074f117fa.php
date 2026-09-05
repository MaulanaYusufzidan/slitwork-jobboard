<?php $__env->startSection('content'); ?>
<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-6 px-0">
            <div class="login-container">
                <div class="login-header mb-3">
                    <h3>
                        <img src="<?php echo e(asset('images/logo/Slitwork.png')); ?>" width="50" alt="SlitWork Logo">
                        Slitwork Login
                    </h3>
                    <p class="login-header-title">Welcome back to Slit Work</p>
                    <p class="text-muted">Login with your registered email & password.</p>
                </div>
                
                <div class="login-form">
                    <form action="<?php echo e(route('login')); ?>" method="POST">
                        <?php echo csrf_field(); ?>

                        <!-- Email Input -->
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="email-addon"><i class="fas fa-user"></i></span>
                                </div>
                                <input 
                                    id="email" 
                                    type="email" 
                                    placeholder="E-mail address" 
                                    class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                    name="email" 
                                    value="<?php echo e(old('email')); ?>" 
                                    required 
                                    autocomplete="email" 
                                    autofocus
                                >
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <!-- Password Input -->
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="password-addon"><i class="fas fa-lock"></i></span>
                                </div>
                                <input 
                                    id="password" 
                                    type="password" 
                                    placeholder="Password" 
                                    class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                    name="password" 
                                    required
                                    autocomplete="current-password"
                                >
                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <!-- Remember Me -->
                        <div class="form-group mb-2">
                            <div class="form-check pl-0">
                                <input type="checkbox" id="rememberMe" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                <label for="rememberMe" class="form-check-label">Remember me</label>
                            </div>
                        </div>

                        <!-- Forgot Password Route -->
                        <?php if(Route::has('password.request')): ?>
                            <div class="form-group mb-3">
                                <a href="<?php echo e(route('password.request')); ?>" class="secondary-link">Forgot password?</a>
                            </div>
                        <?php endif; ?>

                        <button type="submit" class="btn primary-btn btn-block">Login</button>
                    </form>

                    <!-- Registration Route -->
                    <div class="my-3">
                        <p>Don't have an account? <a href="<?php echo e(route('register')); ?>">Register now</a></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Poster Section -->
        <div class="col-sm-12 col-md-6 px-0">
            <div class="login-poster">
                <h2 class="mb-3 slogan">Mark yourself as <br>Actively Job seeker</h2>
                <p class="text-white lead">We have enabled this feature targeting superheroes who lost their jobs during this crisis.</p>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<style>
.login-poster {
    background-image: linear-gradient(
        to bottom,
        rgba(0, 0, 0, 0.5),
        rgba(0, 0, 0, 0.35)
    ),
    url('<?php echo e(asset("images/login-bg.jpg")); ?>');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}
</style>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.auth', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Lenovo\Documents\PROJECT SEPTEMBER\Jobsliter\resources\views/auth/login.blade.php ENDPATH**/ ?>