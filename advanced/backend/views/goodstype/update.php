<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Goodstype */

$this->title = '更新物品类型: ' . $model->Id;
$this->params['breadcrumbs'][] = ['label' => '物品类型管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id, 'url' => ['view', 'id' => $model->Id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="goodstype-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
