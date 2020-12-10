<?php
    require "header.php"
?>

<main>
<div id="contact">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="includes/sendEmail.php" method="post">
                            <h3 class="text-center text-info">Contact us</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Name:</label><br>
                                <input type="text" name="name" id="username" class="form-control" value="<?php echo $_SESSION['userRealName'];?>">
                            </div>
                            <div class="form-group">
                                <label for="email" class="text-info">Email</label><br>
                                <input type="text" name="mail" id="email" class="form-control" value="<?php echo $_SESSION['userEmail'];?>">
                            </div>
                            <div class="form-group">
                                <label for="email" class="text-info">Subject</label><br>
                                <input type="text" name="subject" id="email" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label for="txt" class="text-info">Message</label><br>
                                <textarea type="text" name="message" maxlength="200" class="form-control" style="width: 100%; height: 185px;" placeholder="max 200 characters"></textarea>
                            </div>
                            <div class="form-group">
                                <br>
                                <input type="submit" name="sendMailSubmit" class="btn btn-info btn-md" value="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script src="js/contactVali.js"></script>
<?php
    require "footer.php"
?>