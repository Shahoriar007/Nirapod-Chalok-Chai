<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nirapod Chalok Chai</title>
    <link rel="apple-touch-icon" sizes="180x180" href="image/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="image/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="image/favicon/favicon-16x16.png">
    <link rel="manifest" href="image/favicon/site.webmanifest">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->

    <!-- <link href="css/loginForm.css" rel="stylesheet" /> -->
</head>

<body>
    <section class="registration">
        <div class="backtopage"><a href="{{ route('home') }}"><i class="fas fa-chevron-left"></i>Go to homepage</a></div>
        <div class="title">Login Here</div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 .reg-box mx-auto">


                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="user__details">
                            <div class="row">

                                <div class="input__box col-md-12">
                                    <span class="details">Email/phone/name</span>
                                    <input id="login" type="text" name="login" placeholder="01353456789" required>
                                </div>

                                <div class="input__box col-md-12">
                                    <span class="details">Password</span>
                                    <input id="password" type="password" name="password" placeholder="********" required>
                                </div>

                            </div>
                        </div>
                        <div class="button text-center">
                            <input type="submit" class="fire mb-2">
                            <div>Doesn't have account? <a href="{{ route('register') }}" style="color: #fbc72a;">Registration</a>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </section>


    <!------javascript-->
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/jquery.nice-select.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/6cc80f95ec.js" crossorigin="anonymous"></script>
    <script src="js/main.js" crossorigin="anonymous"></script>


    <script>
        (document).ready(function() {
            $('select').niceSelect();
        });
    </script>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>

</html>
