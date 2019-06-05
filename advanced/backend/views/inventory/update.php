<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Inventory */

$this->title = '更新盘点单: ' . $model->Id;
$this->params['breadcrumbs'][] = ['label' => '盘点管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id, 'url' => ['view', 'id' => $model->Id]];
$this->params['breadcrumbs'][] = '更新';
?>
<div class="inventory-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
