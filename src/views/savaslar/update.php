<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model melihyesilyurt\historical\models\Savaslar */

$this->title = 'Update Savaslar: ' . $model->savas_id;
$this->params['breadcrumbs'][] = ['label' => 'Savaslars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->savas_id, 'url' => ['view', 'id' => $model->savas_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="savaslar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
