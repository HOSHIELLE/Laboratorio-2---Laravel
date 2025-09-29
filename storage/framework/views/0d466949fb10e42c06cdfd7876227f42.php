<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Styles & Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

    <style>
        /* NAVBAR */
        .navbar {
            background: #1e3c72;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 2rem;
            padding: 1rem;
        }
        .navbar .navbar-brand,
        .navbar .nav-link {
            color: white;
            font-weight: bold;
            text-decoration: none;
            font-size: 1rem;
            padding: .5rem 1rem;
            border-radius: 6px;
            transition: background .3s, color .3s;
        }
        .navbar .navbar-brand:hover,
        .navbar .nav-link:hover {
            background: #2a5298;
            color: #ffdd57;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar">
            <ul style="display:flex; gap:1.5rem; list-style:none; margin:0; padding:0;">
                <li><a class="navbar-brand" href="<?php echo e(url('/')); ?>">Laravel</a></li>
                <?php if(auth()->guard()->guest()): ?>
                    <?php if(Route::has('login')): ?>
                        <li><a class="nav-link" href="<?php echo e(route('login')); ?>">Login</a></li>
                    <?php endif; ?>
                    <?php if(Route::has('register')): ?>
                        <li><a class="nav-link" href="<?php echo e(route('register')); ?>">Register</a></li>
                    <?php endif; ?>
                <?php else: ?>
                    <li><a class="nav-link" href="#"><?php echo e(Auth::user()->name); ?></a></li>
                    <li>
                        <a class="nav-link" href="<?php echo e(route('logout')); ?>"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Cerrar sesión
                        </a>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                            <?php echo csrf_field(); ?>
                        </form>
                    </li>
                <?php endif; ?>
            </ul>
        </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>
</html>
<?php /**PATH C:\Users\fanny\login-lab\resources\views/layouts/app.blade.php ENDPATH**/ ?>