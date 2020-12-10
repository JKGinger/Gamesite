<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Main CSS -->
    <link rel="stylesheet" href="css/style.css">
    <title>Gamesite</title>
</head>
<body>

<div id="signup">
        <h3 class="text-center text-white pt-5">GameSite Signup Page</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="includes/signupcode.php" method="post">
                            <h3 class="text-center text-info">Signup</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="uidUsers" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="text" class="text-info">Email:</label><br>
                                <input type="text" name="emailUsers" id="mail" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="pwdUsers" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Repeat Password:</label><br>
                                <input type="password" name="pwdUsers-repeat" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <br>
                                <input type="submit" name="signup-submit" class="btn btn-info btn-md" value="Submit Signup">
                            </div>
                            <br>
                            <br>
                            <div id="register-link" class="text-right">
                                <a href="index.php" class="text-info">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>

</footer>


</body>
</html>