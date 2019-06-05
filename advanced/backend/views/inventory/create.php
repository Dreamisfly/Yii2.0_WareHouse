<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Inventory */

$this->title = '创建盘点单';
$this->params['breadcrumbs'][] = ['label' => '盘点管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inventory-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
