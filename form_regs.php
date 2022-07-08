<?php
include_once("framework/sitefunctions.php");
include_once("framework/config.php");
?>
<div class="s-promo-block-v2 js__parallax-window" style="background: url(img/1920x1080/03.jpg) 50% 0 no-repeat fixed; background-size: cover; margin-top: 150px;">
    <div class="container">
        <div class="row g-hor-centered-row--md">
            <div class="col-md-7 g-hor-centered-row__col g-padding-y-80--xs">
                <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white">انضم الى مكانكو مجاناً</h2>
                <div class="g-margin-b-20--xs">
                    <span class="g-font-size-30--xs g-font-weight--700 g-color--white">21</span>
                    <span class="g-font-size-14--xs g-color--white">st</span>
                    <span class="g-font-size-30--xs g-color--white g-padding-x-5--xs"><i>of</i></span>
                    <span class="g-font-size-30--xs g-font-weight--700 g-color--white">December</span>
                </div>
                <p class="g-font-size-18--xs g-color--white-opacity g-margin-b-40--xs">نسعى دائماً لتوفير افضل الخدمات لنسعدكم بما نقدمه باسعار وتخفيضات هائلة ونوفر لكم الاستمتاع داخل افخم الاماكن في مصر </p>
                <a href="login.php" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50 g-padding-x-50--xs g-margin-b-20--xs">دخول</a>
            </div>
            <div class="col-md-5 g-hor-centered-row__col g-margin-b-80--xs"> 
