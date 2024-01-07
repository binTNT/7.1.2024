
<?php $__env->startSection('style','/css/cart.css'); ?>
<?php $__env->startSection('header'); ?>
<?php echo $__env->make('layouts.headerHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section id="banner">
    <h4>Repair Services</h4>
    <h2>Shopping Cart</h2>
</section>

<section id="cart" class="section-p1">
    <table width="100%">
        <thead>
            <tr>
                <td>Remove</td>
                <td>Image</td>
                <td>Product</td>
                <td>Price</td>
                <td>Quantity</td>
                <td>Subtotal</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="#"><i class="fa-regular fa-circle-xmark"></i></a></td>
                <td><img src="./img/products/f1.jpg" alt=""></td>
                <td>Cartoon Astronaut T-Shirts</td>
                <td>$118.19</td>
                <td><input type="number" value="1"></td>
                <td>$118.19</td>
            </tr>
            <tr>
                <td><a href="#"><i class="fa-regular fa-circle-xmark"></i></a></td>
                <td><img src="./img/products/f2.jpg" alt=""></td>
                <td>Cartoon Astronaut T-Shirts</td>
                <td>$118.19</td>
                <td><input type="number" value="1"></td>
                <td>$118.19</td>
            </tr>
            <tr>
                <td><a href="#"><i class="fa-regular fa-circle-xmark"></i></a></td>
                <td><img src="./img/products/f3.jpg" alt=""></td>
                <td>Cartoon Astronaut T-Shirts</td>
                <td>$118.19</td>
                <td><input type="number" value="1"></td>
                <td>$118.19</td>
            </tr>
        </tbody>
    </table>
</section>

<section id="cart-add" class="section-p1">
    <div id="coupon">
        <h3>Apply Coupon</h3>
        <div class="">
            <input type="text" placeholder="Enter Your Coupon">
            <button class="normal">Apply</button>
        </div>
    </div>
    <div id="subtotal">
        <h3>Cart Totals</h3>
        <table>
            <tr>
                <td>Cart Subtotal</td>
                <td>$335</td>
            </tr>
            <tr>
                <td>Shipping</td>
                <td>Free</td>
            </tr>
            <tr>
                <td><strong>Total</strong></td>
                <td><strong>$335</strong></td>
            </tr>
        </table>
        <button class="normal" onclick="window.location.href='payment.html'">Proceed to checkout</button>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ProjectShop\resources\views/cart.blade.php ENDPATH**/ ?>