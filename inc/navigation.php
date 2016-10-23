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
            <li><a href="#"><i class="fa fa-lg fa-facebook-square" aria-hidden="true"></i></a></li>
            <li><a href="?lang=en"><img src="public/images/en.png" class="flag"></a></li>
            <li><a href="?lang=bg"><img src="public/images/bg.ico" class="flag"></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          <img src="<?php print $myAvatar;?>" class="flag"> <?php echo $myRealName;?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
           
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
              <hr>
              <a href="/" class="btn btn-xs btn-danger btn-block ">Изход</a>
          </ul>
        </li>
      </ul>
        </div>
      </div>
    </nav>