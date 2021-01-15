<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel melihyesilyurt\historical\models\SavaslarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Savaslar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="savaslar-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Savaslar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'savas_id',
            'savas_adi',
            'savas_yeri',
            'olum_sayisi',
            'savas_tarihi',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
