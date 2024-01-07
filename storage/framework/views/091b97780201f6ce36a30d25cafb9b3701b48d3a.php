
<?php $__env->startSection('style',''); ?>
<?php $__env->startSection('header'); ?>
<?php echo $__env->make('layouts.headerHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section id="hero">
    <h4>Trade-in-offer</h4>
    <h2>Super value deals</h2>
    <h1>On all products</h1>
    <p>Save more with coupons & up to 70% off!</p>
    <button id="shop-button" onclick="window.location.href='shop.html'">Shop now</button>
</section>

<section id="feature" class="section-p1">
    <div class="fe-box">
        <img src="./img/features/f1.png" alt="">
        <h6>Free shipping</h6>
    </div>
    <div class="fe-box">
        <img src="./img/features/f2.png" alt="">
        <h6>Free shipping</h6>
    </div>
    <div class="fe-box">
        <img src="./img/features/f3.png" alt="">
        <h6>Free shipping</h6>
    </div>
    <div class="fe-box">
        <img src="./img/features/f4.png" alt="">
        <h6>Free shipping</h6>
    </div>
    <div class="fe-box">
        <img src="./img/features/f5.png" alt="">
        <h6>Free shipping</h6>
    </div>
    <div class="fe-box">
        <img src="./img/features/f6.png" alt="">
        <h6>Free shipping</h6>
    </div>
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

<section id="banner" class="section-m1">
    <h4>Repair Services</h4>
    <h2>Up to<span> 70% off</span>-All t-shirts & Accessories</h2>
    <button class="normal">Explore more</button>
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

<section id="sm-banner" class="section-p1">
    <div class="banner-box">
        <h4>crazy deals</h4>
        <h2>buy 1 get 1 free</h2>
        <span>The best classic dress in on sale at cara</span>
        <button class="white">Learn more</button>
    </div>
    <div class="banner-box banner-box2">
        <h4>crazy deals</h4>
        <h2>buy 1 get 1 free</h2>
        <span>The best classic dress in on sale at cara</span>
        <button class="white">Collection</button>
    </div>
</section>

<section id="banner3" class="">
    <div class="banner-box">
        <h2>SEASONAL SALE</h2>
        <h3>Winter collection -50% OFF</h3>
    </div>
    <div class="banner-box banner-box2">
        <h2>SEASONAL SALE</h2>
        <h3>Winter collection -50% OFF</h3>
    </div>
    <div class="banner-box banner-box3">
        <h2>SEASONAL SALE</h2>
        <h3>Winter collection -50% OFF</h3>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ProjectShop\resources\views/home.blade.php ENDPATH**/ ?>