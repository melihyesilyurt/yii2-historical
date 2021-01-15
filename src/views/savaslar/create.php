<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model melihyesilyurt\historical\models\Savaslar */

$this->title = 'Create Savaslar';
$this->params['breadcrumbs'][] = ['label' => 'Savaslars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="savaslar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
