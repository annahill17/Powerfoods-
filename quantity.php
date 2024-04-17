<body>
    <h1>Shopping Cart</h1>

    <?php
  include 'includes/header.php';

?>
    <div class="shopping-cart">
      <div class="product">
        <div class="product-image">
          <img src="img/strawberries.jpg">
        </div>
        <div class="product-details">
          <div class="product-title">Sweet thing</div>
          <p5 class="product-description">The best strawberries of all time that give you the most epic power!</p5>
        </div>
        <div class="product-price">20.00</div>
        <div class="product-quantity">
          <input type="number" value="2" min="1">
        </div>
        <div class="product-removal">
          <button class="remove-product">
            Remove
          </button>
        </div>
        <div class="product-line-price">21.09</div>
      </div>
      <div class="product">
          <div class="product-image">
            <img src="img/cherries.jfif">
          </div>
          <div class="product-details">
            <div class="product-title">Sweet Cherries</div>
            <p6 class="product-description">The most juiciest piece of fruit that tastes so good and also gives powers!</p6>
          </div>
          <div class="product-price">25.99</div>
          <div class="product-quantity">
            <input type="number" value="1" min="1">
          </div>
          <div class="product-removal">
            <button class="remove-product">
              Remove
            </button>
          </div>
          <div class="product-line-price">26.65</div>
        </div>
      <div class="totals">
        <div class="totals-item">
          <label5>Subtotal</label5>
          <div1 class="totals-value" id="cart-subtotal">47.74</div1>
        </div>
        <div class="totals-item">
          <label8>Tax (5%)</label8>
          <div2 class="totals-value" id="cart-tax">3.60</div2>
        </div>
        <div class="totals-item">
          <label7>Shipping</label7>
          <div2 class="totals-value" id="cart-shipping">10.00</div2>
        </div>
        <div class="totals-item totals-item-total">
          <label7>Grand Total</label7>
          <div3 class="totals-value" id="cart-total">61.34</div3>
        </div>
      </div>
          
          <a href="checkout.html" class="checkout">Checkout</a>
    </div>
    
    <div class="shopping-cart">
      <div class="product">
        <div class="product-image">
          <img src="img/">
        </div>
        <div class="product-details">
          <div class="product-title">Sweet thing</div>
          <p5 class="product-description">The best strawberries of all time that give you the most epic power!</p5>
        </div>
        <div class="product-price">20.00</div>
        <div class="product-quantity">
          <input type="number" value="2" min="1">
        </div>
        <div class="product-removal">
          <button class="remove-product">
            Remove
          </button>
        </div>
    
    <footer class="bg-body-tertiary text-center">
      <!-- Grid container -->
      <div class="container p-4 pb-0">
        <!-- Section: Social media -->
        <section class="mb-4">
          <!-- Facebook -->
          <a
          data-mdb-ripple-init
            class="btn text-white btn-floating m-1"
            style="background-color: #3b5998;"
            href="#!"
            role="button"
            ><i class="fab fa-facebook-f"></i
          ></a>
    
          <!-- Twitter -->
          <a
            data-mdb-ripple-init
            class="btn text-white btn-floating m-1"
            style="background-color: #55acee;"
            href="#!"
            role="button"
            ><i class="fab fa-twitter"></i
          ></a>
    
          <!-- Google -->
          <a
            data-mdb-ripple-init
            class="btn text-white btn-floating m-1"
            style="background-color: #dd4b39;"
            href="#!"
            role="button"
            ><i class="fab fa-google"></i
          ></a>
    
          <!-- Instagram -->
          <a
            data-mdb-ripple-init
            class="btn text-white btn-floating m-1"
            style="background-color: #ac2bac;"
            href="#!"
            role="button"
            ><i class="fab fa-instagram"></i
          ></a>
    
          <!-- Linkedin -->
          <a
            data-mdb-ripple-init
            class="btn text-white btn-floating m-1"
            style="background-color: #0082ca;"
            href="#!"
            role="button"
            ><i class="fab fa-linkedin-in"></i
          ></a>
          <!-- Github -->
          <a
            data-mdb-ripple-init
            class="btn text-white btn-floating m-1"
            style="background-color: #333333;"
            href="#!"
            role="button"
            ><i class="fab fa-github"></i
          ></a>
        </section>
        <!-- Section: Social media -->
      </div>
      <!-- Grid container -->
    
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2020 Copyright:
      <a class="text-body" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
    </footer>