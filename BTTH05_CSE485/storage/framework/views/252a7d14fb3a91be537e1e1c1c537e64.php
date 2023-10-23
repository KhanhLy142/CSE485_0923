<?php $__env->startSection('title', 'Welcome Book'); ?>

<?php $__env->startSection('content'); ?>

<div class="container">
    <h1>Create Book</h1>
    <form action="<?php echo e(route('books.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="author_id" class="form-label">Author ID:</label>
            <input type="text" name="author_id" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="<?php echo e(route('books.index')); ?>" class="btn btn-warning">Back</a>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\xampp\htdocs\myproject\laravel-crud\resources\views/books/create.blade.php ENDPATH**/ ?>