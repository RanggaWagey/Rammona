

<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><?php echo e($subcategory->name); ?></h1>
</div>

<?php if(session()->has('success')): ?>
            <div class="alert alert-success" role="alert">
                <?php echo e(session('success')); ?>

            </div>
<?php endif; ?>

    <div class="container">
        <a href="<?php echo e(route('products.create')); ?>" class="btn btn-primary mb-3">Add Product</a>
        <div class="row">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="position-absolute px-3 py-2 d-flex justify-content-between" style="background-color:rgba(0, 0, 0, 0.7)"><a href="" class="text-white text-decoration-none"><?php echo e($product->subcategory->name); ?></a></div>
                    <?php if($product->image): ?>
                    <div style="max-height: 170px; overflow:hidden;">
                        <img src="<?php echo e(asset('storage/' . $product->image)); ?>" alt="<?php echo e($product->subcategory->name); ?>" class="img-fluid">
                     
                    </div>
                  
                    <?php else: ?>
                        <img src="<?php echo e(asset('storage/product-images/no-image.jpg')); ?>" class="img-fluid" alt="<?php echo e($product->subcategory->name); ?>">
                    <?php endif; ?>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($product->name); ?></h5>
                        <p class="card-text"><?php echo e($product->description); ?></p>
                        <p class="card-text">Rp. <?php echo e($product->price); ?>,-</p>
                    <a href="<?php echo e(route('products.edit', $product->id)); ?>">
                        <button type="submit" class="btn btn-sm btn-warning mb-2">Edit</button>                      
                    </a>
                    <form action="<?php echo e(route('products.destroy', $product->id)); ?>" method="post" class="d-inline">
                        <?php echo method_field('delete'); ?>
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="btn btn-sm btn-danger mb-2">Hapus</button>                      
                    </form>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\dashboard-rammona\resources\views/dashboard/products/subcategory.blade.php ENDPATH**/ ?>