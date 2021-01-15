<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model melihyesilyurt\historical\models\UlkelerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ulkeler-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ulke_id') ?>

    <?= $form->field($model, 'savaslar_savas_id') ?>

    <?= $form->field($model, 'ulke_adi') ?>

    <?= $form->field($model, 'kurulus_yili') ?>

    <?= $form->field($model, 'yikilis_yili') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
