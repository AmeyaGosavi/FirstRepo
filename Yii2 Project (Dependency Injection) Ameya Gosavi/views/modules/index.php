<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ModulesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Modules';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="modules-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Modules', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'module_id',
            [
                'attribute' => 'project_id',
                'value' => 'project.title'
            ],
            'title',
            'description:ntext',
            'created_at',

            [
                    'class' => 'yii\grid\ActionColumn',
                    'header' => 'Action',
                    'headerOptions' => ['width:90'],
                    'template' => '{update} {delete} {view}',
                    'buttons' => [
                        'update' => function ($url, $model, $key) {
                            return Html::a('update', ['update', 'module_id'=>$model->module_id]);
                        },
                        'view' => function ($url, $model, $key) {
                            return Html::a('view', ['view', 'module_id'=>$model->module_id]);
                        },
                    ]
            ],
        ],
    ]); ?>


</div>
