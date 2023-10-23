<?php $__env->startSection('title', 'Welcome Book'); ?>

<?php $__env->startSection('content'); ?>

<div class="container">
    <h1>Edit Book</h1>
    <form action="<?php echo e(route('books.update', $book->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="mb-3">
            <label for="author_id" class="form-label">Author ID:</label>
            <input type="text" name="author_id" class="form-control" value="<?php echo e($book->author_id); ?>" required>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" name="title" class="form-control" value="<?php echo e($book->title); ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\xampp\htdocs\myproject\laravel-crud\resources\views/books/edit.blade.php ENDPATH**/ ?>