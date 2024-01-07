
<?php $__env->startSection('style',''); ?>
<?php $__env->startSection('header'); ?>
<?php echo $__env->make('layouts.headerShop', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>



<section id="page-header">
    <h2>#stayhome</h2>
    <p>Save more with coupons & up to 70% off!</p>
</section>


<section id="product1" class="section-p1">
    <h2>Featured product</h2>
    <p>Summer Collection New Morden Design</p>
    <div class="product-container">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($product->id <= 8): ?> 
        <div class="product-item" onclick="window.location.href='shop/detail/<?php echo e($product->id); ?>'">
            <img src="./img/products/<?php echo e($product->img); ?>" alt="">
            <div class="prod-info">
                <span>adidas</span>
                <h5><?php echo e($product->name); ?></h5>
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <h4><?php echo e($product->price); ?>$</h4>
            </div>
            <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>

<section id="product1" class="section-p1">
    <h2>New Arrivals</h2>
    <p>Summer Collection New Morden Design</p>
    <div class="product-container">
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($product->id > 8): ?> 
        <div class="product-item" onclick="window.location.href='shop/detail/<?php echo e($product->id); ?>'">
            <img src="./img/products/<?php echo e($product->img); ?>" alt="">
            <div class="prod-info">
                <span>adidas</span>
                <h5><?php echo e($product->name); ?></h5>
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <h4><?php echo e($product->price); ?>$</h4>
            </div>
            <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>

<section id="pagination" class="section-p1">
    <a href="#">1</a>
    <a href="#">2</a>
    <a href="#"><i class="fa-solid fa-arrow-right"></i></a>

</section>



<script>
    const input = document.querySelector('.input');
    input.addEventListener('keydown', function (event) {
        if (event === 'Enter')
            search();
    })
    function search() {
        const url = window.open('http://google.com/search?q=' + input.value);
        window.open(url, '_blank');
    }
</script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ProjectShop\resources\views/shop.blade.php ENDPATH**/ ?>