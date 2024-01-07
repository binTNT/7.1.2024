
<?php $__env->startSection('style',''); ?>
<?php $__env->startSection('header'); ?>
<?php echo $__env->make('layouts.headerHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section id="prodetails" class="section-p1">
    <div class="single-pro-image">
        <img src="/img/products/<?php echo e($product->img); ?>" alt="" width="100%" id="mainImg">
    </div>
    <div class="single-pro-details">
        <h6>Home / T-shirt</h6>
        <h4><?php echo e($product->name); ?></h4>
        <h2>$<?php echo e($product->price); ?></h2>
        <select name="" id="">
            <option value="">Select Size</option>
            <option value="">XL</option>
            <option value="">XXL</option>
            <option value="">Small</option>
            <option value="">Large</option>
        </select>
        <input type="number" value="1">
        <button class="normal">Add To Cart</button>
        <h4>Product Details</h4>
        <span><?php echo e($product->description); ?></span>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ProjectShop\resources\views/product.blade.php ENDPATH**/ ?>