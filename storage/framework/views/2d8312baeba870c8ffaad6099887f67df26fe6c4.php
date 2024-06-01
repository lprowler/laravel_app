
<?php $__env->startSection('title',$user->name.' show'); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="offset-md-2 col-md-8">
            <div class="col-md-12">
                <div class="offset-md-2 col-md-8">
                    <section class="user_info">
                        <?php echo $__env->make('shared._user_info',['user'=>$user], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </section>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\phpstudy_pro\WWW\laravel.cn\resources\views/users/show.blade.php ENDPATH**/ ?>