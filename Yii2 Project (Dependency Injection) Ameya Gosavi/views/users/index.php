<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UsersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Users', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'user_id',
            'first_name',
            'last_name',
            'email:email',
            'profile_pic:ntext',
            //'gender',
            //'created_at',
            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Action',
                'template' => '{update} {delete} {view}',
                'buttons' => [
                    'update' => function ($url, $model, $key) {
                        return Html::a('update', ['update', 'user_id'=>$model->user_id]);
                    },
                    'view' => function ($url, $model, $key) {
                        return Html::a('view', ['view', 'user_id'=>$model->user_id]);
                    },
                ]  
            ],
        ],
    ]); ?>


</div>
