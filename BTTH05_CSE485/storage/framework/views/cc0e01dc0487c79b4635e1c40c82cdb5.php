<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $__env->yieldContent('title', 'Default Title'); ?></title>
<link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('font/font/bootstrap-icons.css')); ?>" rel="stylesheet">
</head>
<style>
    .nav-link{
        font-weight: bold;
        font-size: 20px;
    }
</style>
<body>
<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="/">Home</a>
                    <a class="nav-link" href="<?php echo e(route('authors.index')); ?>">Author</a>
                    <a class="nav-link" href="<?php echo e(route('books.index')); ?>">Book</a>
                </div>
            </div>
        </div>
    </nav>
</header>
<main>
<?php echo $__env->yieldContent('content'); ?>
</main>
<footer>
<!-- Footer content -->
</footer>
<script src="<?php echo e(asset('js/bootstrap.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\Web\xampp\htdocs\myproject\laravel-crud\resources\views/layouts/app.blade.php ENDPATH**/ ?>