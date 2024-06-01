<a href="<?php echo e(route('users.show',$user->id)); ?>">
    <img class="gravatar" src="<?php echo e($user->gravatar('140')); ?>" alt="<?php echo e($user->name); ?>">
</a>
<h1><?php echo e($user->name); ?></h1>
<?php /**PATH C:\phpstudy_pro\WWW\laravel.cn\resources\views/shared/_user_info.blade.php ENDPATH**/ ?>