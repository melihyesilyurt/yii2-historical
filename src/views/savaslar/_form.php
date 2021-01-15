<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model melihyesilyurt\historical\models\Savaslar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="savaslar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'savas_adi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'savas_yeri')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'olum_sayisi')->textInput() ?>

    <?= $form->field($model, 'savas_tarihi')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
