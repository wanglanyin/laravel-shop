<?php $__env->startSection('title', '商品列表'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
            <div class="card">
                <div class="card-body">
                    <div class="row products-list">
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-3 product-item">
                                <div class="product-content">
                                    <div class="top">
                                        <div class="img"><img src="<?php echo e($product->image_url, false); ?>" alt=""></div>
                                        <div class="price"><b>￥</b><?php echo e($product->price, false); ?></div>
                                        <div class="title"><?php echo e($product->title, false); ?></div>
                                    </div>
                                    <div class="bottom">
                                        <div class="sold_count">销量 <span><?php echo e($product->sold_count, false); ?>笔</span></div>
                                        <div class="review_count">评价 <span><?php echo e($product->review_count, false); ?></span></div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="float-right"><?php echo e($products->render(), false); ?></div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /www/wwwroot/laravel.shop/resources/views/products/index.blade.php ENDPATH**/ ?>