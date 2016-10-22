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
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand font" href="welcome.php">TurnovoHelp</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        <div class="col-sm-4 col-md-4">
        <form class="navbar-form" role="search">
        <div class="input-group custom-search">
            <input type="text" class="form-control" maxlength="100" placeholder="Търсене на хора,обяви и неща" name="q">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
        </form>
    </div>
          <ul class="nav navbar-nav navbar-right">
            <li><p class="navbar-btn"><a href="dashboard" class="btn btn-primary"> Начало &nbsp; <span class="badge badge-inverse">10</span></a></p></li>
            <li><a href="materials">Обяви <span class="badge badge-primary">10</span></a></li>
            <li>
            <li><a href="find-material">Търси обява <span class="badge badge-primary">10</span></a></li>
          </ul>
        </div>
      </div>
    </nav>


    <div class="container">

    <div class="row">
    <div class="col-md-12">
      <div class="row">
                <div class="col-md-3">
        <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">
                Профил
              </h3>
            </div>            
          <div class="panel-body">
            <div class="profile-sidebar">
        <!-- SIDEBAR USERPIC -->
        <div class="profile-userpic">
          <img src="public/images/guest4.png" class="avatar thumbnail img-responsive img-circle" alt="">
        </div>
        <!-- END SIDEBAR USERPIC -->
        <!-- SIDEBAR USER TITLE -->
        <div class="profile-usertitle">
          <div class="profile-usertitle-name">
            <strong>Здравей</strong><p class="mods"> Цветомир Василев</p>
          </div>
        </div>
        <!-- END SIDEBAR USER TITLE -->
        <!-- SIDEBAR BUTTONS -->
        <div class="profile-userbuttons">
        
          
        </div>
        <!-- END SIDEBAR BUTTONS -->
        <!-- SIDEBAR MENU -->
        <div class="profile-usermenu">
          <ul class="nav">
            <li class="active">
              <a href="profile">
              <i class="glyphicon glyphicon-user"></i>
              Профил </a>
            </li>
            <li>
              <a href="message">
              <i class="glyphicon glyphicon-envelope"></i>
              Съобщения <span class="badge badge-inverse badge-right">10</span></a>
            </li>
            
            <li>
              <a href="friends">
              <i class="fa fa-users"></i>
              Приятели  <span class="badge badge-inverse badge-right">10</span></a>
            </li>
             <li>
              <a href="profile-settings">
              <i class="glyphicon glyphicon-cog"></i>
              Редактиране на профила </a>
            </li>
          </ul>
        </div>
        </div>


        </div>
          <div class="panel-footer">
            <a href="/" class="btn btn-lg btn-primary btn-block signup-btn">Изход</a>
          </div>
        </div>

        <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">
                Потребители онлайн (25)
              </h3>
            </div>            
          <div class="panel-body">
            <div class="profile-sidebar">
        <!-- SIDEBAR USERPIC -->
        <div class="online-user online">
          <a href=""><img src="public/images/guest.png" class="avatar thumbnail img-responsive img-circle" alt=""></a>
        </div>
        <div class="online-user offline">
          <a href=""><img src="public/images/guest1.png" class="avatar thumbnail img-responsive img-circle" alt=""></a>
        </div>
        <div class="online-user online">
          <a href=""><img src="public/images/guest2.png" class="avatar thumbnail img-responsive img-circle" alt=""></a>
        </div>
        <div class="online-user offline">
          <a href=""><img src="public/images/guest3.png" class="avatar thumbnail img-responsive img-circle" alt=""></a>
        </div>
        <div class="online-user online">
          <a href=""><img src="public/images/guest4.png" class="avatar thumbnail img-responsive img-circle" alt=""></a>
        </div>
        <div class="online-user online">
          <a href=""><img src="public/images/guest5.png" class="avatar thumbnail img-responsive img-circle" alt=""></a>
        </div>
        <div class="online-user online">
          <a href=""><img src="public/images/guest6.png" class="avatar thumbnail img-responsive img-circle" alt=""></a>
        </div>
        <div class="online-user online">
          <a href=""><img src="public/images/guest7.png" class="avatar thumbnail img-responsive img-circle" alt=""></a>
        </div>
        <div class="online-user offline">
          <a href=""><img src="public/images/guest8.png" class="avatar thumbnail img-responsive img-circle" alt=""></a>
        </div>
        <div class="online-user offline">
          <a href=""><img src="public/images/guest9.png" class="avatar thumbnail img-responsive img-circle" alt=""></a>
        </div>
        <div class="online-user online">
          <a href=""><img src="public/images/guest10.png" class="avatar thumbnail img-responsive img-circle" alt=""></a>
        </div>
        <div class="online-user online">
          <a href=""><img src="public/images/guest11.png" class="avatar thumbnail img-responsive img-circle" alt=""></a>
        </div>
        <div class="online-user online">
          <a href=""><img src="public/images/guest12.png" class="avatar thumbnail img-responsive img-circle" alt=""></a>
        </div>
        <div class="online-user offline">
          <a href=""><img src="public/images/guest13.png" class="avatar thumbnail img-responsive img-circle" alt=""></a>
        </div>
        <div class="online-user online">
          <a href=""><img src="public/images/guest14.png" class="avatar thumbnail img-responsive img-circle" alt=""></a>
        </div>
        <div class="online-user online">
          <a href=""><img src="public/images/guest15.png" class="avatar thumbnail img-responsive img-circle" alt=""></a>
        </div>
        <div class="online-user online">
          <a href=""><img src="public/images/guest16.png" class="avatar thumbnail img-responsive img-circle" alt=""></a>
        </div>
        <div class="online-user online">
          <a href=""><img src="public/images/guest17.png" class="avatar thumbnail img-responsive img-circle" alt=""></a>
        </div>
        <div class="online-user online">
          <a href=""><img src="public/images/guest18.png" class="avatar thumbnail img-responsive img-circle" alt=""></a>
        </div>
        <div class="online-user online">
          <a href=""><img src="public/images/guest19.png" class="avatar thumbnail img-responsive img-circle" alt=""></a>
        </div>
        <div class="online-user offline">
          <a href=""><img src="public/images/guest20.png" class="avatar thumbnail img-responsive img-circle" alt=""></a>
        </div>
        <div class="online-user offline">
          <a href=""><img src="public/images/guest21.png" class="avatar thumbnail img-responsive img-circle" alt=""></a>
        </div>
        <div class="online-user offline">
          <a href=""><img src="public/images/guest22.png" class="avatar thumbnail img-responsive img-circle" alt=""></a>
        </div>
        <div class="online-user online">
          <a href=""><img src="public/images/guest23.png" class="avatar thumbnail img-responsive img-circle" alt=""></a>
        </div>
        <div class="online-user online">
          <a href=""><img src="public/images/guest24.png" class="avatar thumbnail img-responsive img-circle" alt=""></a>
        </div>

        </div>
        </div>
          <div class="panel-footer">  
          </div>
        </div>
      </div>



        <div class="col-md-6">
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

        <div class="col-md-3">

          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">
                Профил
              </h3>
            </div>            
          <div class="panel-body">
            <div class="profile-sidebar">
        <!-- SIDEBAR MENU -->
        <div class="profile-usermenu rightmenu">
          <ul class="nav">
            <li class="active">
              <a href="profile">
              <i class="glyphicon glyphicon-user"></i>
              Предлагам/Търся работа </a>
            </li>
            <li>
              <a href="profile-settings">
              <i class="glyphicon glyphicon-cog"></i>
              Обяви </a>
            </li>
           <li>
              <a href="upload-material">
              <i class="fa fa-file"></i>
              Услуги </a>
            </li>
            <li>
              <a href="message">
              <i class="glyphicon glyphicon-envelope"></i>
              Черно такси <span class="badge badge-inverse badge-right">10</span></a>
            </li>
            
            <li>
              <a href="friends">
              <i class="fa fa-users"></i>
              Въпроси <span class="badge badge-inverse badge-right">10</span></a>
            </li>
             <li>
              <a href="profile-settings">
              <i class="glyphicon glyphicon-cog"></i>
              Полезно </a>
            </li>
            <li>
              <a href="profile-settings">
              <i class="glyphicon glyphicon-cog"></i>
              Маршрути </a>
            </li>
            <li>
              <a href="profile-settings">
              <i class="glyphicon glyphicon-cog"></i>
              Нарушители </a>
            </li>
            <li>
              <a href="profile-settings">
              <i class="glyphicon glyphicon-cog"></i>
              Събития </a>
            </li>
            <li>
              <a href="profile-settings">
              <i class="glyphicon glyphicon-cog"></i>
              Забележителности </a>
            </li>
          </ul>
        </div>
        </div>
        </div>
              </div>



        <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">
                Предлагам/Търся работа
              </h3>
            </div>
            <div class="panel-body">
              <a href="#"><b>Тестова Тема</b></a> 
              <p><b>от</b> <span class="mods">Георги Иванов</span></p>
              <p><b>Публикувано на: 21 Апр  21:56ч.</b></p>
              <hr>
              <a href="#"><b>Тестова Тема</b></a> 
              <p><b>от</b> <span class="mods">Георги Иванов</span></p>
              <p><b>Публикувано на: 21 Апр  21:56ч.</b></p>
              <hr>
              <a href="#"><b>Тестова Тема</b></a> 
              <p><b>от</b> <span class="mods">Георги Иванов</span></p>
              <p><b>Публикувано на: 21 Апр  21:56ч.</b></p>
            </div>
            <div class="panel-footer">
            </div>
        </div>
        <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">
                Най-нови обяви
              </h3>
            </div>
            <div class="panel-body">
              <a href="#"><b>Тестова Тема</b></a> 
              <p><b>от</b> <span class="admin">Admin</span><b> на 21 Апр 2016г 21:56ч</b></p>
            </div>
            <div class="panel-footer">
            </div>
        </div>
        <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">
                Най-търсени услуги
              </h3>
            </div>
            <div class="panel-body">
              <a href="#"><b>Тестова Тема</b></a> 
              <p><b>от</b> <span class="admin">Admin</span><b> на 21 Апр 2016г 21:56ч</b></p>
            </div>
            <div class="panel-footer">
            </div>
        </div>
        <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">
                Черно такси
              </h3>
            </div>
            <div class="panel-body">
              <a href="#"><b>Тестова Тема</b></a> 
              <p><b>от</b> <span class="admin">Admin</span><b> на 21 Апр 2016г 21:56ч</b></p>
            </div>
            <div class="panel-footer">
            </div>
        </div>
        <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">
                Най-нови въпроси
              </h3>
            </div>
            <div class="panel-body">
              <a href="#"><b>Тестова Тема</b></a> 
              <p><b>от</b> <span class="admin">Admin</span><b> на 21 Апр 2016г 21:56ч</b></p>
            </div>
            <div class="panel-footer">
            </div>
        </div>       
        <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">
                Най-ново от полезно
              </h3>
            </div>
            <div class="panel-body">
              <a href="#"><b>Тестова Тема</b></a> 
              <p><b>от</b> <span class="admin">Admin</span><b> на 21 Апр 2016г 21:56ч</b></p>
            </div>
            <div class="panel-footer">
            </div>
        </div>
        <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">
                Най-нови маршрути
              </h3>
            </div>
            <div class="panel-body">
              <a href="#"><b>Тестова Тема</b></a> 
              <p><b>от</b> <span class="admin">Admin</span><b> на 21 Апр 2016г 21:56ч</b></p>
            </div>
            <div class="panel-footer">
            </div>
        </div>
        <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">
                Най-нови нарушители
              </h3>
            </div>
            <div class="panel-body">
              <a href="#"><b>Проблем с Status</b></a> 
              <p><b>от</b> <span class="admin">Admin</span><b> на 21 Апр 2016г 21:56ч</b></p>
            </div>
            <div class="panel-footer">
            </div>
        </div>
        <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">
                Най-нови събития
              </h3>
            </div>
            <div class="panel-body">
              <a href="#"><b>Бъг с Статусите</b></a> 
              <p><b>от</b> <span class="admin">Admin</span><b> на 21 Апр 2016г 21:56ч</b></p>
            </div>
            <div class="panel-footer">
            </div>
        </div>
        <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">
                Най-нови забележителности
              </h3>
            </div>
            <div class="panel-body">
              <a href="#"><b>Предлагам да се сложи чат</b></a> 
              <p><b>от</b> <span class="admin">Admin</span><b> на 21 Апр 2016г 21:56ч</b></p>
            </div>
            <div class="panel-footer">
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