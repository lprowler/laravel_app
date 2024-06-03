
<?php $__env->startSection('title',$user->name.' show'); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="offset-md-2 col-md-8">

            <section class="user_info">
                <?php echo $__env->make('shared._user_info',['user'=>$user], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </section>

            <?php if(\Illuminate\Support\Facades\Auth::check()): ?>
                <?php echo $__env->make('users._follow_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
            <section class="stat mt-2 mb-4">
                <?php echo $__env->make('shared._stat',['user'=>$user], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </section>

            <section class="status">
                <?php if($statuses->count()>0): ?>
                    <ul class="list-unstyled">
                        <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo $__env->make('statuses._status', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    <div class="mt-5">
                        <?php echo $statuses->render(); ?>

                    </div>
                <?php else: ?>
                    <p>没有数据！</p>
                <?php endif; ?>
            </section>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\phpstudy_pro\WWW\laravel.cn\resources\views/users/show.blade.php ENDPATH**/ ?>