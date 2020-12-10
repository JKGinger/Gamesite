<?php
    require "header.php";
    require "includes/update.php";
?>



<main>

<div id="profile">
        <h3 class="text-center text-white pt-5">GameSite</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" method="POST">
                        <input type="hidden"  name="name" value="<?php echo $id;?>">
                            <h3 class="text-center text-info">Your profile</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="uidUsers" id="username" class="form-control" value="<?php echo $uidUsers;?>">
                            </div>  
                            <div class="form-group">
                                <label for="username" class="text-info">Real name:</label><br>
                                <input type="text" name="realNameUsers" id="username" class="form-control" value="<?php echo $realNameUsers;?>">
                            </div>  
                            <div class="form-group">
                                <label for="email" class="text-info">Email:</label><br>
                                <input type="text" name="emailUsers" id="email" class="form-control" value="<?php echo $emailUsers;?>">
                            </div>
                            <div class="form-group">
                                <label for="email" class="text-info">Mobil nr:</label><br>
                                <input type="text" name="phoneUsers" id="email" class="form-control" value="<?php echo $PhoneUsers;?>">
                            </div>
                            <div class="form-group">
                                <label for="email" class="text-info">Address:</label><br>
                                <input type="text" name="addressUsers" id="email" class="form-control" value="<?php echo $addressUsers;?>">
                            </div>
                           <!-- <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="pwdUsers" id="password" class="form-control">
                            </div>
                         -->
                            <div class="form-group">
                                <br>
                                <input type="submit" value="Update info" class="btn btn-info btn-md" >
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>







</main>

<?php
    require "footer.php"
?>