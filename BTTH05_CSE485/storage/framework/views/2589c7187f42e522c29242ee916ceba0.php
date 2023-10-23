<?php $__env->startSection('title','Welcome Book'); ?>

<?php $__env->startSection('content'); ?>

<div class="container">
    <h3 class="text-center text-uppercase text-primary my-3">library management</h3>
    <a href="<?php echo e(route('books.create')); ?>"> <button type="submit" class="btn btn-success mt-5">Add new</button></a>
    <?php if(session('success')): ?>
    <div class="Book created successfully." role="alert" id="success-alert">
        <?php echo e(session('success')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <script>
        setTimeout(function(){
            document.getElementById('success-alert').style.display = 'none';
        }, 2000); // 5 seconds (adjust as needed)
    </script>
    <?php endif; ?>
    <table class="table mt-5">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Author_id</th>
            <th scope="col">Title</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th><p><?php echo e($book->id); ?></p></th>
                <th><p><?php echo e($book->author_id); ?></p></th>
                <td><p><?php echo e($book->title); ?></p></td>
                <td><a href= "<?php echo e(route('books.edit', ['book' => $book->id])); ?>"><i class="bi bi-pencil"></i></a></td>
                <td>   
                <form id="delete-form-<?php echo e($book->id); ?>" action="<?php echo e(route('books.destroy', ['book' => $book->id])); ?>" method="POST" style="display: none;">
                        <?php echo method_field('DELETE'); ?>
                        <?php echo csrf_field(); ?>
                    </form>
                    <a href="#" onclick="event.preventDefault(); if (confirm('Do you want to delete?')) { document.getElementById('delete-form-<?php echo e($book->id); ?>').submit(); }">
                        <i class="bi bi-trash3"></i>
                    </a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        </table>
    </div>
    <?php $__env->stopSection(); ?>
    


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\xampp\htdocs\myproject\laravel-crud\resources\views/books/index.blade.php ENDPATH**/ ?>