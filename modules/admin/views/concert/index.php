<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ConcertSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Concerts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="concert-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Concert', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'place',
//            'performance_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
