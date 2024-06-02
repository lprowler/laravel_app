
<?php $__env->startSection('title','home'); ?>
<?php $__env->startSection('content'); ?>
    <?php if(\Illuminate\Support\Facades\Auth::check()): ?>
        <div class="row">
            <div class="col-md-8">
                <section class="status_form">
                    <?php echo $__env->make('shared._status_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </section>
            </div>
            <aside class="col-md-4">
                <section class="user_info">
                    <?php echo $__env->make('shared._user_info',['user'=>\Illuminate\Support\Facades\Auth::user()], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </section>
            </aside>
        </div>
    <?php else: ?>
        <div class="bg-light p-3 p-sm-5 rounded">
        <h1>hello laravel</h1>
        <p class="lead">你看到的是 <a href="/">Laravel 入门教程</a></p>
        <p>一切，将从这里开始</p>
        <p><a class="btn btn-lg btn-success" href="<?php echo e(route('signup')); ?>" role="button">现在注册</a></p>
    </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\phpstudy_pro\WWW\laravel.cn\resources\views/static_pages/home.blade.php ENDPATH**/ ?>