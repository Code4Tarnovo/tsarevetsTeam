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
        <?php 
        include ('inc/MainStatus.php'); //Формата за пускане на статус
        
        include ('section/dashboard/index.php'); //показва статусите
        ?>
   
<div class="panel panel-primary">
            <div class="panel-heading">
              <div class="box-header">
      <div class="user-block">
        <img class="img-circle" src="public/images/guest4.png" alt="User Image">
        <span class="username"><a href="#">Цветомир Василев</a></span>
        <span class="description">Публикувано на: 30 април 2016 г. в 15:31ч.</span>
      </div>
    </div>
            </div>
        <div class="box box-widget">
    
    <div class="box-body">
      <p>Тестов статус с прикачена снимка към него.</p>
      <p>Тестват се коментари , бутон харесвам , бутон не харесвам , изглед , снимки... </p>

      <div class="vid">
                <iframe width="560" height="315" src="//www.youtube.com/embed/38gZvd9eW4k" allowfullscreen=""></iframe>
            </div>
      <p></p>
      <button type="button" class="btn btn-primary btn-xs"><i class="fa fa-thumbs-o-up"></i> Харесвам</button>
      <button type="button" class="btn btn-primary btn-xs"><i class="fa fa-thumbs-o-down"></i> Не Харесвам</button>
      <span class="pull-right text-muted">2 Коментара</span>
    </div>
    <div class="box-footer box-comments">
    <button type="button" class="btn btn-primary btn-xs"><i class="fa fa-thumbs-o-up"></i></button>
    <span><a href="#">Цветомир Василев и 72 други</a></span>
    
    <span class="pull-right"><a href="#">&nbsp; Георги Иванов и 33 други</a></span>
    <button type="button" class="btn btn-primary btn-xs pull-right"><i class="fa fa-thumbs-o-down"> </i></button>
    <hr>
      <div class="box-comment">
        <img class="img-circle img-sm" src="public/images/guest2.png" alt="User Image">
        <div class="comment-text">
          <span class="username">
          <a href="">Георги Иванов</a> 
          <span class="text-muted pull-right">Вчера в 13:30ч</span>
          </span>
          Спам Спам Спам .............
        </div>
      </div>
      <div class="box-comment">
        <img class="img-circle img-sm" src="public/images/guest14.png" alt="User Image">
        <div class="comment-text">
          <span class="username">
          <a href="">Иван Георгиев</a> 
          <span class="text-muted pull-right">Днес в 18:30ч</span>
          </span>
          Тестов коментар
        </div>
      </div>
    </div>
    <div class="box-footer">
      <form action="#" method="post">
        <img class="img-responsive img-circle img-sm" src="public/images/guest4.png" alt="Alt Text">
        <div class="img-push">
          <input type="text" class="form-control input-sm" placeholder="Напишете коментар...">
        </div>
      </form>
    </div>
  </div>
</div>

        </div>
      </div>
    </div>
  </div>

    </div>

  <footer class="bs-docs-footer" role="contentinfo"> 
      <div class="container">
        <div class="row">
            <div class="col-md-6">
             <ul class="bs-docs-footer-links"> 
                <li><a href="#">Facebook</a></li> 
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Youtube</a></li> 
                <li><a href="#">Skype</a></li>
                <li><a href="#">Email</a></li>
              </ul>
         </div>

    <div class="col-md-6 text-right">
                <p class="text-right">&copy; 2016 
                    <a href="#" class="font-footer" target="_blank">Turnovo Help</a>
                     All Rights Reserved
                </p> 
                <p class="text-right">Code and Design licensed by
                    <a rel="license" href="#" class="font-footer" target="_blank">Tsarevets Team</a>
                </p>
                </div>
            </div>
        </div> 
    </footer>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="public/js/bootstrap.min.js"></script>
  </body>
</html>