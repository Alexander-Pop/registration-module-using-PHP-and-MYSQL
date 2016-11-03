<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Registration */

$this->title = 'Register People';
?>
<div class="registration-create">

    <h3><b><?= Html::encode($this->title) ?></b></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
