<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Users;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model app\models\Useraddress */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="useraddress-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->dropdownList(
        ArrayHelper::map(Users::find()->all(),'user_id','first_name'
    ),['prompt' => 'Select first name']); ?>

    <?= $form->field($model, 'address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'state')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'zip')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
