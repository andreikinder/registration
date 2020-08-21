<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">


    <link rel="stylesheet" href="style.css">


    <title>Registration form</title>
</head>
<body>
<div class="container">
    <?php
        if($_COOKIE['user'] == ''):
    ?>
    <div class="row">
        <div class="col-md-6">
            <!-- Default form login -->
            <form class="text-center border border-light p-5" action="validation-form/auth.php" method="post">

                <p class="h4 mb-4">Sign in</p>

                <!-- Email -->
                <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail" name="login">

                <!-- Password -->
                <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password" name="pass">

<!--                <div class="d-flex justify-content-around">-->
<!--                    <div>-->
<!--                     Remember me -->
<!--                        <div class="custom-control custom-checkbox">-->
<!--                            <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">-->
<!--                            <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div>-->
<!--                       Forgot password -->
<!--                        <a href="">Forgot password?</a>-->
<!--                    </div>-->
<!--                </div>-->

                <!-- Sign in button -->
                <button class="btn btn-info btn-block my-4" type="submit">Sign in</button>

                <!-- Register -->
<!--                <p>Not a member?-->
<!--                    <a href="">Register</a>-->
<!--                </p>-->

                <!-- Social login -->
<!--                <p>or sign in with:</p>-->
<!---->
<!--                <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>-->
<!--                <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>-->
<!--                <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>-->
<!--                <a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>-->

            </form>
            <!-- Default form login -->


        </div>
        <div class="col-md-6">
            <!-- Default form register -->
            <form class="text-center border border-light p-5" action="validation-form/check.php" method="post">

                <p class="h4 mb-4">Sign up</p>

                <!-- E-mail -->
                <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail" name="login">

                <!-- Name -->
                <input type="text" id="defaultRegisterFormFirstName" class="form-control mb-4" placeholder="Name" name="name">

                <!-- Password -->
                <input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock" name="pass">
<!--                <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">-->
<!--                    At least 8 characters and 1 digit-->
<!--                </small>-->

                <!-- Phone number -->
<!--                <input type="text" id="defaultRegisterPhonePassword" class="form-control" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock">-->
<!--                <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">-->
<!--                    Optional - for two step authentication-->
<!--                </small>-->

                <!-- Newsletter -->
<!--                <div class="custom-control custom-checkbox">-->
<!--                    <input type="checkbox" class="custom-control-input" id="defaultRegisterFormNewsletter">-->
<!--                    <label class="custom-control-label" for="defaultRegisterFormNewsletter">Subscribe to our newsletter</label>-->
<!--                </div>-->

                <!-- Sign up button -->
                <button class="btn btn-info my-4 btn-block" type="submit">Sign up</button>

                <!-- Social register -->
<!--                <p>or sign up with:</p>-->
<!---->
<!--                <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>-->
<!--                <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>-->
<!--                <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>-->
<!--                <a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>-->

<!--                <hr>-->

                <!-- Terms of service -->
<!--                <p>By clicking-->
<!--                    <em>Sign up</em> you agree to our-->
<!--                    <a href="" target="_blank">terms of service</a>-->
<!--                </p>-->

            </form>
            <!-- Default form register -->
        </div>
    </div>
    <? else: ?>
        <p>Hello <?=$_COOKIE['user'] ?>. Click to logout <a href="/exit.php">Logout</a></p>
    <? endif; ?>

</div>



</body>


<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
</html>
