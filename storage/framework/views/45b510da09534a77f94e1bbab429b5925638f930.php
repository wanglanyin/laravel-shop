<?php $__env->startSection('title', '商品列表'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
            <div class="card">
                <div class="card-body">
                    <form action="<?php echo e(route('products.index'), false); ?>" class="search-form">
                        <div class="form-row">
                            <div class="col-md-9">
                                <div class="form-row">
                                    <div class="col-auto"><input type="text" class="form-control form-control-sm" name="search" placeholder="搜索"></div>
                                    <div class="col-auto"><button class="btn btn-primary btn-sm">搜索</button></div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <select name="order" class="form-control form-control-sm float-right">
                                    <option value="">排序方式</option>
                                    <option value="price_asc">价格从低到高</option>
                                    <option value="price_desc">价格从高到低</option>
                                    <option value="sold_count_desc">销量从高到低</option>
                                    <option value="sold_count_asc">销量从低到高</option>
                                    <option value="rating_desc">评价从高到低</option>
                                    <option value="rating_asc">评价从低到高</option>
                                </select>
                            </div>
                        </div>
                    </form>
                    <!-- 筛选组件结束 -->
                    <div class="row products-list">
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-3 product-item">
                                <div class="product-content">
                                    <div class="top">
                                        <div class="img">
                                            <a href="<?php echo e(route('products.show',$product->id), false); ?>">
                                            <img src="<?php echo e($product->image_url, false); ?>" alt=""></a></div>

                                        <div class="price"><b>￥</b><?php echo e($product->price, false); ?></div>
                                        <div class="title">
                                            <a href="<?php echo e(route('products.show',$product->id), false); ?>"><?php echo e($product->title, false); ?></a></div>
                                    </div>
                                    <div class="bottom">
                                        <div class="sold_count">销量 <span><?php echo e($product->sold_count, false); ?>笔</span></div>
                                        <div class="review_count">评价 <span><?php echo e($product->review_count, false); ?></span></div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="float-right"><?php echo e($products->appends($filters)->render(), false); ?></div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scriptsAfterJs'); ?>
    <script>
        var filters = <?php echo json_encode($filters); ?>;
        $(document).ready(function () {
            $('.search-form input[name=search]').val(filters.search);
            $('.search-form select[name=order]').val(filters.order);

            $('.search-form select[name=order]').on('change', function() {
                $('.search-form').submit();
            });
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /www/wwwroot/laravel.shop/resources/views/products/index.blade.php ENDPATH**/ ?>