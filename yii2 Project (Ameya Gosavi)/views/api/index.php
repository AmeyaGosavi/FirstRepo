<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;
use yii\widgets\ActiveForm;


$this->title = 'Apis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Api', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($searchModel, 'api_title')->textInput(['maxlength' => true, 'placeholder' => 'Search Title...']) ?>
    <?= $form->field($searchModel, 'api_url')->textInput(['maxlength' => true, 'placeholder' => 'Search Url...']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'class' => 'yii\grid\SerialColumn',
                'header' => 'Sr.No.',
            ],
            'id', 
            'project_id', 
            'module_id', 
            'url', 
            'title', 
            'description', 
            [
                'attribute' => 'method',
                'label' => 'Method',
                'filter' => ['GET' => 'GET', 'POST' => 'POST', 'PUT' => 'PUT', 'UPDATE' => 'UPDATE', 'DELETE' => 'DELETE'],
            ], 
            'request', 
            'response',
            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Action',
                'headerOptions' => ['width:90'],
                'template' => '{update}<br>{delete}<br>{view}',
                //'buttons' => ['class' => 'pagination'],
                
            ],
        ],
        'layout' => '{items}{pager}{summary}',
        'showOnEmpty' => false,
        'emptyCell' => false,
    ]);
    ?>


</div>
