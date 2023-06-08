<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $model app\models\ContactForm */

$this->title = 'ABOUT';
?>


<center>
    <br>
    <br>
    <div class="site-about" style="color:crimson">
    <h1><?= Html::encode($this->title) ?></h1>
    <h2 style="color:white">
        This is the About page. You may modify the following file to customize its content:
    </h2>

    <code><?= __FILE__ ?></code>
</div>
<br>
<br>
</center>
