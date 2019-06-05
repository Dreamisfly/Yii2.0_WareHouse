<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Patrol */

$this->title = '修改巡逻单: ' . $model->Id;
$this->params['breadcrumbs'][] = ['label' => 'Patrols', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id, 'url' => ['view', 'id' => $model->Id]];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="patrol-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
