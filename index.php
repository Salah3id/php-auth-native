<?php
        ob_start();
        include_once("framework/sitefunctions.php");
        include_once("framework/config.php");
        session_start();
        if (isset($_SESSION['log'])){
            $user_email = $_SESSION['user_email'];
            $order2 = mysqli_query($con,"SELECT `user_id` FROM `users` WHERE `user_email` = '$user_email'");
            if ($order2)
            {
            $row = mysqli_fetch_array($order2);
            $_SESSION['user_id'] = $row['user_id']; 
            }
            else {
                session_destroy();
                redirect(0,'index.php');
            }
            
        }
        include_once("header.php");?>

        <!--========== SWIPER SLIDER ==========-->
        <div class="s-swiper js__swiper-one-item">
            <!-- Swiper Wrapper -->
            <div class="swiper-wrapper">
                <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('img/1920x1080/15.jpg');">
                    <div class="container g-text-center--xs g-ver-center--xs">
                        <div class="g-margin-b-30--xs">
                            <h1 class="g-font-size-35--xs g-font-size-45--sm g-font-size-55--md g-color--white"> قل وداعاً لصفوف انتظار التذاكر والحجوزات</h1>
                        </div>
                        <a class="js__popup__youtube" href="https://www.youtube.com/watch?v=lcFYdgZKZxY" title="Intro Video">
                            <i class="s-icon s-icon--lg s-icon--white-bg g-radius--circle ti-control-play"></i>
                        </a>
                    </div>
                </div>
                <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('img/1920x1080/summer.jpg');">
                    <div class="container g-text-center--xs g-ver-center--xs">
                        <div class="g-margin-b-30--xs">
                            <h1 class="g-font-size-35--xs g-font-size-45--sm g-font-size-55--md g-color--white"> اقوى عروض المصايف في مصر باسعار خيالية</h1>
                        </div>
                        <a class="js__popup__youtube" href="https://www.youtube.com/watch?v=lcFYdgZKZxY" title="Intro Video">
                            <i class="s-icon s-icon--lg s-icon--white-bg g-radius--circle ti-control-play"></i>
                        </a>
                    </div>
                </div>
                <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('img/1920x1080/course.jpeg');">
                    <div class="container g-text-center--xs g-ver-center--xs">
                        <div class="g-margin-b-30--xs">
                            <h1 class="g-font-size-35--xs g-font-size-45--sm g-font-size-55--md g-color--white">تنظيم المراكز التعليمية وحجوزات الدورات التدريبية</h1>
                        </div>
                        <a class="js__popup__youtube" href="https://www.youtube.com/watch?v=lcFYdgZKZxY" title="Intro Video">
                            <i class="s-icon s-icon--lg s-icon--white-bg g-radius--circle ti-control-play"></i>
                        </a>
                    </div>
                </div>
                 <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('img/1920x1080/moti.jpeg');">
                    <div class="container g-text-center--xs g-ver-center--xs">
                        <div class="g-margin-b-30--xs">
                            <h1 class="g-font-size-35--xs g-font-size-45--sm g-font-size-55--md g-color--white">افضل الاماكن لاقامة محاضراتك ودوراتك الخاصة</h1>
                        </div>
                        <a class="js__popup__youtube" href="https://www.youtube.com/watch?v=lcFYdgZKZxY" title="Intro Video">
                            <i class="s-icon s-icon--lg s-icon--white-bg g-radius--circle ti-control-play"></i>
                        </a>
                    </div>
                </div>               
                <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('img/1920x1080/cinema.jpeg');">
                    <div class="container g-text-center--xs g-ver-center--xs">
                        <div class="g-margin-b-30--xs">
                            <h1 class="g-font-size-35--xs g-font-size-45--sm g-font-size-55--md g-color--white">احجز مكانك في السينما قبل اي حد وداعاً لصفوف الانتظار</h1>
                        </div>
                        <a class="js__popup__youtube" href="https://www.youtube.com/watch?v=lcFYdgZKZxY" title="Intro Video">
                            <i class="s-icon s-icon--lg s-icon--white-bg g-radius--circle ti-control-play"></i>
                        </a>
                    </div>
                </div>                
                <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('img/1920x1080/celebration.jpeg');">
                    <div class="container g-text-center--xs g-ver-center--xs">
                        <div class="g-margin-b-30--xs">
                            <div class="g-margin-b-30--xs">
                                <h2 class="g-font-size-35--xs g-font-size-45--sm g-font-size-55--md g-color--white"> حجز قاعات المناسبات في افخم الاماكن بأقل الاسعار</h2>
                            </div>
                            <a class="js__popup__youtube" href="https://www.youtube.com/watch?v=lcFYdgZKZxY" title="Intro Video">
                                <i class="s-icon s-icon--lg s-icon--white-bg g-radius--circle ti-control-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Swiper Wrapper -->

            <!-- Arrows -->
            <a href="javascript:void(0);" class="s-swiper__arrow-v1--right s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-right js__swiper-btn--next"></a>
            <a href="javascript:void(0);" class="s-swiper__arrow-v1--left s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-left js__swiper-btn--prev"></a>
            <!-- End Arrows -->
            
            <a href="#js__scroll-to-section" class="s-scroll-to-section-v1--bc g-margin-b-15--xs">
                <span class="g-font-size-18--xs g-color--white ti-angle-double-down"></span>
                <?php
                if (isset($_SESSION["log"]))
                {
                    ?>
                    <p class="text-uppercase g-color--white g-letter-spacing--3 g-margin-b-0--xs">خدماتنا</p>
                    <?php
                } else
                {
                    ?>
                    <p class="text-uppercase g-color--white g-letter-spacing--3 g-margin-b-0--xs">دخول | اشتراك</p>
                    <?php
                }
                ?>
            </a>
            
        </div>
        <!--========== END SWIPER SLIDER ==========-->

        <!--========== PAGE CONTENT ==========-->
        <!-- Features -->
        <?php
                if (isset($_SESSION["log"]))
                {
                    ?>
                     <div id="js__scroll-to-section" class="container g-padding-y-80--xs g-padding-y-125--xsm">
                        <div class="row g-hor-centered-row--md g-row-col--5 g-margin-b-80--xs g-margin-b-100--md">
                            <div class="col-sm-5 g-hor-centered-row__col">
                                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Culture</p>
                                <h2 class="g-font-size-32--xs g-font-size-36--sm g-margin-b-25--xs">About Megakit</h2>
                                <p class="g-font-size-18--sm">We aim high at being focused on building relationships with our clients and community. Using our creative gifts drives this foundation.</p>
                            </div>
                            <div class="col-sm-1"></div>
                            <div class="col-sm-5 g-hor-centered-row__col">
                                <img class="img-responsive" src="img/mockups/iphone-03.png" alt="Mockup Image">
                            </div>
                        </div>
                        <div class="row g-hor-centered-row--md g-row-col--5">
                            <div class="col-sm-5 col-sm-push-7 g-hor-centered-row__col">
                                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Production</p>
                                <h2 class="g-font-size-32--xs g-font-size-36--sm g-margin-b-25--xs">Branding Work</h2>
                                <p class="g-font-size-18--sm">Working together on the daily requires each individual to let the greater good of the team’s work surface above their own ego.</p>
                            </div>
                            <div class="col-sm-1"></div>
                            <div class="col-sm-5 col-sm-pull-7 g-hor-centered-row__col g-text-left--xs g-text-right--md">
                                <img class="img-responsive" src="img/mockups/iphone-02.png" alt="Mockup Image">
                            </div>
                        </div>
                        <div class="row g-hor-centered-row--md g-row-col--5 g-margin-b-80--xs g-margin-b-100--md">
                            <div class="col-sm-5 g-hor-centered-row__col">
                                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Culture</p>
                                <h2 class="g-font-size-32--xs g-font-size-36--sm g-margin-b-25--xs">About Megakit</h2>
                                <p class="g-font-size-18--sm">We aim high at being focused on building relationships with our clients and community. Using our creative gifts drives this foundation.</p>
                            </div>
                            <div class="col-sm-1"></div>
                            <div class="col-sm-5 g-hor-centered-row__col">
                                <img class="img-responsive" src="img/mockups/iphone-03.png" alt="Mockup Image">
                            </div>
                        </div>
                    </div>
                    <?php
                } else
                {
                    ?>
                        <div id="js__scroll-to-section" class="container g-padding-y-80--xs g-padding-y-125--sm">
                            <div class="s-promo-block-v2 js__parallax-window" style="background: url(&quot;img/1920x1080/03.jpg&quot;) 50% 85px / cover no-repeat fixed;">
                               <div class="container">
                                   <div class="row g-hor-centered-row--md">
                                       <div class="col-md-7 g-hor-centered-row__col g-padding-y-80--xs">
                                           <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white">اشترك وتمتع بكل الخدامات مجاناً </h2>
                                           <p class="g-font-size-18--xs g-color--white-opacity g-margin-b-40--xs">مكانكو تسعى دائماً لتسهيل طريقك و توفير وقتك و تنظيم اعمالك و دراستك تمتع الان بخدماتها مجاناً</p>
                                           <a href="registration.php" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50 g-padding-x-50--xs g-margin-b-20--xs">أشتراك مجاني</a>
                                       </div>
                                       <div class="col-md-5 g-hor-centered-row__col g-margin-b-80--xs">
                                           <?php
                                            if (!isset($_POST["submit"]))
                                            {
                                                     ?>
                                            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="center-block s-promo-block-v2__form g-width-100-percent--xs g-width-400--sm g-bg-color--dark-light g-padding-x-50--xs g-padding-y-80--xs g-radius--4">
                                               <div class="g-text-center--xs g-margin-b-40--xs">
                                                   <h2 class="g-font-size-30--xs g-color--white">تسجيل الدخول</h2>
                                               </div>
                                               <div class="g-margin-b-40--xs">
                                                   <input type="text" name="user_email"  class="form-control s-form-v3__input" placeholder="الاسم-البريد الالكتروني-الهاتف-ID">
                                               </div>
                                               <div class="g-margin-b-40--xs">
                                                   <input type="password" name="user_password" class="form-control s-form-v3__input" placeholder="مفتاحك السري">
                                               </div>      
                                               <div class="g-text-center--xs">
                                                   <button type="submit" name="submit" class="text-uppercase btn-block s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-50--xs g-margin-b-20--xs">دخول</button>
                                               </div>
                                           </form>
                                                <?php  
                                            } else
                                            {
                                                 $user_email=validate($_POST['user_email']);
                                                 $user_password=validate($_POST['user_password']);
                                                         
                                                 if ($user_email != NULL and $user_password != NULL)
                                                 {
                                                     $enc_password = enc_pass($user_password);
                                                     $result = mysqli_query($con,"SELECT * FROM users WHERE user_email='$user_email' OR user_name='$user_email' and user_password='$enc_password'");
                                                     if($result)
                                                     {
                                                         if(mysqli_num_rows($result)>0)
                                                         {
                                                             while($row=mysqli_fetch_array($result))
                                                             {
                                                                 $_SESSION['log']           = "yes";
                                                                 $_SESSION['user_name']     = $row['user_fname']." ".$row['user_lname'];
                                                                 $_SESSION['user_password'] = $row['user_password'];
                                                                 $_SESSION['user_id']       = $row['user_id'];
                                                                 $_SESSION['user_email']    = $row['user_email'];
                                                                 $_SESSION['user_phone']    = $row['user_phone'];
                                                                 $_SESSION['user_fname']    = $row['user_fname'];
                                                                 $_SESSION['user_lname']    = $row['user_lname'];
                                                                 $_SESSION['username']      = $row['user_name'];
                                                                 $_SESSION['user_img']      = $row['user_img'];
                                                                 $_SESSION['user_gender']   = $row['user_gender'];
                                                                 if ($_SESSION["user_email"] == $user_email and $_SESSION["user_password"] == $enc_password)
                                                                 {
                                                                     break;
                                                                 }
                                                             }
                                                             redirect(0,'index.php');
                                                         } else
                                                         {
                                                             outputmsg("f","Wrong Email or Password. Please try again");
                                                             ?>
                                                             <a href="login.php"><button type="submit" class="text-uppercase s-btn s-btn--md s-btn--dark-brd g-radius--50 g-padding-x-50--xs g-margin-b-20--xs">عودة</button></a>
                                                             <?php
                                                         }
                                                     } else
                                                     {
                                                         outputmsg('f',"Unexpected Error");
                                                         ?>
                                                         <a href="login.php"><button type="submit" class="text-uppercase s-btn s-btn--md s-btn--dark-brd g-radius--50 g-padding-x-50--xs g-margin-b-20--xs">عودة</button></a>
                                                         <?php    
                                                     }
                                                 } else
                                                 {
                                                     outputmsg('f',"الرجاء ادخال كل البيانات ");
                                                         ?>
                                                         <a href="login.php"><button type="submit" class="text-uppercase s-btn s-btn--md s-btn--dark-brd g-radius--50 g-padding-x-50--xs g-margin-b-20--xs">عودة</button></a>
                                                         <?php 
                                                 }
                                             }
                                             
                                         ?>       
                                       </div>
                                   </div>
                               </div>
                            </div>
                       </div>
                    <?php
                }
            ?>
        <!-- End Features -->

        <!-- Parallax -->

        <!-- End Parallax -->

        <!-- Culture -->

        <!-- End Culture -->

        <!-- Subscribe -->

        <!-- End Subscribe -->

        <!-- Portfolio Filter -->

        <!-- End Portfolio Filter -->

        <!-- Portfolio Gallery -->

        <!-- End Portfolio -->

        <!-- Testimonials -->
        
        <!-- End Testimonials -->

        <!-- Clients -->

        <!-- End Clients -->

        <!-- News -->

        <!-- End News -->

        <!-- Counter -->

        <!-- End Counter -->

        <!-- Feedback Form -->
        <div class="g-bg-color--sky-light">
            <div class="container g-padding-y-80--xs g-padding-y-125--sm">
                <div class="g-text-center--xs g-margin-b-80--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">رائيك يهمنا</p>
                    <h2 class="g-font-size-32--xs g-font-size-36--md">شاركونا ارائكم</h2>
                </div>
                <form>
                    <div class="row g-margin-b-40--xs">
                        <div class="col-sm-6 g-margin-b-20--xs g-margin-b-0--md">
                            <div class="g-margin-b-20--xs">
                                <input type="text" class="form-control s-form-v2__input g-radius--50" placeholder="اسمك">
                            </div>
                            <div class="g-margin-b-20--xs">
                                <input type="email" class="form-control s-form-v2__input g-radius--50" placeholder="بريدك الالكتروني">
                            </div>
                            <input type="text" class="form-control s-form-v2__input g-radius--50" placeholder="هاتفك">
                        </div>
                        <div class="col-sm-6">
                            <textarea class="form-control s-form-v2__input g-radius--10 g-padding-y-20--xs" rows="8" placeholder="رسالتك"></textarea>
                        </div>
                    </div>
                    <div class="g-text-center--xs">
                        <button type="submit" class="text-uppercase s-btn s-btn--md s-btn--primary-bg g-radius--50 g-padding-x-80--xs">ارسال</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Feedback Form -->

        <!-- Google Map -->
        <section class="s-google-map">
            <div id="js__google-container" class="s-google-container g-height-400--xs"></div>
        </section>
        <!-- End Google Map -->
        <!--========== END PAGE CONTENT ==========-->

        <?php include_once("footer.php") ?>

        <!--========== JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) ==========-->
        <!-- Vendor -->
        <script type="text/javascript" src="vendor/jquery.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.migrate.min.js"></script>
        <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.smooth-scroll.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.back-to-top.min.js"></script>
        <script type="text/javascript" src="vendor/scrollbar/jquery.scrollbar.min.js"></script>
        <script type="text/javascript" src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="vendor/swiper/swiper.jquery.min.js"></script>
        <script type="text/javascript" src="vendor/waypoint.min.js"></script>
        <script type="text/javascript" src="vendor/counterup.min.js"></script>
        <script type="text/javascript" src="vendor/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.parallax.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsXUGTFS09pLVdsYEE9YrO2y4IAncAO2U"></script>
        <script type="text/javascript" src="vendor/jquery.wow.min.js"></script>

        <!-- General Components and Settings -->
        <script type="text/javascript" src="js/global.min.js"></script>
        <script type="text/javascript" src="js/components/header-sticky.min.js"></script>
        <script type="text/javascript" src="js/components/scrollbar.min.js"></script>
        <script type="text/javascript" src="js/components/magnific-popup.min.js"></script>
        <script type="text/javascript" src="js/components/swiper.min.js"></script>
        <script type="text/javascript" src="js/components/counter.min.js"></script>
        <script type="text/javascript" src="js/components/portfolio-3-col.min.js"></script>
        <script type="text/javascript" src="js/components/parallax.min.js"></script>
        <script type="text/javascript" src="js/components/google-map.min.js"></script>
        <script type="text/javascript" src="js/components/wow.min.js"></script>
        <!--========== END JAVASCRIPTS ==========-->
        <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5abe9bfdd7591465c7091216/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

    </body>
    <!-- End Body -->
</html>


