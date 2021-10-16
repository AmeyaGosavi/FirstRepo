<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProjectSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Projects';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Project', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'project_id',
            'title',
            'description:ntext',
            'created_at',

            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Action',
                'template' => '{update} {delete} {view}',
                'buttons' => [
                    'update' => function ($url, $model, $key) {
                        return Html::a('update', ['update', 'project_id'=>$model->project_id]);
                    },
                    'view' => function ($url, $model, $key) {
                        return Html::a('view', ['view', 'project_id'=>$model->project_id]);
                    },
                ]

            ],
        ],
    ]); ?>


</div>
