<?php $__env->startSection('title', 'Welcome Author'); ?>

<?php $__env->startSection('content'); ?>
<form action="<?php echo e(route('authors.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div class="container">
        <h1>Create Author</h1>
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
        <a href="<?php echo e(route('authors.index')); ?>" class="btn btn-warning">Back</a>
    </div>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\xampp\htdocs\myproject\laravel-crud\resources\views/authors/create.blade.php ENDPATH**/ ?>