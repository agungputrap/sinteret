<?php
/**
 * Created by PhpStorm.
 * User: reals
 * Date: 7/13/2017
 * Time: 2:26 PM
 */
?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2 class="headline centered margin-top-80">
                Informasi Gereja Telah Terkirim
                <span class="margin-top-25">
					Terima kasih telah berpartisipasi dalam mengumpulkan informasi gereja.
                    anda dapat kembali ke halaman <super><?php echo CHtml::link('formulir informasi gereja', Yii::app()->createUrl('gereja/tambah')); ?> </super> atau
                    kembali ke <super><?php echo CHtml::link('halaman depan', Yii::app()->createUrl('site/index')); ?> </super>
				</span>
            </h2>
        </div>
    </div>
</div>
