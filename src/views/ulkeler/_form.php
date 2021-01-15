<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model melihyesilyurt\historical\models\Ulkeler */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ulkeler-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'savaslar_savas_id')->textInput() ?>

    <?= $form->field($model, 'ulke_adi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kurulus_yili')->textInput() ?>

    <?= $form->field($model, 'yikilis_yili')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
