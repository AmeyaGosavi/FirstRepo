<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Api */

$this->title = 'Update Api: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Apis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'api_id' => $model->api_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="api-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
