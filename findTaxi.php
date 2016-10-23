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
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <?php echo getLanguageText('BlackTaxi');?>
                            </h3>
                        </div>
                        <div class="panel-body">


         <div class="box ">
          <div class="box-body">
      <div class=" well-sm well-social-post">
        <form>
            <div class="user-block">
            <img class="img-circle " src="public/images/guest4.png" alt="User Image">
            <textarea class="form-control status-box" placeholder="Добавете описание отностно пътуването"></textarea>
            </div>

        </form>
       
      </div>
      
    </div>
    <div class="box-footer">
      <form action="#" method="post">
        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-map-marker"></span>
                                </span>
                                 <input type="text" class="form-control" id="inputName" name="inputName" placeholder="Къде се намирам ?">
                                </div>
                               </div>
        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-map-marker"></span>
                                </span>
                                 <input type="text" class="form-control" id="inputName" name="inputName" placeholder="Къде искам да отида">
                                </div>
                               </div>
        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-money"></span>
                                </span>
                                 <input type="text" class="form-control" id="inputName" name="inputName" placeholder="Бюджет">
                                </div>
                               </div>
      </form>
    </div>
    <div class="box-footer">
      <form action="#" method="post">
        <ul class='list-inline status-icon post-actions'>
                <li><a href="#"><span class="status-color fa fa-camera fa-lg"></span></a></li>
                <li><a href="#" class='status-color fa fa-video-camera fa-lg'></a></li>
                <li class='pull-right'><a href="#" class='btn btn-primary btn-xs'>Публикувай</a></li>
                
            </ul>
      </form>
  </div>
                        </div>


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