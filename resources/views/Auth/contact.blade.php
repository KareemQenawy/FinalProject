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
                <li><a class="active" href="{{ url("contact") }}">Contact</a></li>
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

    <section id="hcontact">
        <h2>#let's talk</h2>
        <p>Leave a message , if you need any help</p>
    </section>

    <section id="contact-details" class="section-p1">
        <div class="icondetails">
            <span>Get In Touch</span>
            <h2>Visin one of agency locations or contact us today</h2>
            <h3>Head Office</h3>
        </div>

        <div class="icondetails">
            <li>
                <i class="bx bx-map"></i>
                <p>cairo</p>
            </li>
            <li>
                <i class="bx bx-envelope"></i>
                <p>example@example.com</p>
            </li>
            <li>
                <i class="bx bx-phone"></i>
                <p>+201032802828</p>
            </li>
            <li>
                <i class="bx bx-alarm"></i>
                <p>Suturday to Friday: 11.00am to 11.00pm</p>
            </li>
        </div>

        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13078512.561366474!2d-84.07952488937364!3d36.84256632112923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87f62f6c422bd3d7%3A0xf43f1d8c4074eff7!2sZARA!5e0!3m2!1sar!2seg!4v1683936457742!5m2!1sar!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <section id="form-details">
        <form action="" class="icondetailss">
            <span>Leave a message</span>
            <h2>we love hear from you</h2>
            <input type="text" placeholder="name">
            <input type="text" placeholder="email">
            <input type="text" placeholder="subject">
            <textarea name="" id="" cols="30" rows="10" placeholder="Your message"></textarea>
            <button class="button">Submit</button>
        </form>
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
