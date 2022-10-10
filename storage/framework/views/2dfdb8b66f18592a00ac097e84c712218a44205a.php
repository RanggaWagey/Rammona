

<?php $__env->startSection('title'); ?> Edit Category <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php $__env->startComponent('components.breadcrumb'); ?>
    <?php $__env->slot('li_1'); ?> Sub Category <?php $__env->endSlot(); ?>
    <?php $__env->slot('li_1_url'); ?> <?php echo e(route('categories.index')); ?> <?php $__env->endSlot(); ?>
    <?php $__env->slot('title'); ?> Edit Sub Category <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Edit Category</h4>

                <form action="<?php echo e(route('subcategories.update', $subcategory->id)); ?>" method="POST">
                    <?php echo method_field('PUT'); ?>
                    <?php echo csrf_field(); ?>
                    <div class="row mb-3">
                        <label for="name" class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="<?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control" name="name" id="name" placeholder="Enter Category Name" value="<?php echo e(old('name', $subcategory->name)); ?>">
                            <!-- Hidden Slug -->
                            <input type="text" class="<?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control" name="slug" id="slug" placeholder="Enter Slug" value="<?php echo e(old('slug', $subcategory->slug)); ?>" readonly>
                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="mt-2 alert alert-danger alert-dismissible fade show" role="alert">
                                    <?php echo e($message); ?>

                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    
                    

                    <div class="row mb-3">
                        <button type="submit" class="btn btn-primary btn-block">Edit Category</button>
                    </div>
                    
                </form>
                
            </div>
        </div>
        <!-- end card -->
    </div>
</div>
<!-- end row -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script-bottom'); ?>
<script src="https://cdn.jsdelivr.net/npm/slugify@1.6.5/slugify.min.js"></script>
<script>
    let inputName = document.getElementById('name')
    let inputSlug = document.getElementById('slug')

    inputName.addEventListener('keyup', function(){
        let slug = slugify(inputName.value, {
             remove: /[*+~.()'"!:@]/g
        })
        inputSlug.value = slug.toLowerCase()
    })

</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\DATA\Applications\dashboard-rammona\resources\views/dashboard/subcategories/edit.blade.php ENDPATH**/ ?>