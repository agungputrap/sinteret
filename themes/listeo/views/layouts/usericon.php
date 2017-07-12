<?php
/**
 * Created by PhpStorm.
 * User: reals
 * Date: 7/7/2017
 * Time: 2:52 PM
 */
?>
<?php if(Yii::app()->user->isGuest){ ?>
<div class="right-side">
    <div class="header-widget">
        <a href="#sign-in-dialog" class="sign-in popup-with-zoom-anim"><i class="sl sl-icon-login"></i> Masuk</a>
    </div>
</div>
<?php }else{ ?>
<?php
    $modelUser = UserCustom::model()->findByAttributes(array('google_id'=>Yii::app()->session['eauth_profile']['id']));
?>
<div class="right-side">
    <div class="header-widget">

        <!-- User Menu -->
        <div class="user-menu">
            <div class="user-name"><span><img src="<?php echo $modelUser->gambar; ?>" alt=""></span><?php echo $modelUser->nama; ?></div>
            <ul>
                <li><a href="<?php echo Yii::app()->createUrl('site/logout');?>"><i class="sl sl-icon-power"></i> Keluar</a></li>
            </ul>
        </div>
    </div>
</div>
<?php } ?>