<?php
include ('lang/language.php'); //Вмъкваме езика
include ('inc/head.php'); //Вмъкваме HEAD
echo '<body>';
include ('inc/nav.php'); //Вкарваме nav-a
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        404 Error Page
                    </h3>
                </div>
                <div class="panel-body center">
                    <img src="public/images/warning.png" class="warning">
                    <p><h2><?php echo getLanguageText('404error'); ?></h2></p>
                </div>
                <div class="panel-footer">
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