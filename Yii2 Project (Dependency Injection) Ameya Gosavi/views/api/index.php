<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ApiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Apis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="api-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Api', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'api_id',
            [
                'attribute' => 'project_id',
                'value' => 'project.title'
            ],
            [
                'attribute' => 'module_id',
                'value' => 'module.title'
            ],
            'url:ntext',
            'title',
            'description:ntext',
            //'method',
            //'request',
            //'response',
            //'created_at',

            [
                    'class' => 'yii\grid\ActionColumn',
                    'header' => 'Action',
                    'headerOptions' => ['width:90'],
                    'template' => '{update} {delete} {view}',
                    'buttons' => [
                        'update' => function ($url, $model, $key) {
                            return Html::a('update', ['update', 'api_id'=>$model->api_id]);
                        },
                        'view' => function ($url, $model, $key) {
                            return Html::a('view', ['view', 'api_id'=>$model->api_id]);
                        },
                    ]
            ],
        ],
    ]); ?>


</div>
