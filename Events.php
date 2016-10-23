<?php
session_start();
if (!isset($_SESSION['userSession']) != "") {
    header("Location: welcome.php");
    exit;
}
require_once 'connectDB.php';
include ('func/getUserInfo.php');
include ('lang/language.php'); //Вмъкваме езика
include ('inc/head.php'); //Вмъкваме HEAD
echo '<body>';
?>
<?php include ('inc/navigation.php'); ?>


<div class="container">

    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <?php include('inc/leftPanel.php'); ?>
                <div class="col-md-9">
                    <?php
                    include ('section/events/index.php'); //показва статусите
                    ?>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include 'inc/footer.php'; ?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="public/js/bootstrap.min.js"></script>
</body>
</html>