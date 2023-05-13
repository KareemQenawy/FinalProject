{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page_title')</title>
</head>
<body> --}}
    {{-- <nav class="navbar navbar-expand-lg bg-secondary ">
        <div class="container">
          <a class="navbar-brand" href="{{ url("/") }}">KarimStore</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>

          <div class="nav justify-content-center" id="navbarSupportedContent">
             <ul class="navbar-nav ms-auto mb-0 mb-lg-0"> --}}

             {{-- <li class="nav-item">
                <a class="nav-link active"  href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active"  href="{{ route("getStack") }}" >Test Route</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active"  href="{{ url("products") }}">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active"  href="{{ url("categories") }}">Categories</a>
            </li> --}}
              {{-- @if(Auth::user() && Auth::user()->role == "admin") --}}
              {{-- <li class="nav-item">
                <a class="nav-link active"  href="{{ url("products/create") }}">Create Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active"  href="{{ url("categories/create") }}">Create Category</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active"  href="{{ url("/addUser") }}">Create User</a>
              </li>
              @endif
              <li class="nav-item">
                <a class="nav-link active"  href="{{ url("/aboutus") }}">About us</a>
              </li> --}}











{{--
          </div>
        </div>
    </nav> --}}
{{--

     <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container">
          <a class="navbar-brand" href="{{ url("/") }}">KarimStore</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                    <a class="nav-link"  href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active "  href="{{ url("posts") }}" >Men</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active "  href="{{ route("posts.index") }}" >Women</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active "  href="{{ url("posts/create") }}" >Kids</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active "  href="{{ url("posts/1") }}" >Explicabo Quia</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active"  href="/">Hic Ipsum</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
 --}}


    {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, ipsum obcaecati dolorem repellendus facere quae impedit eos ea fuga dicta nobis, laudantium, et nulla repudiandae omnis perspiciatis corrupti architecto odit!</p> --}}
    {{-- Content --}}




    {{-- <footer class="mt-5 py-5 bg-danger">
        <p class="text-center text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, aspernatur.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> --}}


{{-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}





















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
            <ul id="navbar" >
                <li><a class="active" href="/">Home</a></li>
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
                <li id="homecart"><a href="{{ url("cart") }}"><i class='bx bx-shopping-bag'></i></a></li>
                <a href="#" id="close"><i class='bx bx-chevron-right'></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="{{ url("cart") }}" ><i class='far fa-shopping-bag'></i></a>
            <i id="barge" class='bx bx-menu'></i>
        </div>
    </section>

    <section id="homepage">
        <h4>Trade In Offer</h4>
        <h2>Super Value deals</h2>
        <h1>On All Products</h1>
        <p>Save More With Coupons & up to 70% OFF!</p>
        <button>Shop Now</button>
    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="/image/features/f1.png" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="/image/features/f2.png" alt="">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="/image/features/f3.png" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="/image/features/f4.png" alt="">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="/image/features/f5.png" alt="">
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="/image/features/f6.png" alt="">
            <h6>Support</h6>
        </div>
    </section>

    <section id="product1" class="section-p1">
      <h2>Featured Products</h2>
      <p>Summer Collection New Modern Design</p>
      <div class="container">
        <div class="pro">
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
        <div class="pro">
            <img src="/image/products/f2.jpg" alt="">
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
          <div class="pro">
            <img src="/image/products/f3.jpg" alt="">
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
          <div class="pro">
            <img src="/image/products/f4.jpg" alt="">
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
          <div class="pro">
            <img src="/image/products/f5.jpg" alt="">
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
          <div class="pro">
            <img src="/image/products/f6.jpg" alt="">
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
          <div class="pro">
            <img src="/image/products/f7.jpg" alt="">
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
          <div class="pro">
            <img src="/image/products/f8.jpg" alt="">
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

    <section id="banner" class="section-m1">
        <h4>Repair Services</h4>
        <h2>Up To <span>70% OFF</span> ALL T-Shirts & Accessories</h2>
        <button class="button">Explore More</button>
    </section>

    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>Summer Collection New Modern Design</p>
        <div class="container">
          <div class="pro">
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
          <div class="pro">
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
            <div class="pro">
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
            <div class="pro">
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
            <div class="pro">
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
            <div class="pro">
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
            <div class="pro">
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
            <div class="pro">
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

    <section id="bannersmall" class="section-p1">
        <div class="banner-box">
            <h4>Crazy Deals</h4>
            <h2>buy 1 get 1 free</h2>
            <span>The Best Classic Dress Is On Sale At Cara</span>
            <button class="but">Learn More</button>
        </div>
    </section>

    <section id="banner2">
        <div class="banner-box">
            <h2>SEASONAL SALE</h2>
            <h3>Winter Collection -80% OFF</h3>
        </div>
        <div class="banner-box box2">
            <h2>NEW FOOTWEAR COLLECTION</h2>
            <h3>Spring / Summer 2023</h3>
        </div>
        <div class="banner-box box3">
            <h2>T-SHIRTS</h2>
            <h3>New Trendy Printe</h3>
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















































</body>
</html>



