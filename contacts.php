<?php
session_start();
include ('lang/language.php'); //Вмъкваме езика
include ('inc/head.php'); //Вмъкваме HEAD
echo '<body>';
include ('inc/nav.php'); //Вкарваме nav-a
?>
<div class="container">
<div class="row">
    <div class="col-md-12">
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <?php echo getLanguageText('Contacts');?>
                    </h3>
                </div>
                <div class="panel-body">
                    <form>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input type="text" class="form-control" id="inputName" name="inputName" placeholder="<?php echo getLanguageText('Name');?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input type="text" class="form-control" id="inputName" name="inputName" placeholder="<?php echo getLanguageText('LastName');?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="text" class="form-control" id="inputEmail" name="inputEmail" placeholder="<?php echo getLanguageText('Email');?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-text-size"></span>
                                </span>
                                <input type="text" class="form-control" id="inputSubject" name="inputSubject" placeholder="<?php echo getLanguageText('Title');?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span>
                                </span>
                                <textarea class="form-control" rows="4" id="inputMessage" name="inputMessage" placeholder="<?php echo getLanguageText('Message');?>..."></textarea>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="panel-footer">
                    <a class="btn btn-lg btn-primary btn-block signup-btn" href="#"><?php echo getLanguageText('Send');?> <?php echo getLanguageText('Message');?></a>
                </div>
            </div>
        </div>



        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <?php echo getLanguageText('AboutUs');?>
                    </h3>
                </div>
                <div class="panel-body">
                    <p><b>Кои сме ние?</b></p>
                    <p>Примерен Текст !!!</p>
                    <p>Примерен Текст !!!</p>
                    <p>Примерен Текст !!!</p>
                    <p><b>Защо ние?</b></p>
                    <p>Примерен Текст !!!</p>
                    <p>Примерен Текст !!!</p>
                    <p>Примерен Текст !!!</p>
                    <p><b>Нашата мисия...</b></p>
                    <p>Примерен Текст !!!</p>
                    <p>Примерен Текст !!!</p>
                    <p>Примерен Текст !!!</p>
                </div>
                <div class="panel-footer contact">

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