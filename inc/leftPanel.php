<div class="col-md-3">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">
                <?php echo getLanguageText('Services'); ?>
            </h3>
        </div>            
        <div class="panel-body">
            <div class="profile-sidebar">
                <!-- SIDEBAR MENU -->
                <div class="profile-usermenu rightmenu">
                    <ul class="nav">
                        <li class="active">
                            <a href="main">
                                <i class="fa fa-home" aria-hidden="true"></i>
                                <?php echo getLanguageText('Home'); ?> 
                                <?php
                                $sql = mysqli_query($connect, "SELECT * FROM `dashboard` ORDER by id DESC");
                                $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
                                $sum = mysqli_num_rows($sql);
                                echo '<span class="badge badge-inverse badge-right">'.$sum.'</span></a>';
                                ?></a>
                        </li>
                        <li>
                            <a href="Jobs">
                                <i class="fa fa-suitcase" aria-hidden="true"></i>
                                <?php echo getLanguageText('Offer'); ?>/<?php echo getLanguageText('LookingForJob'); ?> </a>
                        </li>
                        <li>
                            <a href="Ads">
                                <i class="fa fa-file"></i>
                                <?php echo getLanguageText('Ads'); ?> </a>
                        </li>
                        <li>
                            <a href="Services">
                                <i class="fa fa-cubes" aria-hidden="true"></i>
                                <?php echo getLanguageText('Services'); ?> </a>
                        </li>
                        <li>
                            <a href="Taxi">
                                <i class="fa fa-car" aria-hidden="true"></i>
                                <?php echo getLanguageText('BlackTaxi'); ?></a>
                        </li>

                        <li>
                            <a href="Questions">
                                <i class="fa fa-question-circle" aria-hidden="true"></i>
                                <?php echo getLanguageText('Questions'); ?> </a>
                        </li>
                        <li>
                            <a href="Usefully">
                                <i class="fa fa-university" aria-hidden="true"></i>
                                <?php echo getLanguageText('Usefully'); ?> </a>
                        </li>
                        <li>
                            <a href="Routes">
                                <i class="fa fa-road" aria-hidden="true"></i>
                                <?php echo getLanguageText('Routes'); ?> </a>
                        </li>
                        <li>
                            <a href="Offenders">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                <?php echo getLanguageText('Offenders'); ?> </a>
                        </li>
                        <li>
                            <a href="Events">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                <?php echo getLanguageText('Events'); ?>
                                <?php
                                $sql = mysqli_query($connect, "SELECT * FROM `dashboard` WHERE category = '3' ORDER by id DESC");
                                $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
                                $sum = mysqli_num_rows($sql);
                                echo '<span class="badge badge-inverse badge-right">'.$sum.'</span></a>';
                                ?>
                        </li>
                        <li>
                            <a href="Landmarks">
                                <i class="fa fa-book" aria-hidden="true"></i>
                                <?php echo getLanguageText('Landmarks'); ?> </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>