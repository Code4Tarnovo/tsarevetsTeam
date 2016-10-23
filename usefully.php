<?php
session_start();
if (!isset($_SESSION['userSession'])!="") {
 header("Location: welcome.php");
 exit;
}
require_once 'connectDB.php';
include ('func/getUserInfo.php');
include ('lang/language.php'); //Вмъкваме езика
include ('inc/head.php'); //Вмъкваме HEAD
echo '<body>';
?>
    <?php include ('inc/navigation.php');?>


    <div class="container">

    <div class="row">
    <div class="col-md-12">
      <div class="row">
                <?php include('inc/leftPanel.php');?>



        <div class="col-md-9">
<div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">
                Полезно
              </h3>
              </div>
                     <div class="panel-body">
                    


                          <div class="panel-group" id="panel-672495">
                            <div class="panel panel-primary">
                              <div class="panel-heading">
                                <a class="panel-title" id="accordeonHref" data-toggle="collapse" data-parent="#panel-672495" href="#panel-element-913164"> Къде мога да си платя сметките</a>
                              </div>
                              <div id="panel-element-913164" class="panel-collapse collapse">
                              <div class="panel-body">
                                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11656.151570512937!2d25.62424396977539!3d43.08269869999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40a9261affaae89f%3A0x736b660086b1d003!2sCentral+Post+Office!5e0!3m2!1sen!2sbg!4v1477208905993" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="panel-group" id="panel-672496">
                            <div class="panel panel-primary">
                              <div class="panel-heading">
                                <a class="panel-title" data-toggle="collapse" data-parent="#panel-672496" href="#panel-element-913165"> Къде мога да се забавлявам</a>
                              </div>
                              <div id="panel-element-913165" class="panel-collapse collapse">
                              <div class="panel-body">
                                  
                                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2914.093386789068!2d25.628479215052213!3d43.08153197914504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40a9261a8566a8e3%3A0xca432b6b893f0690!2sJack!5e0!3m2!1sen!2sbg!4v1477208985982" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="panel-group" id="panel-672497">
                            <div class="panel panel-primary">
                              <div class="panel-heading">
                                <a class="panel-title" data-toggle="collapse" data-parent="#panel-672497" href="#panel-element-913166"> Места за отдих</a>
                              </div>
                              <div id="panel-element-913166" class="panel-collapse collapse">
                              <div class="panel-body">
                                  
                                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2914.1843697600143!2d25.629637915052122!3d43.07961907914509!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40a92610ecbdd359%3A0xd3e0764342de591c!2s%22Marno+pole%22!5e0!3m2!1sen!2sbg!4v1477209114607" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
         

        </div>
            </div>
      </div>
    </div>
  </div>

    </div>

  <?php include ('inc/footer.php');?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="public/js/bootstrap.min.js"></script>
  </body>
</html>