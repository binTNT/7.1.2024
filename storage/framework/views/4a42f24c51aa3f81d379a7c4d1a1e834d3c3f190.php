<section id="header">
    <a href="#"><img src="/img/logo.png" alt="" class="logo"></a>
    <div class="search">
        <input type="text" placeholder="Search..." class="input">
        <i class="fa-solid fa-magnifying-glass" onclick="search()"></i>
    </div>
    <div>
        <ul class="navbar">
            <li><a href="/" class=" tab-item">Home</a></li>
            <li><a href="/shop" class="tab-item">Shop</a></li>
            <li><a href="/blog" class="tab-item">Blog</a></li>
            <li><a href="/about" class="tab-item">About</a></li>
            <li><a href="/contact" class="tab-item">Contact</a></li>
            <li><a href="/cart" class="tab-item cart"><i class="fa-solid fa-bag-shopping"></i></a></li>

            <i class="fa-solid fa-xmark" id="close" onclick="closeNavbar()"></i>

        </ul>
    </div>
    <div id="mobile">
        <a href="cart.html" class="tab-item"><i class="fa-solid fa-bag-shopping"></i></a>
        <i class="fa-solid fa-bars" id="bar" onclick="showNavbar()"></i>
    </div>
</section><?php /**PATH C:\xampp\htdocs\ProjectShop\resources\views/layouts/headerShop.blade.php ENDPATH**/ ?>