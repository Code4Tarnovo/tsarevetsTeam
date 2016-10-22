<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand font" href="welcome">TurnovoHelp</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
          	<li><a href="#"><i class="fa fa-lg fa-facebook-square" aria-hidden="true"></i></a></li>
          	<li><a href="?lang=en"><img src="public/images/en.png" class="flag"></a></li>
                <li><a href="?lang=bg"><img src="public/images/bg.ico" class="flag"></a></li>
            <li><p class="navbar-btn"><a href="welcome.php" class="btn btn-primary"><?php echo getLanguageText('Home');?></a></p></li>
            <li><a href="contacts"><?php echo getLanguageText('Contacts');?></a></li>
          </ul>
        </div>
      </div>
    </nav>