<script>
function validate(){
    "use strict";
    var user_fname       = document.getElementById("user_fname");
    var user_lname       = document.getElementById("user_lname");
    var user_email       = document.getElementById("user_email");
    var user_password    = document.getElementById("user_password");
    var co_user_password = document.getElementById("co_user_password");
    var fn_span          = document.getElementById("fn_span");
    var ln_name          = document.getElementById("ln_name");
    var email_span       = document.getElementById("email_span");
    var pass_span        = document.getElementById("pass_span");
    var copass_span      = document.getElementById("copass_span");
    
    
    var letters = (/^[\u0600-\u065F\u066A-\u06EF\u06FA-\u06FFa-zA-Z]+[\u0600-\u065F\u066A-\u06EF\u06FA-\u06FFa-zA-Z-_]*([a-zA-Z0-9]{1})$/);
    var passval = /^[A-Za-z\d]+$/;
    if (user_fname.value == "") {
        fn_span.className = "glyphicon glyphicon-info-sign text-danger";
        fn_span.innerHTML = "اسمك مطلوب";
        user_fname.style.borderBottom = "0.5px red solid";
        user_fname.focus();
        return false;
    }
    else if(!user_fname.value.match(letters))
    {
        fn_span.className = "glyphicon glyphicon-info-sign text-danger";
        fn_span.innerHTML = "اسم غير صالح";
        user_fname.style.borderBottom = "0.5px red solid";
        user_fname.focus();
        return false;
    }
    else
    {
        fn_span.className = "";
        fn_span.innerHTML = "";
        user_fname.style.borderBottom = "";
    }
    if (user_lname.value == "") {
        fn_span.className = "glyphicon glyphicon-info-sign text-danger";
        fn_span.innerHTML = "اسمك مطلوب";
        user_fname.style.borderBottom = "0.5px red solid";
        user_fname.focus();
        return false;
    }
    else if(!user_lname.value.match(letters))
    {
        ln_span.className = "glyphicon glyphicon-info-sign text-danger";
        ln_span.innerHTML = "اسم غير صالح";
        user_lname.style.borderBottom = "0.5px red solid";
        user_lname.focus();
        return false;
    }
    else
    {
        ln_span.className = "";
        ln_span.innerHTML = "";
        user_lname.style.borderBottom = "";
    }
    if (user_email.value == "") {
        email_span.className = "glyphicon glyphicon-info-sign text-danger";
        email_span.innerHTML = "البريد الالكتروني مطلوب";
        user_email.style.borderBottom = "0.5px red solid";
        user_email.focus();
        return false;
    }
    else if (user_email.value.length < 8) {
        email_span.className = "glyphicon glyphicon-info-sign text-danger";
        email_span.innerHTML = "بريد الكتروني غير صالح";
        user_email.style.borderBottom = "0.5px red solid";
        user_email.focus();
        return false;
    }
    else
    {
        email_span.className = "";
        email_span.innerHTML = "";
        user_email.style.borderBottom = "";
        user_email.focus();
    }
    if(!user_password.value.match(passval) || user_password.value.length < 8)
    {
        pass_span.className = "glyphicon glyphicon-info-sign text-danger";
        pass_span.innerHTML = "كلمة سر غير صالحة";
        user_password.style.borderBottom = "0.5px red solid";
        user_password.focus();
        return false;
    }
    else
    {
        pass_span.className = "";
        pass_span.innerHTML = "";
        user_password.style.borderBottom = "";
        copass_span.className = "";
        copass_span.innerHTML = "";
        co_user_password.style.borderBottom = "";
    }
    if (user_password.value == "") {
        pass_span.className = "glyphicon glyphicon-info-sign text-danger";
        pass_span.innerHTML = "كلمة السر مطلوبة";
        user_password.style.borderBottom = "0.5px red solid";
        user_password.focus();
        return false;
    }
    else
    {
        pass_span.className = "";
        pass_span.innerHTML = "";
        user_password.style.borderBottom = "";
    }
     if (co_user_password.value == "") {
        copass_span.className = "glyphicon glyphicon-info-sign text-danger";
        copass_span.innerHTML = "يجب تأكيد كلمة السر";
        co_user_password.style.borderBottom = "0.5px red solid";
        co_user_password.focus();
        return false;
    }
    else
    {
        copass_span.className = "";
        copass_span.innerHTML = "";
        user_password.style.borderBottom = "";
    }
    if (user_password.value != co_user_password.value) {
        pass_span.className = "glyphicon glyphicon-info-sign text-danger";
        pass_span.innerHTML = "كلمة السر غير متطابقة";
        user_password.style.borderBottom = "0.5px red solid";
        copass_span.className = "glyphicon glyphicon-info-sign text-danger";
        copass_span.innerHTML = "كلمة السر غير متطابقة";
        co_user_password.style.borderBottom = "0.5px red solid";
        return false;
    }
    else
    {
        pass_span.className = "";
        pass_span.innerHTML = "";
        user_password.style.borderBottom = "";
        copass_span.className = "";
        copass_span.innerHTML = "";
        co_user_password.style.borderBottom = "";
    }
}
</script>
<?php
        if (!isset($_POST["submit"]))
        {
           ?>
                <form method="post" onSubmit="return validate();" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" class="center-block s-promo-block-v2__form g-width-100-percent--xs g-width-400--sm g-bg-color--dark-light g-padding-x-50--xs g-padding-y-80--xs g-radius--4">
                    <div class="g-text-center--xs g-margin-b-40--xs">
                        <h2 class="g-font-size-30--xs g-color--white">الاشتراك</h2>
                        <div id="div_vald"></div>
                    </div>
                    <div class="g-margin-b-40-xs">
                        <input type="text" name="user_fname" id="user_fname" class="form-control s-form-v3__input" placeholder="الاسم الاول">
                         <span id="fn_span" class=""></span>
                    </div>
                    <div class="g-margin-b-40-xs">
                        <input type="text" name="user_lname" id="user_lname" class="form-control s-form-v3__input" placeholder="الاسم الثاني">
                        <span id="ln_span" class=""></span>
                    </div>
                    <div class="g-margin-b-40-xs">
                        <input type="email" name="user_email" id="user_email"  class="form-control s-form-v3__input" placeholder="البريد الالكتروني">
                        <span id="email_span" class=""></span>
                    </div>
                    <div class="g-margin-b-40-xs">
                        <input type="password" name="user_password" id="user_password" class="form-control s-form-v3__input" placeholder="كلمة السر">
                        <span id="pass_span" class=""></span>
                    </div>
                    <div class="g-margin-b-40-xs">
                        <input type="password" name="co_user_password" id="co_user_password" class="form-control s-form-v3__input" placeholder="تأكيد كلمة السر">
                        <span id="copass_span" class=""></span>
                    </div>
                    <div class="g-text-center-40-xs">
                        <button type="submit" name="submit" class="text-uppercase btn-block s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-50--xs g-margin-b-20--xs">اشتراك</button>
                    </div>
                </form>  
           <?php
        }
        else
        {
           $user_fname    = validate($_POST["user_fname"]);
           $user_lname    = validate($_POST["user_lname"]);
           $user_email    = validate($_POST["user_email"]);
           $user_password = validate($_POST["user_password"]);
           $co_password   = validate($_POST["co_user_password"]);
           
           if($user_fname != NULL and $user_lname != null and $user_email != NULL and $user_password != NULL )
           {
               $result2 = mysqli_query($con,"SELECT * FROM users WHERE user_email='$user_email'");
               if ($result2)
               {
                    if(mysqli_num_rows($result2) > 0)
                    {
                      outputmsg("f","هذا البريد الالكنروني مسجل بالفعل");
                     ?>
                     <a href="javascript:history.go(-1)">
                         <button  class="text-uppercase s-btn s-btn--md s-btn--dark-brd g-radius--50 g-padding-x-50--xs g-margin-b-20--xs">عودة</button>
                     </a>
                     <?php
                     redirect(2000,'index.php');
                    } else
                    {
                        if ($user_password == $co_password)
               {
                    $enc_pass = enc_pass($user_password);
                    $username = $user_fname.time();
                    $order = mysqli_query($con,"INSERT INTO `users`
                                 (`user_id`, `user_fname`, `user_lname`, `user_name`, `user_email`,`user_phone`, `user_password`, `user_img`,`user_gender`)
                                 VALUES (NULL,'$user_fname','$user_lname','$username','$user_email','0','$enc_pass','admin.png','0')");
                    if ($order)
                    {
                     $_SESSION['log']="yes";
                     $_SESSION['user_name'] = $user_fname." ".$user_lname;
                     $_SESSION['user_password'] = $enc_pass;
                     $_SESSION['user_email']= $user_email;
                     $_SESSION['user_phone'] = '0';
                     $_SESSION['user_fname'] = $user_fname;
                     $_SESSION['user_lname'] = $user_lname;
                     $_SESSION['username'] = $username;
                     $_SESSION['user_img']= 'admin.png';
                     $_SESSION['user_gender'] = '0';

                     redirect(0,'index.php');
                    } else
                    {
                     outputmsg("f","There some error please try agin");
                     ?>
                     <a href="javascript:history.go(-1)">
                         <button  class="text-uppercase s-btn s-btn--md s-btn--dark-brd g-radius--50 g-padding-x-50--xs g-margin-b-20--xs">عودة</button>
                     </a>
                     <?php
                    }
                  
               } else
               {
                   outputmsg("f","كلمة السر غير متطابقة");
                   ?>
                   <a href="javascript:history.go(-1)">
                       <button  class="text-uppercase s-btn s-btn--md s-btn--dark-brd g-radius--50 g-padding-x-50--xs g-margin-b-20--xs">عودة</button>
                   </a>
                   <?php
                   
               }
                    }
                } else
                {
                    utputmsg("f","هناك خطأ غير متوقع");
                     ?>
                     <a href="javascript:history.go(-1)">
                         <button  class="text-uppercase s-btn s-btn--md s-btn--dark-brd g-radius--50 g-padding-x-50--xs g-margin-b-20--xs">محاوله اخرى</button>
                     </a>
                     <?php
                     redirect(2000,'index.php');
                }
           } else
           {
               outputmsg("f","يجب ادخال كل المتطلبات ");
               ?>
               <a href="javascript:history.go(-1)">
                   <button  class="text-uppercase s-btn s-btn--md s-btn--dark-brd g-radius--50 g-padding-x-50--xs g-margin-b-20--xs">عودة</button>
               </a>
               <?php
           }
        }
    ?>
            </div>
        </div>
    </div>
</div>