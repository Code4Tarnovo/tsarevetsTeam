<?php

$sql = mysqli_query($connect, "SELECT * FROM `dashboard` ORDER by id DESC");
while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
    $statusId = $row['id'];
    $author = $row['author'];
    $date = $row['date'];
    $zaqvka = mysqli_query($connect, "SELECT * FROM `users` WHERE id = $author");
    $rowUser = mysqli_fetch_array($zaqvka, MYSQLI_ASSOC);
    echo '<div class="panel panel-primary">
            <div class="panel-heading">
              <div class="box-header">
      <div class="user-block">
        <img class="img-circle" src="' . $rowUser['avatar'] . '" alt="User Image">
        <span class="username"><a href="profile/' . $rowUser['id'] . '"  class="username">' . $rowUser['realName'] . '</a></span>';
        $statusCategory = $row['category'];
        $catSql = mysqli_query($connect, "SELECT * FROM `categories` WHERE catId = $statusCategory");
        $rowCat = mysqli_fetch_array($catSql, MYSQLI_ASSOC);
        if($row['author'] == $_SESSION['userSession']){
            $deleteStatus = '<a class="fa fa-times" style="color:red; float:right;" href="func/deleteStatus.php?id='.$statusId.'" style="color:red"></a>';
        }else{
            $deleteStatus = '';
        }
        echo '<span class="description">Публикувано на: ' . $date . '.      Категория: <a href="section/'.$rowCat['catUrl'].'" style="color: #ffdf31;">'.$rowCat['catName'].'</a> '.$deleteStatus.'</span>
      </div>
    </div>
            </div>
        <div class="box box-widget">
    <div class="box-body">
      <p>' . $row['subject'] . '</p>
      <p></p>
      <form method="POST" action="func/likeIt.php">
      <input type="hidden" value="'.$row['id'].'" name="postId">
      <button type="submit" class="btn btn-primary btn-xs" name="submitLike"><i class="fa fa-thumbs-o-up" ></i> Харесвам</button>
      </form>
    </div>
    <div class="box-footer box-comments">
    <button type="button" class="btn btn-primary btn-xs"><i class="fa fa-thumbs-o-up"></i></button>';
        $likesSql = mysqli_query($connect, "SELECT * FROM `likes` WHERE statusId = '".$statusId."' AND likeType= '1'");
        $rowLikes = mysqli_fetch_array($likesSql, MYSQLI_ASSOC);
        $allLikes = mysqli_num_rows($likesSql);
        if ($allLikes < 1) {
            $showAllLikes = ' Няма харесали';
        } else {
            $showAllLikes = ' ' . $allLikes . ' харесват това';
        }
        echo '<span><a href="#">'.$showAllLikes.'</a></span>';
        echo '<span class="pull-right text-muted">';
        $commentsSql = mysqli_query($connect, "SELECT * FROM `comments` WHERE statusId = '".$statusId."' ORDER by id");
        $rowComments = mysqli_fetch_array($commentsSql, MYSQLI_ASSOC);
        $allComments = mysqli_num_rows($commentsSql);
        if($allComments < 1){
            $countComments = '';
        }
        if($allComments == 1){
            $countComments = '1 '.getLanguageText('Comment').'';
        }
        if($allComments > 1){
            $countComments = ''.$allComments.' коментара';
        }
        echo $countComments;
        echo '</span>';
        echo '<hr>';
        $commentsSql = mysqli_query($connect, "SELECT * FROM `comments` WHERE statusId = '".$statusId."' ORDER by id");
        while($rowComments = mysqli_fetch_array($commentsSql, MYSQLI_ASSOC)){
            $authorId = $row['author'];
            $commentUser = mysqli_query($connect, "SELECT * FROM `users` WHERE id = '".$authorId."'");
            $rowCommAuthor = mysqli_fetch_array($commentUser, MYSQLI_ASSOC);
            if ($authorId == $_SESSION['userSession']){
                $deleteComment = '<a class="fa fa-times" href="func/deleteComment.php?id='.$rowComments['id'].'" style="color:red"></a>';
            }
            echo '<div class="box-comment">
        <img class="img-circle img-sm" src="'.$rowCommAuthor['avatar'].'" alt="User Image">
        <div class="comment-text">
          <span class="username">
          <a href="profile/'.$rowCommAuthor['id'].'">'.$rowCommAuthor['realName'].'</a> 
          <span class="text-muted pull-right">'.$rowComments['date'].' '.$deleteComment.'</span>
          </span>
          '.$rowComments['comment'].'
        </div>
      </div>';
        }
        echo '</div>
    <div class="box-footer">
      <form action="func/postComment.php" method="post">
        <img class="img-responsive img-circle img-sm" src="'.$myAvatar.'" alt="Alt Text">
        <div class="img-push">
            <input type="hidden" name="statusId" value="'.$row['id'].'">
          <input type="text" class="form-control input-sm" name="comment" placeholder="Напишете коментар...">
          <input type="hidden" name="postComment">
        </div>
      </form>';
    echo '</div>
</div></div>
';
}
?>