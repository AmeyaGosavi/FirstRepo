<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Project;
/* @var $this yii\web\View */
/* @var $model app\models\Modules */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="modules-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'module_title')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'module_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'project_id')->dropdownList(
        ArrayHelper::map(Project::find()->all(),'project_id','project_title'
    ),['prompt' => 'Select Project name']); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
