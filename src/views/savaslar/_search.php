<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model melihyesilyurt\historical\models\SavaslarSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="savaslar-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'savas_id') ?>

    <?= $form->field($model, 'savas_adi') ?>

    <?= $form->field($model, 'savas_yeri') ?>

    <?= $form->field($model, 'olum_sayisi') ?>

    <?= $form->field($model, 'savas_tarihi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
