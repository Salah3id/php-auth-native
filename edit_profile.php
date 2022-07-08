<?php
session_start();
include_once("framework/sitefunctions.php");
include_once("framework/config.php");


ob_start();
if(!isset($_SESSION['log'])) {
    die();
    redirect(0,'index.php');
}
    if (isset($_GET['id']))
    {
        if ($_GET['id'] != $_SESSION['user_id']) {
            redirect(0,'profile.php');
            die();
        }
        
    } else
    {
        redirect(0,'profile.php');
    }

include_once("header.php");
?>
    <!-- Body -->
        <!--========== PROMO BLOCK ==========-->
        <!--========== END PROMO BLOCK ==========-->

        <!--========== PAGE CONTENT ==========-->
        <!-- Mockup -->
        <div class="container">
            <div class="center-block s-mockup-v1" style="margin-top: 150px;">
                <ul class="nav nav-tabs">
                    <li role="presentation" class="<?php if($_SERVER['PHP_SELF'] == '/makan/profile.php') echo 'active'; ?>"><a href="profile.php"><span class="glyphicon glyphicon-fire"></span></a></li>
                    <li role="presentation" class="<?php if($_SERVER['PHP_SELF'] == '/makan/allimg.php') echo 'active'; ?>"><a href="allimg.php"><span class="glyphicon glyphicon-picture"></span></a></li>
                    <li role="presentation" class="<?php if($_SERVER['PHP_SELF'] == '/makan/messenger.php') echo 'active'; ?>"><a href="messenger.php"><span class="glyphicon glyphicon-comment"></span></a></li>
                    <li role="presentation" class="<?php if($_SERVER['PHP_SELF'] == '/makan/calendar.php') echo 'active'; ?>"><a href="calendar.php"><span class="glyphicon glyphicon-list-alt"></span></a></li>
                    <li role="presentation" class="<?php if($_SERVER['PHP_SELF'] == '/makan/about.php') echo 'active'; ?>"><a href="about.php"><span class="glyphicon glyphicon-info-sign"></span></a></li>
                    <li role="presentation" class="<?php if($_SERVER['PHP_SELF'] == '/makan/edit_profile.php') echo 'active'; ?>"><a href="edit_profile.php"><span class="glyphicon glyphicon-cog"></span></a></li>
                </ul>
            </div>
        </div>
        <!-- End Mockup -->
        <div class="container">
    <h1>اعدادات مكانك</h1>
  	<hr>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="img/users/<?php echo $_SESSION['user_img'] ?>" id="pic"  class="avatar img-circle" alt="avatar">
          <style>
            .hide-me {
                width: 0.1px;
                height: 0.1px;
                opacity: 0;
                overflow: hidden;
                position: absolute;
                z-index: -1;
            }
            .label-pic {
                width: 40px;
                height: 40px;
                font-size: 30px;
            }
            .label-pic:hover {
                color: #13b1cd;
            }
          </style>
           <input type="file" name="upload_image" id="upload_image" accept="image/*" class="form-control hide-me" /><br>
           <label class="glyphicon glyphicon-camera label-pic" for="upload_image"></label>
           <!-- this script for hide old img when user click update button
           has class 'btn btn-success crop_image' -->
           <script>
            function hide_pic (){
                var pic = document.getElementById("pic");
                pic.style.display = "none";
            }
           </script>
           <div id="uploaded_image"></div>
           
           <!-- pop up img crop -->
           <div id="uploadimageModal" class="modal" role="dialog">
            <div class="modal-dialog">
             <div class="modal-content">
                   <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h4 class="modal-title">تغيير صورتك</h4>
                   </div>
                   <div class="modal-body">
                     <div class="row">
                  <div class="col-md-8 text-center">
                   <div id="image_demo" style="width:350px; margin-top:30px"></div>
                  </div>
                  <div class="col-md-4" style="padding-top:30px;">
                   <br />
                   <br />
                   <br/>
                   <button class="btn btn-success crop_image" onclick="hide_pic();">قص وتغيير</button>
                </div>
               </div>
                   </div>
                   <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">أغلاق</button>
                   </div>
                </div>
               </div>
           </div>
           <?php include_once("vendor/croppie.pop.js");?>
           
           <!-- End pop up img crop -->
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info text-right">
        <div class="alert alert-info alert-dismissable text-right">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          عليك استخدام معلوماتك الحقيقة ليتعرف الاخرون على مكانك  
        </div> 
        <h3>المعلومات الشخصية</h3>
        
        <?php
        if (!isset($_POST["submit"]))
        {
           ?>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])."?id=".$_SESSION['user_id'] ?>" class="form-horizontal col-centered" role="form">
          <div class="form-group">
            <div class="col-xs-10">
              <input name="user_fname" class="form-control text-right" type="text" value="<?php echo $_SESSION['user_fname'] ?>"> 
            </div>
            <label class="col-xs-2 control-label">الاسم الاول</label>
          </div>
          <div class="form-group">
            <div class="col-xs-10">
              <input name="user_lname" class="form-control text-right" type="text" value="<?php echo $_SESSION['user_lname'] ?>">
            </div>
            <label  class="col-xs-2 control-label">الاسم الثاني</label>
          </div>
          <div class="form-group">
            <div class="col-xs-10">
              <input name="username" class="form-control text-right" type="text" value="<?php echo $_SESSION['username'] ?>">
            </div>
            <label class="col-xs-2 control-label">اسم المستخدم</label>
          </div>
          <div class="form-group">
            <div class="col-xs-10">
              <input name="user_email" class="form-control text-right" type="email" value="<?php echo $_SESSION['user_email'] ?>">
            </div>
            <label class="col-xs-2 control-label">البريد الالكتروني</label>
          </div>
          
          
          
          <div class="form-group">
            <div class="col-xs-10">
              <input placeholder="<?php if ($_SESSION['user_phone'] == '0') echo 'لم يتم ادخاله' ?>" name="user_phone" class="form-control text-right" type="number" value="<?php if($_SESSION['user_phone'] != '0') echo  $_SESSION['user_phone'] ?>">
            </div>
            <label class="col-xs-2 control-label">الهاتف</label>
          </div>
          
          
          
          <div class="form-group">
            <div class="col-xs-10">
              <select name="user_gender">
                <option value="0">غير محدد</option>
                <option value="f" <?php if($_SESSION['user_gender'] == "f") echo "selected";?>>أنثى</option>
                <option value="m" <?php if($_SESSION['user_gender'] == "m") echo "selected";?> >ذكر</option>
              </select>
            </div>
            <label class="col-xs-2 control-label">النوع</label>
          </div>
          
          
          
          <div class="form-group">
            <div class="col-xs-10">
              <a href="profile.php" class="btn btn-default">تجاهل</a>
              <span></span>
              <input name="submit" type="submit" class="btn btn-primary" value="حفظ التغيرات">
            </div>
            <label class="col-xs-2 control-label"></label>
          </div>
        </form>
        <a href="editpass.php"><button class="btn btn-info">تغيير كلمة السر <span class="glyphicon glyphicon-lock"></span></button></a>
           <?php
        }
        else
        {
            $user_fname       = validate($_POST["user_fname"]);
            $user_lname       = validate($_POST["user_lname"]);
            $username          = validate($_POST["username"]);
            $user_email       = validate($_POST["user_email"]);
            $user_phone       = validate($_POST["user_phone"]);
            $user_gender       = validate($_POST["user_gender"]);
            if ($user_fname != NULL and $user_lname != NULL and $username != NULL and $user_email != NULL and $user_phone != NULL)
            {
                // update all
                $email    = mysqli_query($con,"SELECT `user_email` FROM `users` WHERE `user_email` = '$user_email' ");
                $user_name = mysqli_query($con,"SELECT `user_name` FROM `users` WHERE `user_name` = '$username' ");
                if (mysqli_num_rows($email) >= 1 )
                {
                    $row_email = mysqli_fetch_array($email);
                    $row_username = mysqli_fetch_array($user_name);
                    $r_email = $row_email['user_email'];
                    $r_username = $row_username['user_name'];
                    if($r_email != $_SESSION['user_email'])
                    {
                        outputmsg("f","1 بريدالكتروني مستخدم بالفعل");
                    }
                    elseif (mysqli_num_rows($user_name) >= 1 && $r_username != $_SESSION['username'])
                    {
                        outputmsg("f","1اسم المستخدم  موجود بالفعل");
                    } else
                    {
                        $user_id = $_SESSION['user_id'];
                        $order = mysqli_query($con,"UPDATE `users` SET 
                        `user_fname`='$user_fname',
                        `user_lname`='$user_lname',
                        `user_name`='$username',
                        `user_email`='$user_email',
                        `user_phone`='$user_phone',
                        `user_gender`='$user_gender'
                         WHERE `user_id` = '$user_id'");
                        if ($order)
                        {
                            $_SESSION['user_name']     = $user_fname." ".$user_lname;
                            $_SESSION['user_email']    = $user_email;
                            $_SESSION['user_phone']    = $user_phone;
                            $_SESSION['user_fname']    = $user_fname;
                            $_SESSION['user_lname']    = $user_lname;
                            $_SESSION['username']      = $username;
                            $_SESSION['user_gender']   = $user_gender;
                            redirect(0,"profile.php");
                        }
                        else
                        {
                            outputmsg("f","هناك خطأ غير متوقع");
                        }
                    }
                } else
                    {
                        $user_id = $_SESSION['user_id'];
                        $order = mysqli_query($con,"UPDATE `users` SET 
                        `user_fname`='$user_fname',
                        `user_lname`='$user_lname',
                        `user_name`='$username',
                        `user_email`='$user_email',
                        `user_phone`='$user_phone',
                        `user_gender`='$user_gender'
                         WHERE `user_id` = '$user_id'");
                        if ($order)
                        {
                            $_SESSION['user_name']     = $user_fname." ".$user_lname;
                            $_SESSION['user_email']    = $user_email;
                            $_SESSION['user_phone']    = $user_phone;
                            $_SESSION['user_fname']    = $user_fname;
                            $_SESSION['user_lname']    = $user_lname;
                            $_SESSION['username']      = $username;
                            $_SESSION['user_gender']   = $user_gender;
                            redirect(0,"profile.php");
                        }
                        else
                        {
                            outputmsg("f","هناك خطأ غير متوقع");
                        }
                    }
                    
                    
                    
                    //the same with out phone;
                
            } else if ($user_fname != NULL and $user_lname != NULL and $username != NULL and $user_email != NULL)
            {
                //update without phone = 0
                $email    = mysqli_query($con,"SELECT `user_email` FROM `users` WHERE `user_email` = '$user_email'");
                $user_name = mysqli_query($con,"SELECT `user_name` FROM `users` WHERE `user_name` = '$username'");
                if (mysqli_num_rows($email) >= 1)
                {
                    $row_email    = mysqli_fetch_array($email);
                    $row_username = mysqli_fetch_array($user_name);
                    $r_email      = $row_email['user_email'];
                    $r_username   = $row_username['user_name'];
                    if($r_email != $_SESSION['user_email'])
                    {
                        outputmsg("f","22بريدالكتروني مستخدم بالفعل");
                    }
                    elseif (mysqli_num_rows($user_name) >= 1 && $r_username != $_SESSION['username'])
                    {   
                        outputmsg("f"," 2اسم المستخدم  موجود بالفعل");
                    } else
                    {
                        $user_id = $_SESSION['user_id'];
                        $order = mysqli_query($con,"UPDATE `users` SET 
                        `user_fname`='$user_fname',
                        `user_lname`='$user_lname',
                        `user_name`='$username',
                        `user_email`='$user_email',
                        `user_gender`='$user_gender'
                         WHERE `user_id` = '$user_id'");
                        if ($order)
                        {
                            $_SESSION['user_name']     = $user_fname." ".$user_lname;
                            $_SESSION['user_email']    = $user_email;
                            $_SESSION['user_phone']    = $user_phone;
                            $_SESSION['user_fname']    = $user_fname;
                            $_SESSION['user_lname']    = $user_lname;
                            $_SESSION['username']      = $username;
                            $_SESSION['user_gender']   = $user_gender;
                            redirect(0,"profile.php");
                        }
                        else
                        {
                            outputmsg("f","هناك خطأ غير متوقع");
                        }
                    }
                } else
                    {
                        $user_id = $_SESSION['user_id'];
                        $order = mysqli_query($con,"UPDATE `users` SET 
                        `user_fname`='$user_fname',
                        `user_lname`='$user_lname',
                        `user_name`='$username',
                        `user_email`='$user_email',
                        `user_gender`='$user_gender'
                         WHERE `user_id` = '$user_id'");
                        if ($order)
                        {
                            $_SESSION['user_name']     = $user_fname." ".$user_lname;
                            $_SESSION['user_email']    = $user_email;
                            $_SESSION['user_phone']    = $user_phone;
                            $_SESSION['user_fname']    = $user_fname;
                            $_SESSION['user_lname']    = $user_lname;
                            $_SESSION['username']      = $username;
                            $_SESSION['user_gender']   = $user_gender;
                            redirect(0,"profile.php");
                        }
                        else
                        {
                            outputmsg("f","هناك خطأ غير متوقع");
                        }
                    }
                
            } else 
            {
            outputmsg("f","يجب اكمال التعديل ");
            }
           
        }
    ?>
      </div>
  </div>
</div>
<hr>
    
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
        <script type="text/javascript" src="vendor/croppie.min.js"></script>

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