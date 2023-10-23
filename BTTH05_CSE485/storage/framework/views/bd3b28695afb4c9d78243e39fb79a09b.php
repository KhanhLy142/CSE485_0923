<?php $__env->startSection('title', 'Welcome Author'); ?>

<?php $__env->startSection('content'); ?>

<div class="container">
    <h1>Edit Author</h1>
    <form action="<?php echo e(route('authors.update', $author->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" name="name" class="form-control" value="<?php echo e($author->name); ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\xampp\htdocs\myproject\laravel-crud\resources\views/authors/edit.blade.php ENDPATH**/ ?>