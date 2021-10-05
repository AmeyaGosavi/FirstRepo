<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Project;
use app\models\Modules;
/* @var $this yii\web\View */
/* @var $model app\models\Country */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'project_id')->dropdownList(
        ArrayHelper::map(Project::find()->all(),'project_id','project_title'
    ),['prompt' => 'Select Project name']); ?>

    <?= $form->field($model, 'module_id')->dropdownList(
        ArrayHelper::map(Modules::find()->all(),'module_id','module_title'
    ),['prompt' => 'Select Module name']); ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'method')->dropdownList(
               ['GET' => 'GET','POST' => 'POST','PUT' => 'PUT','DELETE' =>'DELETE'] ,[
                    'prompt' => 'Select Method'
               ]
            );  ?>

    <?= $form->field($model, 'request')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'response')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
