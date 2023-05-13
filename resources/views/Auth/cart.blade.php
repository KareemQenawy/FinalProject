<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="/css/shop.css">
</head>
<body class="back">

    <section id="header" >
        <h4 class="logo">KARIM STORE</h4>
        <div>
            <ul id="navbar">
                <li><a  href="/">Home</a></li>
                <li><a href="{{ url("shop") }}">Shop</a></li>
                <li><a href="{{ url("contact") }}">Contact</a></li>
                @if(! Auth::user())
                <li class="nav-item">
                  <a class="nav-link"  href="{{ url("login") }}">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link"  href="{{ url("register") }}">Register</a>
                </li>
                @else
                <li class="nav-item">
                  <a class="nav-link"  href="{{ url("logout") }}">Logout</a>
                </li>
                @endif
                <li id="homecart" ><a class="active"  href="{{ url("cart") }}"><i class='bx bx-shopping-bag'></i></a></li>
                <a href="#" id="close"><i class='bx bx-chevron-right'></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="{{ url("cart") }}" ><i class='far fa-shopping-bag'></i></a>
            <i id="barge" class='bx bx-menu'></i>
        </div>
    </section>

    <section id="hcontact">
        <h2>#let's talk</h2>
        <p>Leave a message , if you need any help</p>
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
                    <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                    <td><img src="/image/products/f1.jpg" alt=""></td>
                    <td>Cartoon Astronaut T-Shirts</td>
                    <td>$100</td>
                    <td><input type="number" value="1"></td>
                    <td>$100</td>
                </tr>
                <tr>
                    <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                    <td><img src="/image/products/f2.jpg" alt=""></td>
                    <td>Cartoon Astronaut T-Shirts</td>
                    <td>$100</td>
                    <td><input type="number" value="1"></td>
                    <td>$100</td>
                </tr>
                <tr>
                    <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                    <td><img src="/image/products/f3.jpg" alt=""></td>
                    <td>Cartoon Astronaut T-Shirts</td>
                    <td>$100</td>
                    <td><input type="number" value="1"></td>
                    <td>$100</td>
                </tr>
                <tr>
                    <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                    <td><img src="/image/products/f4.jpg" alt=""></td>
                    <td>Cartoon Astronaut T-Shirts</td>
                    <td>$100</td>
                    <td><input type="number" value="1"></td>
                    <td>$100</td>
                </tr>
                <tr>
                    <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                    <td><img src="/image/products/f5.jpg" alt=""></td>
                    <td>Cartoon Astronaut T-Shirts</td>
                    <td>$100</td>
                    <td><input type="number" value="1"></td>
                    <td>$100</td>
                </tr>
            </tbody>
        </table>
    </section>

    <section id="cart-add" class="section-p1">
        <div id="coupon">
            <h3>Apply Coupon</h3>
            <div>
                <input type="text" placeholder="Enter Your Coupn">
                <button class="button">Apply</button>
            </div>
        </div>

        <div id="total">
            <h3>Total</h3>
            <table>
                <tr>
                    <td>Cart Total</td>
                    <td>$500</td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>FREE</td>
                </tr>
                <tr>
                    <td><strong>TOTAL</strong></td>
                    <td><strong>$500</strong></td>
                </tr>
            </table>
            <button class="button">Buy</button>
        </div>
    </section>

    <footer class="section-p1">
       <div class="col">
        <h4 class="logo">KARIM STORE</h4>
        <h5>Contact</h5>
        <p><strong>Address: </strong> Egypt</p>
        <p><strong>Phone: </strong>01032802828</p>
       </div>
       <div class="follow">
        <h4>FOLLOW US</h4>
        <div class="icon">
            <i class='bx bxl-facebook-circle ' style='color:#ecba56bd' ></i>
            <i class='bx bxl-twitter' style='color:#ecba56bd' ></i>
            <i class='bx bxl-instagram' style='color:#ecba56bd' ></i>
            <i class='bx bxl-whatsapp' style='color:#ecba56bd'></i>
        </div>
       </div>


       <div class="col">
        <h4>About</h4>
        <a href="#">About Us</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms & Conditions</a>
        <a href="#">Contact Us</a>
        <a href="#">Help</a>
       </div>

       <div class="col install">
        <h4>Install App</h4>
        <p>From App Store OR Google Play</p>
        <div class="row">
            <img src="/image/pay/app.jpg" alt="">
            <img src="/image/pay/play.jpg" alt="">
        </div>
        <p>Secured Payment Gateways</p>
        <img src="/image/pay/pay.png" alt="">
       </div>

       <div class="copyright">
        <p>@KareemHussein_Project_Store.</p>
       </div>
    </footer>




    <script src="/js/screan.js"></script>


</body>
</html>
