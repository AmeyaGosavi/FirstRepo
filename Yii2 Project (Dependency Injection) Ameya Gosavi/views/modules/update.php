<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Modules */

$this->title = 'Update Modules: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Modules', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'module_id' => $model->module_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="modules-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
