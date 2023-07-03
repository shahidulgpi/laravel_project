
<section class="py-5">
    <div class="container px-5 mb-5" >
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Latest Post For Each Category</span></h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div id="project-list" class="col-lg-11 col-xl-9 col-xxl-8">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">

                        <div class="card-body p-0">

                            <div class="d-flex align-items-center">
                                <div class="p-5">

                                    <h2><?php echo e($category->name); ?></h2>

                                    <?php if( $category->LatestPost()): ?>
                                        <div>
                                            <h3><?php echo e($category->LatestPost()->name); ?></h3>
                                            <p><?php echo e($category->LatestPost()->description); ?></p>
                                        </div>
                                    <?php else: ?>
                                        <p>No posts found for this category.</p>
                                    <?php endif; ?>

                                </div>

                            </div>
                        </div>

                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </div>
</section>





<?php /**PATH F:\Web Development\Project\htdocs\Assainment-18-main\resources\views/components/category_data.blade.php ENDPATH**/ ?>