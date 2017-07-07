<?php
/**
 * Created by PhpStorm.
 * User: reals
 * Date: 7/7/2017
 * Time: 2:14 PM
 */
?>
<div class="container">
    <?php
    $session = Yii::app()->session;
    if (isset($session['eauth_profile'])) {
        echo '<div style="padding: 20px;"><strong>EAuth profile:</strong><br/>';
        CVarDumper::dump($session['eauth_profile'], 10, true);
        echo '</div>';
    }
    ?>
    <h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

    <p>Congratulations! You have successfully created your Yii application.</p>

    <p>You may change the content of this page by modifying the following two files:</p>
    <ul>
        <li>View file: <code><?php echo __FILE__; ?></code></li>
        <li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
    </ul>

    <p>For more details on how to further develop this application, please read
        the <a href="http://www.yiiframework.com/doc/">documentation</a>.
        Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
        should you have any questions.</p>

</div>
