<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="/css/loginregister.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="imgbox">
            <img src="/image/about/a5.jpg" alt="">
        </div>
        <div class="form">
            <form action="{{ url("login") }}" method="POST">
@csrf
                 <h2>Login</h2>
                <div class="inputfield">
                    <span class="fa fa-user"></span>
                    <input type="text" name="email" placeholder="Enter your email">
                </div>

                <div class="inputfield">
                    <span class="fa fa-key"></span>
                    <input type="password" for="exampleInputPassword1" name="password" placeholder="Enter your password">
                </div>
                 <button type="submit" class="btn">Login</button>
             </form>
        </div>
    </div>
</body>
</html>


