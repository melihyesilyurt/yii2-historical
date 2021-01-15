<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model melihyesilyurt\historical\models\Ulkeler */

$this->title = 'Update Ulkeler: ' . $model->ulke_id;
$this->params['breadcrumbs'][] = ['label' => 'Ulkelers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ulke_id, 'url' => ['view', 'id' => $model->ulke_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ulkeler-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
