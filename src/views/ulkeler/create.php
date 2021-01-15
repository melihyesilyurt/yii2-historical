<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model melihyesilyurt\historical\models\Ulkeler */

$this->title = 'Create Ulkeler';
$this->params['breadcrumbs'][] = ['label' => 'Ulkelers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ulkeler-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
