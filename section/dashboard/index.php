<script>
setInterval(function(){
   $('#ajaxUpdate').load('http://localhost/tsarevetsTeam/section/dashboard/index.php');
}, 2000)
</script>
<div id='ajaxUpdate'>
<?php

$sql = mysqli_query($connect, "SELECT * FROM `dashboard` ORDER by id DESC");
while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
    $author = $row['author'];
    $date = $row['date'];
    $zaqvka = mysqli_query($connect, "SELECT * FROM `users` WHERE id = $author");
    $rowUser = mysqli_fetch_array($zaqvka, MYSQLI_ASSOC);
    echo '<div class="panel panel-primary">
            <div class="panel-heading">
              <div class="box-header">
      <div class="user-block">
        <img class="img-circle" src="' . $rowUser['avatar'] . '" alt="User Image">
        <span class="username"><a href="#">' . $rowUser['username'] . '</a></span>';
        $statusCategory = $row['category'];
        $catSql = mysqli_query($connect, "SELECT * FROM `categories` WHERE catId = $statusCategory");
        $rowCat = mysqli_fetch_array($catSql, MYSQLI_ASSOC);
        echo '<span class="description">Публикувано на: ' . $date . '.      Категория: '.$rowCat['catName'].'</span>
      </div>
    </div>
            </div>
        <div class="box box-widget">
    <div class="box-body">
      <p>' . $row['subject'] . '</p>
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
';
}
?>
</div>