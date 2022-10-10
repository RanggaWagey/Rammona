<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu"><?php echo app('translator')->get('translation.Menu'); ?></li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bx-home-circle"></i><span class="badge rounded-pill bg-info float-end">04</span>
                        <span key="t-dashboards"><?php echo app('translator')->get('translation.Dashboards'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?php echo e(route('root')); ?>">Home</a></li>
                        <li><a href="<?php echo e(route('products.index')); ?>">Products</a></li>
                        <li><a href="<?php echo e(route('categories.index')); ?>" >Categories</a></li>
                        <li><a href="<?php echo e(route('subcategories.index')); ?>" >SubCategories</a></li>
                        <li><a href="#">Promo</a></li>
                        <li><a href="<?php echo e(route('coba')); ?>">Users</a></li>
                    </ul>
                </li>

                

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
<?php /**PATH D:\DATA\Applications\dashboard-rammona\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>