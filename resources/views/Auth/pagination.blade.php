<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>STORE</title>
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
                <li><a class="active"href="{{ url("shop") }}">Shop</a></li>
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
                <li id="homecart"><a href="{{ url("cart") }}"><i class='bx bx-shopping-bag'></i></a></li>
                <a href="#" id="close"><i class='bx bx-chevron-right'></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="{{ url("cart") }}" ><i class='far fa-shopping-bag'></i></a>
            <i id="barge" class='bx bx-menu'></i>
        </div>
    </section>

    <section id="hedshop">
        <h2>FAST BUY AND FAST SHIPPING</h2>
        <p>Save More With Coupons & up to 70% OFF!</p>
    </section>

    <section id="product1" class="section-p1">
      <div class="container">
        <div class="pro" onclick="window.location.href='elements';">
          <img src="/image/products/f1.jpg" alt="">
          <div class="desc">
            <span>Zara</span>
            <h5>Cartoon Astronaut T-Shirts</h5>
            <div class="star">
              <i class='bx bxs-star'></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
              <i class="bx bxs-star"></i>
            </div>
            <h4>$100</h4>
          </div>
          <a href="#"><i class='bx bxs-shopping-bag-alt shopi'></i></a>
        </div>

         <div class="pro" onclick="window.location.href='elements';">
            <img src="/image/products/n1.jpg" alt="">
            <div class="desc">
              <span>Zara</span>
              <h5>Cartoon Astronaut T-Shirts</h5>
              <div class="star">
                <i class='bx bxs-star'></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
              </div>
              <h4>$100</h4>
            </div>
            <a href="#"><i class='bx bxs-shopping-bag-alt shopi'></i></a>
          </div>
          <div class="pro" onclick="window.location.href='elements';">
              <img src="/image/products/n2.jpg" alt="">
              <div class="desc">
                <span>lefties</span>
                <h5>Cartoon Astronaut T-Shirts</h5>
                <div class="star">
                  <i class='bx bxs-star'></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                </div>
                <h4>$80</h4>
              </div>
              <a href="#"><i class='bx bxs-shopping-bag-alt shopi'></i></a>
            </div>
            <div class="pro" onclick="window.location.href='elements';">
              <img src="/image/products/n3.jpg" alt="">
              <div class="desc">
                <span>American Eagle</span>
                <h5>Cartoon Astronaut T-Shirts</h5>
                <div class="star">
                  <i class='bx bxs-star'></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                </div>
                <h4>$60</h4>
              </div>
              <a href="#"><i class='bx bxs-shopping-bag-alt shopi'></i></a>
            </div>
            <div class="pro" onclick="window.location.href='elements';">
              <img src="/image/products/n4.jpg" alt="">
              <div class="desc">
                <span>DeFacto</span>
                <h5>Cartoon Astronaut T-Shirts</h5>
                <div class="star">
                  <i class='bx bxs-star'></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                </div>
                <h4>$400</h4>
              </div>
              <a href="#"><i class='bx bxs-shopping-bag-alt shopi'></i></a>
            </div>
            <div class="pro" onclick="window.location.href='elements';">
              <img src="/image/products/n5.jpg" alt="">
              <div class="desc">
                <span>Revolve</span>
                <h5>Cartoon Astronaut T-Shirts</h5>
                <div class="star">
                  <i class='bx bxs-star'></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                </div>
                <h4>$70</h4>
              </div>
              <a href="#"><i class='bx bxs-shopping-bag-alt shopi'></i></a>
            </div>
            <div class="pro" onclick="window.location.href='elements';">
              <img src="/image/products/n6.jpg" alt="">
              <div class="desc">
                <span>Urban Outfitters</span>
                <h5>Cartoon Astronaut T-Shirts</h5>
                <div class="star">
                  <i class='bx bxs-star'></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                </div>
                <h4>$80</h4>
              </div>
              <a href="#"><i class='bx bxs-shopping-bag-alt shopi'></i></a>
            </div>
            <div class="pro" onclick="window.location.href='elements';">
              <img src="/image/products/n7.jpg" alt="">
              <div class="desc">
                <span>ASOS</span>
                <h5>Cartoon Astronaut T-Shirts</h5>
                <div class="star">
                  <i class='bx bxs-star'></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                </div>
                <h4>$60</h4>
              </div>
              <a href="#"><i class='bx bxs-shopping-bag-alt shopi'></i></a>
            </div>
            <div class="pro" onclick="window.location.href='elements';">
              <img src="/image/products/n8.jpg" alt="">
              <div class="desc">
                <span>H&M</span>
                <h5>Cartoon Astronaut T-Shirts</h5>
                <div class="star">
                  <i class='bx bxs-star'></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                </div>
                <h4>$40</h4>
              </div>
              <a href="#"><i class='bx bxs-shopping-bag-alt shopi'></i></a>
            </div>
        </div>
    </section>

    <section id="pagination" class="section-p1">
        <a href="{{ url("shop") }}">1</a>
        <a href="{{ url("pagination") }}">2</a>
        <a href="#"><i class='bx bx-chevron-right' style='color:#060505'  ></i></a>
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





















