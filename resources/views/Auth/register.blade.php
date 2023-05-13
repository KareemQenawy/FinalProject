<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="/css/loginregister.css">
    <title>Register</title>
</head>
<body>
   <div class="container">
      <div class="imgbox">
        <img src="/image/about/a5.jpg" alt="">
      </div>
        <div class="form">
            <form action="{{ url("register") }}" method="POST">
                @csrf
                <h2>redister</h2>
                <div class="inputfield">
                    <span class="fa fa-user"></span>
                    <input type="text"  name="name" placeholder="Enter your name">
                </div>
                <div class="inputfield">
                    <span class="fa fa-envelope"></span>
                    <input type="email"  name="email" placeholder="Enter your email">
                </div>
                <div class="inputfield">
                    <span class="fa fa-key"></span>
                    <input type="password"  name="password" placeholder="Enter your password">
                </div>
                <button type="submit" class="btn">Register</button>
            </form>
        </div>
   </div>
</body>
</html>





{{-- <h2 class="text-center text-info my-4">welcome to our website</h2>
<form action="{{ url("register") }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Full Name </label>
      <input type="text" class="form-control" name="name">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email </label>
      <input type="text" class="form-control" name="email">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" name="password">
    </div>
    <button type="submit" class="btn btn-info">Register</button>
</form> --}}
