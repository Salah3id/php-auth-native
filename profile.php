<?php
include_once("framework/sitefunctions.php");
ob_start();
session_start();
if(!isset($_SESSION['log'])) {
    redirect(0,'index.php');
    die();
}
    if (isset($_GET['id']))
    {
        if (strlen($_GET['id']) < 1) {
            redirect(0,'profile.php?id='.$_SESSION['user_id']);
            die();
        }
        elseif ($_GET['id'] == $_SESSION['user_id']) {
            echo $_GET['id'];
        }
        else {
            echo "la djhud";
        }
        
    } else
    {
        redirect(0,'profile.php?id='.$_SESSION['user_id']);
        die();
    }

include_once("header.php") ?>
    <!-- Body -->
        <!--========== PROMO BLOCK ==========-->
        <section style="height: 370px;" class="s-video-v2__bg" data-vidbg-bg="mp4: include/media/mp4_video.mp4, webm: include/media/webm_video.webm, poster: include/media/fallback.jpg" data-vidbg-options="loop: true, muted: true, overlay: false">
            <div class="container g-position--overlay g-text-center--xs">
                <div class="g-padding-y-50--xs g-margin-t-100--xs g-margin-b-100--xs g-margin-b-250--md">
                    <h1 class="g-font-size-36--xs g-font-size-50--sm g-font-size-60--md g-color--white"><?php echo $_SESSION['user_name']; ?></h1>
                  <!--  <h2 class="g-font-size-36--xs g-font-size-50--sm g-font-size-60--md g-color--white">Design is Functional.</h2> -->
                </div>
            </div>
        </section>
        <!--========== END PROMO BLOCK ==========-->

        <!--========== PAGE CONTENT ==========-->
        <!-- Mockup -->
        <div class="container g-margin-t-o-150--xs">
            <div class="center-block s-mockup-v1">
                <img class="img-responsive img-circle img-thumbnail" src="img/users/<?php echo $_SESSION['user_img'] ?>" alt="Mockup Image">
                <ul class="nav nav-tabs">
                    <li role="presentation" class="<?php if($_SERVER['PHP_SELF'] == '/makan/profile.php') echo 'active'; ?>"><a href="profile.php?id=<?php echo $_SESSION['user_id'] ?>"><span class="glyphicon glyphicon-fire"></span></a></li>
                    <li role="presentation" class="<?php if($_SERVER['PHP_SELF'] == '/makan/allimg.php') echo 'active'; ?>"><a href="allimg.php?id=<?php echo $_SESSION['user_id'] ?>"><span class="glyphicon glyphicon-picture"></span></a></li>
                    <li role="presentation" class="<?php if($_SERVER['PHP_SELF'] == '/makan/messenger.php') echo 'active'; ?>"><a href="messenger.php?id=<?php echo $_SESSION['user_id'] ?>"><span class="glyphicon glyphicon-comment"></span></a></li>
                    <li role="presentation" class="<?php if($_SERVER['PHP_SELF'] == '/makan/calendar.php') echo 'active'; ?>"><a href="calendar.php?id=<?php echo $_SESSION['user_id'] ?>"><span class="glyphicon glyphicon-list-alt"></span></a></li>
                    <li role="presentation" class="<?php if($_SERVER['PHP_SELF'] == '/makan/about.php') echo 'active'; ?>"><a href="about.php?id=<?php echo $_SESSION['user_id'] ?>"><span class="glyphicon glyphicon-info-sign"></span></a></li>
                    <li role="presentation" class="<?php if($_SERVER['PHP_SELF'] == '/makan/edit_profile.php') echo 'active'; ?>"><a href="edit_profile.php?id=<?php echo $_SESSION['user_id'] ?>"><span class="glyphicon glyphicon-cog"></span></a></li>
                </ul>
                <br>
                <span style="font-size:50px;  float: right; background-color: #13b1cd; color: white; border-radius: 50%; " class="glyphicon glyphicon-plus-sign "></span>
            </div>
        </div>
        <!-- Testimonials -->
        <div class="g-hor-divider__dashed--sky-light g-padding-y-80--xs g-padding-y-125--xsm">
            <div class="container g-text-center--xs">
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-50--xs">منشوراتك</p>
                <div class="s-swiper js__swiper-testimonials">
                    <!-- Swiper Wrapper -->
                    <div class="swiper-wrapper g-margin-b-50--xs">
                        <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                            <div class="g-padding-x-20--xs g-padding-x-50--lg">
                                <img class="g-width-70--xs g-height-70--xs g-hor-border-4__solid--white g-box-shadow__dark-lightest-v4 g-radius--circle g-margin-b-30--xs" src="img/users/<?PHP echo $_SESSION['user_img']?>" alt="Image">
                                <div class="g-margin-b-40--xs">
                                   <!-- <img style="width: 500px" class="img-responsive img-rounded img-thumbnail col-centered" src="img/users/post.jpg" alt="Mockup Image"> -->
                                    <p class="g-font-size-22--xs g-font-size-28--sm g-color--heading"><i>" This will display the posts isa ya <?php echo $_SESSION['user_name'];?> "</i></p>
                                </div>
                                <div class="center-block g-hor-divider__solid--heading-light g-width-100--xs g-margin-b-30--xs"></div>
                                <h4 class="g-font-size-15--xs g-font-size-18--sm g-color--primary g-margin-b-5--xs">Salah / Cairo</h4>
                            </div>
                        </div>
                        <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                            <div class="g-padding-x-20--xs g-padding-x-50--lg">
                                <img class="g-width-70--xs g-height-70--xs g-hor-border-4__solid--white g-box-shadow__dark-lightest-v4 g-radius--circle g-margin-b-30--xs" src="img/users/<?PHP echo $_SESSION['user_img']?>" alt="Image">
                                <div class="g-margin-b-40--xs">
                                    <p class="g-font-size-22--xs g-font-size-28--sm g-color--heading"><i>" This will display the posts isa ya <?php echo $_SESSION['user_name'];?> "</i></p>
                                </div>
                                <div class="center-block g-hor-divider__solid--heading-light g-width-100--xs g-margin-b-30--xs"></div>
                                <h4 class="g-font-size-15--xs g-font-size-18--sm g-color--primary g-margin-b-5--xs">Salah / Cairo</h4>
                            </div>
                        </div>
                        <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                            <div class="g-padding-x-20--xs g-padding-x-50--lg">
                                <img class="g-width-70--xs g-height-70--xs g-hor-border-4__solid--white g-box-shadow__dark-lightest-v4 g-radius--circle g-margin-b-30--xs" src="img/users/<?PHP echo $_SESSION['user_img']?>" alt="Image">
                                <div class="g-margin-b-40--xs">
                                    <p class="g-font-size-22--xs g-font-size-28--sm g-color--heading"><i>"This will display the posts isa ya <?php echo $_SESSION['user_name'];?> "</i></p>
                                </div>
                                <div class="center-block g-hor-divider__solid--heading-light g-width-100--xs g-margin-b-30--xs"></div>
                                <h4 class="g-font-size-15--xs g-font-size-18--sm g-color--primary g-margin-b-5--xs">Salah / Cairo</h4>
                            </div>
                        </div>
                        <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                            <div class="g-padding-x-20--xs g-padding-x-50--lg">
                                <img class="g-width-70--xs g-height-70--xs g-hor-border-4__solid--white g-box-shadow__dark-lightest-v4 g-radius--circle g-margin-b-30--xs" src="img/users/<?PHP echo $_SESSION['user_img']?>" alt="Image">
                                <div class="g-margin-b-40--xs">
                                    <p class="g-font-size-22--xs g-font-size-28--sm g-color--heading"><i>"This will display the posts isa ya <?php echo $_SESSION['user_name'];?> "</i></p>
                                </div>
                                <div class="center-block g-hor-divider__solid--heading-light g-width-100--xs g-margin-b-30--xs"></div>
                                <h4 class="g-font-size-15--xs g-font-size-18--sm g-color--primary g-margin-b-5--xs">Salah / Cairo</h4>
                            </div>
                        </div>
                        <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                            <div class="g-padding-x-20--xs g-padding-x-50--lg">
                                <img class="g-width-70--xs g-height-70--xs g-hor-border-4__solid--white g-box-shadow__dark-lightest-v4 g-radius--circle g-margin-b-30--xs" src="img/users/<?PHP echo $_SESSION['user_img']?>" alt="Image">
                                <div class="g-margin-b-40--xs">
                                    <p class="g-font-size-22--xs g-font-size-28--sm g-color--heading"><i>" This will display the posts isa ya <?php echo $_SESSION['user_name'];?>"</i></p>
                                </div>
                                <div class="center-block g-hor-divider__solid--heading-light g-width-100--xs g-margin-b-30--xs"></div>
                                <h4 class="g-font-size-15--xs g-font-size-18--sm g-color--primary g-margin-b-5--xs">Salah / Cairo</h4>
                            </div>
                        </div>
                    </div>
                    <!-- End Swipper Wrapper -->

                    <!-- Arrows -->
                    <div class="g-font-size-22--xs g-color--heading js__swiper-fraction"></div>
                    <a href="javascript:void(0);" class="g-display-none--xs g-display-inline-block--sm s-swiper__arrow-v1--right s-icon s-icon--md s-icon--primary-brd g-radius--circle ti-angle-right js__swiper-btn--next"></a>
                    <a href="javascript:void(0);" class="g-display-none--xs g-display-inline-block--sm s-swiper__arrow-v1--left s-icon s-icon--md s-icon--primary-brd g-radius--circle ti-angle-left js__swiper-btn--prev"></a>
                    <!-- End Arrows -->
                </div>
            </div>
        </div>
        <!-- End Testimonials -->

        <!-- Clients -->

        <!--========== END PAGE CONTENT ==========-->

        <?php include_once("footer.php"); ?>
        <!--========== JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) ==========-->
        <!-- Vendor -->
        <script type="text/javascript" src="vendor/jquery.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.migrate.min.js"></script>
        <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.smooth-scroll.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.back-to-top.min.js"></script>
        <script type="text/javascript" src="vendor/scrollbar/jquery.scrollbar.min.js"></script>
        <script type="text/javascript" src="vendor/vidbg.min.js"></script>
        <script type="text/javascript" src="vendor/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
        <script type="text/javascript" src="vendor/waypoint.min.js"></script>
        <script type="text/javascript" src="vendor/counterup.min.js"></script>
        <script type="text/javascript" src="vendor/swiper/swiper.jquery.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.wow.min.js"></script>

        <!-- General Components and Settings -->
        <script type="text/javascript" src="js/global.min.js"></script>
        <script type="text/javascript" src="js/components/header-sticky.min.js"></script>
        <script type="text/javascript" src="js/components/scrollbar.min.js"></script>
        <script type="text/javascript" src="js/components/portfolio-4-col-slider.min.js"></script>
        <script type="text/javascript" src="js/components/counter.min.js"></script>
        <script type="text/javascript" src="js/components/swiper.min.js"></script>
        <script type="text/javascript" src="js/components/wow.min.js"></script>
        <!--========== END JAVASCRIPTS ==========-->

    </body>
    <!-- End Body -->
</html>
