<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Banners';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="banner-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Banner', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'name',
            [
              'class' => 'yii\grid\DataColumn',
              'attribute' => 'type',
              'value' => function($model) {
                return $model->type_options[$model->type];
              },
            ],
            [
              'class' => 'yii\grid\DataColumn',
              'attribute' => 'file_id',
              'value' => function($model) {
                return Html::img(['/file', 'id' => $model->file_id], ['width' => 300]);
              },
              'format' => 'raw',
            ],
            'position',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
