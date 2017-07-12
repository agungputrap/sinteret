<?php
/**
 * Created by PhpStorm.
 * User: reals
 * Date: 7/7/2017
 * Time: 2:19 PM
 */
?>
<!-- Sign In Popup -->
<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
    <div class="small-dialog-header">
        <h3>Masuk</h3>
    </div>
    <!--Tabs -->
    <div class="sign-in-form style-1">
        <!-- Login -->
        <div class="tab-content" id="tab1" style="display: none;">
            <p class="text-center">
                <a href="#" onClick="MyWindow=window.open('http://gemana.dev/site/login?service=google_oauth','MyWindow','width=450,height=380'); return false;">
                    <img class="footer-logo" src="<?php echo Yii::app()->theme->baseUrl; ?>/sources/images/btn-google.png" alt="">
                </a>
            </p>
        </div>
    </div>
</div>
<!-- Sign In Popup / End -->
