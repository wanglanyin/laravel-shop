<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-static-top">
    <div class="container">
        <!-- Branding Image -->
        <a class="navbar-brand " href="<?php echo e(url('/'), false); ?>">
            Laravel Shop
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav navbar-right">
                <!-- Authentication Links -->
                <?php if(auth()->guard()->guest()): ?>
                <li class="nav-item"><a class="nav-link" href="<?php echo e(route('login'), false); ?>">登录</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo e(route('register'), false); ?>">注册</a></li>
                    <?php else: ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="https://cdn.learnku.com/uploads/images/201709/20/1/PtDKbASVcz.png?imageView2/1/w/60/h/60" class="img-responsive img-circle" width="30px" height="30px">
                            <?php echo e(Auth::user()->name, false); ?>

                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a href="<?php echo e(route('user_addresses.index'), false); ?>" class="dropdown-item">收货地址</a>
                            <a href="<?php echo e(route('products.favorites'), false); ?>" class="dropdown-item">我的收藏</a>
                            <a class="dropdown-item" id="logout" href="#"
                               onclick="event.preventDefault();document.getElementById('logout-form').submit();">退出登录</a>
                            <form id="logout-form" action="<?php echo e(route('logout'), false); ?>" method="POST" style="display: none;">
                                <?php echo e(csrf_field(), false); ?>

                            </form>
                        </div>
                    </li>
                 <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH /www/wwwroot/laravel.shop/resources/views/layouts/_header.blade.php ENDPATH**/ ?>