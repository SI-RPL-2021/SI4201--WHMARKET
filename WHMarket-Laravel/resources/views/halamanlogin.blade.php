<!doctype html>

<html lang='ind'>
<head>

   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="../assets/css/halaman-login.css">
   <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
   

   <script src="../assets/js/jquery.min.js"></script>
   <script src="../assets/js/bootstrap.min.js"></script>
   <script src="../assets/js/script.js"></script>
   <title>WHMARKET</title>
</head>
<body>

<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-3 mx-auto">
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 pb-5">
                    <div class="row"> <img src="/assets/img/WHMARKET.png" width="30" height="40" class="logo"> </div>
                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img src="/assets/img/login-image.png" width="600" height="380"> </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card2 card border-0 px-4 py-5">
                    <div class="row mb-4 px-3">
                        
                    </div>
                    <div class="row px-3 mb-4">
                    <h3> Welcome Back. Lets Get Back To Work</h3>
                    </div>
                    <form class="form-auth" action="{{ url('InputLogin') }}" method="POST">
                @csrf
                        <div class="row px-3"> <label class="mb-1">
                        <br>
                                <h6 class="mb-0 text-sm">Email Address</h6>
                                <br>
                            </label> <input type="email" name="email" placeholder="Enter a valid email address"> </div>
                        <div class="row px-3"> <label class="mb-1">
                <br>
                                <h6 class="mb-0 text-sm">Password</h6>
                                <br>
                            </label> <input type="password" name="password" placeholder="Enter password"> </div>
                        <div class="row px-3 mb-4">
                        </div>
                        <br>
                        <div class="row mb-3 px-3"> <button type="submit" class="btn btn-blue text-center">Login</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-blue py-4">
            <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2021. WHMARKET All rights reserved.</small>
            </div>
        </div>
    </div>
</div>    
 </body>
 <html>