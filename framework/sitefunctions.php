<?php

function validate($data)
{
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    
    return $data;
}

########################################

function enc_pass($password)
{
    $password=md5($password);
    $password=substr($password,0,5);
    $password=sha1($password);
    $password=substr($password,0,5);
    
    return $password;
}

##########################################

function outputmsg($status,$msg)
{
    ?>
        <div class="alert <?php if($status=="s") echo "alert-success"; else echo "alert-danger"; ?>">
            <?php echo $msg; ?>
        </div>
    
    <?php
}

#############################################

function redirect($sec,$url)
{
    header("refresh:$sec;url=$url");
}

?>