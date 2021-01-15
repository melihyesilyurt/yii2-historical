<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel melihyesilyurt\historical\models\UlkelerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ulkeler';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ulkeler-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ulkeler', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ulke_id',
            'savaslar_savas_id',
            'ulke_adi',
            'kurulus_yili',
            'yikilis_yili',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
