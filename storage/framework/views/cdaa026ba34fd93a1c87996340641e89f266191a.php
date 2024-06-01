
<?php $__env->startSection('title','user login'); ?>
<?php $__env->startSection('content'); ?>
    <div class="offset-md-2 col-md-8">
        <div class="card">
            <div class="card-header">
                <h5>login</h5>
            </div>
            <div class="card-body">
                <?php echo $__env->make('shared._errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <form method="post" action="<?php echo e(route('login')); ?>">
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group">
                        <label for="email">email:</label>
                        <input class="form-control" type="email" name="email" id="email" value="<?php echo e(old('email')); ?>">
                    </div>
                    <div class="form-group">
                        <label for="password">password:</label>
                        <input class="form-control" type="password" name="password" id="password"
                               value="<?php echo e(old('password')); ?>">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember">
                            <label class="form-check-label" for="remember">remember me</label>
                        </div>
                    </div>

                    <button class="btn btn-primary" type="submit">login</button>
                </form>
                <hr>
                <p>No account yet? <a href="<?php echo e(route('signup')); ?>">Register Now</a></p>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\phpstudy_pro\WWW\laravel.cn\resources\views/sessions/create.blade.php ENDPATH**/ ?>