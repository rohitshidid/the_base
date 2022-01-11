<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/login-form-1.css">
    <link rel="stylesheet" href="assets/css/login-form.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="background: rgb(217,180,245);">
    <nav class="navbar navbar-light navbar-expand-md" style="color: var(--indigo);background: #6c07bb;">
        <div class="container-fluid"><a class="navbar-brand" href="" style="color:aliceblue">MCQ Software</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" href="#" style="color:aliceblue">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="color:aliceblue">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="color:aliceblue">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container full-height">
        <div class="row flex center v-center full-height">
            <div class="col-8 col-sm-4 col-md-6">
                <div class="form-box" style="background-color: wheat;">
                    <form action="logincheck.php" method="post">
                        <fieldset>
                            <legend>Sign in</legend><img id="avatar" class="avatar round" src="assets/img/avatar.png">
                            <input class="form-control" type="text" id="uname" name="uname" placeholder="username">
                            <input class="form-control" type="password" id="pwd" name="pwd" placeholder="password">
                            <input class="btn btn-outline-secondary" type="submit" value="Login" name='logme'>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>