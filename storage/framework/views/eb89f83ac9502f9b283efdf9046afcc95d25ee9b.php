
<?php $__env->startSection('title','update '.$user->name.' profile'); ?>
<?php $__env->startSection('content'); ?>
    <div class="offset-md-2 col-md-8">
        <div class="card">
            <div class="card-header">
                <h5>update user profile</h5>
            </div>
            <div class="card-body">
                <?php echo $__env->make('shared._errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="gravatar_edit">
                    <a href="https://gravatar.w3tt.com/avatar/email" target="_blank">
                        <img class="gravatar" src="<?php echo e($user->gravatar('200')); ?>" alt="<?php echo e($user->name); ?>">
                    </a>
                </div>
                <form action="<?php echo e(route('users.update',$user->id)); ?>" method="post">
                    <?php echo e(method_field('PATCH')); ?>

                    <?php echo e(csrf_field()); ?>

                    <div class="mb-3">
                        <label for="name">name:</label>
                        <input type="text" name="name" class="form-control" value="<?php echo e($user->name); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="email">email:</label>
                        <input type="email" name="email" id="email" class="form-control" value="<?php echo e($user->email); ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="password">password:</label>
                        <input type="password" name="password" id="password" class="form-control" value="<?php echo e(old('password')); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="password_confimation">password confirmation:</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" value="<?php echo e(old('password_confirmation')); ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">update</button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\phpstudy_pro\WWW\laravel.cn\resources\views/users/edit.blade.php ENDPATH**/ ?>