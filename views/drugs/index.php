<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DrugsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Drugs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="drugs-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Drugs', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'url:url',
            'title',
            'latin',
            'pokazaniya:ntext',
             'protivopokazaniya:ntext',
             'beremennost:ntext',
             'pobochnye:ntext',
             'homeopathy',
             'content:ntext',
             'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
