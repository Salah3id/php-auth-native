<?php
        ob_start();
        include_once("framework/sitefunctions.php");
        include_once("framework/config.php");
        session_start();
        if(isset($_SESSION['log']))
        {
            redirect(0,'index.php');
        } else
        {
            include_once('header.php');
           ?>
           
                        <!--========== PROMO BLOCK ==========-->
                    <div class="s-promo-block-v1 g-bg-color--primary-to-blueviolet-ltr g-fullheight--md">
                        <div class="container g-ver-center--md g-padding-y-100--xs">
                            <div class="row g-hor-centered-row--md g-margin-t-30--xs g-margin-t-20--sm">
                                <div class="col-lg-6 col-sm-6 g-hor-centered-row__col g-text-center--xs g-text-left--md g-margin-b-60--xs g-margin-b-0--md">
                                    <div class="s-promo-block-v1__square-effect g-margin-b-60--xs">
                                        <h1 class="g-font-size-32--xs g-font-size-45--sm g-font-size-50--lg g-color--white">كن على يقين ان هدفنا دائما <br>هو ان تكون سعيدا </h1>
                                        <p class="g-font-size-20--xs g-font-size-26--md g-color--white g-margin-b-0--xs">لا تنسى ان مكانكو بالفعل هو <br>مكانك ومكانا جمعيا</p>
                                    </div>
                                    <span class="g-display-block--xs g-display-inline-block--lg g-margin-b-10--xs g-margin-b-10--lg">
                                        <a href="#" class="s-btn s-btn--xs s-btn--white-brd g-padding-x-30--xs g-radius--50">
                                            <span class="s-btn__element--left">
                                                <i class="g-font-size-32--xs ti-apple"></i>
                                            </span>
                                            <span class="s-btn__element--right g-padding-x-10--xs">
                                                <span class="g-display-block--xs g-font-size-11--xs">قريبا متوفر على </span>
                                                <span class="g-font-size-16--xs">App Store</span>
                                            </span>
                                        </a>
                                    </span>
                                    <span class="g-padding-x-0--xs g-padding-x-10--lg">
                                        <a href="#" class="s-btn s-btn--xs s-btn--white-brd g-padding-x-30--xs g-radius--50">
                                            <span class="s-btn__element--left">
                                                <i class="g-font-size-32--xs ti-android"></i>
                                            </span>
                                            <span class="s-btn__element--right g-padding-x-10--xs">
                                                <span class="g-display-block--xs g-font-size-11--xs">قريبا متوفر على</span>
                                                <span class="g-font-size-16--xs">Google Play</span>
                                            </span>
                                        </a>
                                    </span>
                                </div>
                                <div class="col-lg-2"></div>
                                <div class="col-lg-4 col-sm-4 g-hor-centered-row__col">
                                    <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                                        <?php if(!isset($_POST['submit']))
                                        {
                                            ?>
                                                <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="center-block g-width-350--xs g-bg-color--white-opacity-lightest g-box-shadow__blueviolet-v1 g-padding-x-40--xs g-padding-y-60--xs g-radius--4">
                                                    <div class="g-text-center--xs g-margin-b-40--xs">
                                                        <h2 class="g-font-size-30--xs g-color--white">تسجيل الدخول</h2>
                                                    </div>
                                                    <div class="g-margin-b-30--xs">
                                                        <input name="user_email" type="text" class="form-control s-form-v3__input" placeholder="* Email">
                                                    </div>
                                                    <div class="g-margin-b-30--xs">
                                                        <input  type="password" name="user_password" class="form-control s-form-v3__input" placeholder="* Password">
                                                    </div>
                                                    <div class="g-text-center--xs">
                                                        <button type="submit" name="submit" class="text-uppercase btn-block s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-50--xs g-margin-b-20--xs">دخول</button>
                                                        <a class="g-color--white g-font-size-13--xs" href="#">هل نسيت كلمة السر.. حاول تفتكرها</a><br>
                                                        <a class="g-color--white g-font-size-20--xs" href="registration.php">أنشاء حساب جديد</a><br>
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
                                                        outputmsg("f","هذا الحساب غير موجود");
                                                        ?>
                                                        <a href="javascript:history.go(-1)"><button type="submit" class="text-uppercase s-btn s-btn--md s-btn--dark-brd g-radius--50 g-padding-x-50--xs g-margin-b-20--xs">عودة</button></a>
                                                        <?php
                                                    }
                                                } else
                                                {
                                                    outputmsg('f',"Unexpected Error");
                                                    ?>
                                                    <a href="javascript:history.go(-1)"><button type="submit" class="text-uppercase s-btn s-btn--md s-btn--dark-brd g-radius--50 g-padding-x-50--xs g-margin-b-20--xs">عودة</button></a>
                                                    <?php    
                                                }
                                            } else
                                            {
                                                outputmsg('f',"الرجاء ادخال كل البيانات ");
                                                    ?>
                                                    <a href="javascript:history.go(-1)"><button type="submit" class="text-uppercase s-btn s-btn--md s-btn--dark-brd g-radius--50 g-padding-x-50--xs g-margin-b-20--xs">عودة</button></a>
                                                    <?php 
                                            }                                           
                                        }
                                        ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--========== END PROMO BLOCK ==========-->
                    <?php include_once("footer.php") ?>
                            <!--========== JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) ==========-->
                    <!-- Vendor -->
                    <script type="text/javascript" src="vendor/jquery.min.js"></script>
                    <script type="text/javascript" src="vendor/jquery.migrate.min.js"></script>
                    <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
                    <script type="text/javascript" src="vendor/jquery.smooth-scroll.min.js"></script>
                    <script type="text/javascript" src="vendor/jquery.back-to-top.min.js"></script>
                    <script type="text/javascript" src="vendor/scrollbar/jquery.scrollbar.min.js"></script>
                    <script type="text/javascript" src="vendor/vidbg.min.js"></script>
                    <script type="text/javascript" src="vendor/swiper/swiper.jquery.min.js"></script>
                    <script type="text/javascript" src="vendor/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
                    <script type="text/javascript" src="vendor/jquery.wow.min.js"></script>
            
                    <!-- General Components and Settings -->
                    <script type="text/javascript" src="js/global.min.js"></script>
                    <script type="text/javascript" src="js/components/header-sticky.min.js"></script>
                    <script type="text/javascript" src="js/components/scrollbar.min.js"></script>
                    <script type="text/javascript" src="js/components/swiper.min.js"></script>
                    <script type="text/javascript" src="js/components/portfolio-4-col-slider.min.js"></script>
                    <script type="text/javascript" src="js/components/wow.min.js"></script>
                    <!--========== END JAVASCRIPTS ==========-->
            
                </body>
                <!-- End Body -->
            </html>
         <?php
        }
        ?>