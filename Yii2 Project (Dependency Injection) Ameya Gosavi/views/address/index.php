<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AddressSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Useraddresses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="useraddress-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Useraddress', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'user_address_id',
            'user_id',
            'address:ntext',
            'city',
            'state',
            //'country',
            //'zip',
            //'created_at',

            [
                    'class' => 'yii\grid\ActionColumn',
                    'header' => 'Action',
                    'headerOptions' => ['width:90'],
                    'template' => '{update} {delete} {view}',
                    'buttons' => [
                        'update' => function ($url, $model, $key) {
                            return Html::a('update', ['update', 'user_address_id'=>$model->user_address_id ]);
                        },
                        'view' => function ($url, $model, $key) {
                            return Html::a('view', ['view', 'user_address_id'=>$model->user_address_id ]);
                        },
                    ]
            ],
        ],
    ]); ?>


</div>
