<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">
            <?php echo getLanguageText('NewsFeed');?>
        </h3>
    </div>

    <div class="box ">
        <div class="box-body">
            <div class=" well-sm well-social-post">
                <form action="#" method="post">
                    <div class="user-block">
                        <img class="img-circle " src="<?php echo $myAvatar; ?>" alt="User Image">
                        <textarea class="form-control status-box" name="subject" placeholder="Какво мислите?"></textarea>
                    </div>
            </div>

        </div>
        <div class="box-footer">
            <ul class='list-inline status-icon post-actions'>
                <li><a href="#"><span class="fa fa-camera fa-lg"></span></a></li>
                <li><a href="#" class='fa fa-video-camera fa-lg'></a></li>
                <li><a href="#" class='fa fa-file fa-lg'></a></li>
                <li class='pull-right'><button href="#" class='btn btn-primary btn-xs status' name="submit" type='submit'><?php echo getLanguageText('Publish');?></button></li>
                 <li class="pull-right"><select name="category">
                <option value="1"><?php echo getLanguageText('Ads');?></option>
                <option value="2"><?php echo getLanguageText('Services');?></option>
                <option>Relish</option>
                </select></li>
                 
            </ul>
            </form>
        </div>
        <?php
            if (isset($_POST['submit'])) {
                $author = $_SESSION['userSession'];
                $category = $_POST['category'];
                $subject = $_POST['subject'];
                $date = date("F j, Y, g:i a");

                $subject = mysqli_real_escape_string($connect, $subject);
                if ($subject !== NULL) {
                    $query = mysqli_query($connect, "INSERT INTO dashboard (author, category, subject, date)VALUES ('$author', '$category', '$subject', '$date')");
                    if ($query) {
                        echo "<div class='alert alert-success'>Успешно добавен статус.</div>";
                    } else {
                        echo "Няква грешка";
                    }
                }
            }
            ?>
    </div>
</div>
