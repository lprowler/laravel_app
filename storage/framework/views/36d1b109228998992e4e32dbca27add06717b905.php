<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?php echo e(route('home')); ?>">weibo app</a>
        <ul class="navbar-nav justify-content-end">
            <?php if(\Illuminate\Support\Facades\Auth::check()): ?>
                <li class="nav-item"><a href="<?php echo e(route('users.index')); ?>" class="nav-link">用户列表</a></li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo e(\Illuminate\Support\Facades\Auth::user()->name); ?>

                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo e(route('users.show',\Illuminate\Support\Facades\Auth::user())); ?>">个人中心</a>
                        <a class="dropdown-item" href="<?php echo e(route('users.edit',\Illuminate\Support\Facades\Auth::user())); ?>">编辑资料</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" id="logout" href="#">
                            <form action="<?php echo e(route('logout')); ?>" method="post">
                                <?php echo e(csrf_field()); ?>

                                <?php echo e(method_field('DELETE')); ?>

                                <button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
                            </form>
                        </a>
                    </div>
                </li>
            <?php else: ?>
                <li class="nav-item"><a class="nav-link" href="<?php echo e(route('about')); ?>">about</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo e(route('contact')); ?>">contact</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo e(route('login')); ?>">login</a></li>
            <?php endif; ?>
        </ul>
    </div>
</nav>


<?php /**PATH C:\phpstudy_pro\WWW\laravel.cn\resources\views/layouts/_header.blade.php ENDPATH**/ ?>