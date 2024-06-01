<div class="list-group-item">
    <img src="<?php echo e($user->gravatar()); ?>" alt="<?php echo e($user->name); ?>" width="32" class="mr-3">
    <a href="<?php echo e(route('users.show',$user)); ?>"><?php echo e($user->name); ?></a>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('destroy',$user)): ?>
        <form class="float-right" action="<?php echo e(route('users.destroy',$user->id)); ?>" method="post">
            <?php echo e(csrf_field()); ?>

            <?php echo e(method_field('DELETE')); ?>

            <button class="btn btn-sm btn-danger delete-btn" type="submit">delete</button>
        </form>
    <?php endif; ?>
</div>
<?php /**PATH C:\phpstudy_pro\WWW\laravel.cn\resources\views/users/_user.blade.php ENDPATH**/ ?>