<?php
session_start();
if (isset($_SESSION['userSession'])!="") {
 header("Location: main.php");
 exit;
}
include ('lang/language.php'); //Вмъкваме езика
include ('inc/head.php'); //Вмъкваме HEAD
echo '<body>';
include ('inc/nav.php'); //Вкарваме nav-a
?>
<div class="container">
    <?php include ('inc/slider.php'); //Вкарваме слайдa ?>
    <div class="row">
        <div class="col-sm-5">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo getLanguageText('SignUp'); ?></h3>
                </div>
                <div class="panel-body">
                    <form id='register' action='func/register.php' method='post' accept-charset='UTF-8'>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                <input type="text" class="form-control" id="username" name="Username" placeholder="<?php echo getLanguageText('username');?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                <input type="text" class="form-control" id="RealName" name="RealName" placeholder="<?php echo getLanguageText('RealName');?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                                <input type="email" class="form-control" id="Email" name="Email" placeholder="<?php echo getLanguageText('Email');?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                <input type="password" class="form-control" id="Password" name="Password" placeholder="<?php echo getLanguageText('password');?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                <input type="password" class="form-control" id="PasswordConfirmation" name="repassword" placeholder="<?php echo getLanguageText('ConfirmPassword');?>">
                            </div>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block signup-btn" name="submit" type="submit"><?php echo getLanguageText('SignUp'); ?></button>
                    </form>
                </div>
                <div class="panel-footer">
                </div> 
            </div>
        </div>

        <div class="col-sm-1"></div>
        <div class="col-sm-1"></div>


        <div class="col-sm-5">
            <section id="logo">
                <a href="#"><img src="public/images/logo.png" class="img-responsive"  alt=""></a>
            </section>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <?php echo getLanguageText('Login'); ?>
                    </h3>
                </div>
                <div class="panel-body">
                    <?php
                    if(isset($_GET['error'])){
                        echo '<div class="alert alert-dismissable alert-danger">Грешно потребителско име или парола!</div>';
                    }
                    ?>
                    <div>
                    <form method="POST" action="func/login.php">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                <input type="text" class="form-control" id="username" name="username" value="" placeholder="<?php echo getLanguageText('username');?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                <input type="password" class="form-control" id="password" name="password" value="" placeholder="<?php echo getLanguageText('password');?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <label class="checkbox-inline"><input type="checkbox" value=""><?php echo getLanguageText('RememberMe');?></label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="forgotpw">
                                <a href="#"><?php echo getLanguageText('ForgotPwd');?>?</a>
                            </div>
                        </div>
                         <button class="btn btn-lg btn-primary btn-block signup-btn" name="submit" type="submit"><?php echo getLanguageText('Login');?></button>
                    </form>

                </div>
                <div class="panel-footer">        
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php include ('inc/footer.php'); ?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="public/js/bootstrap.min.js"></script>
</body>
</html>