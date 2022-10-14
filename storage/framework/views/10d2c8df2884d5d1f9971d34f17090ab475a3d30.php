

<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Product Categories</h1>
</div>

<?php if(session()->has('success')): ?>
            <div class="alert alert-success col-lg-8" role="alert">
                <?php echo e(session('success')); ?>

            </div>
<?php endif; ?>

<div class="table-responsive col-lg-8">
    <a href="<?php echo e(route('subcategories.create')); ?>" class="btn btn-primary mb-3">Create New Sub Category</a>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Sub Category Name</th>
                <th scope="col">Parent Category</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($subcategory->name); ?></td>
                <td><?php echo e($subcategory->category->name); ?></td>
                <td>
                    <a href="<?php echo e(route('subcategories.edit', $subcategory->id)); ?>" class="badge bg-warning"><i class="bx bxs-pencil btn btn-sm"></i></a>
                    <form action="<?php echo e(route('subcategories.destroy', $subcategory->id)); ?>" method="post" class="d-inline">
                        <?php echo method_field('delete'); ?>
                        <?php echo csrf_field(); ?>
                        <button class="badge bg-danger border-0" onclick="return confirm('Are you sure you want to delete this?')"><i class="bx bxs-trash btn btn-sm"></i></button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\dashboard-rammona\resources\views/dashboard/subcategories/index.blade.php ENDPATH**/ ?>