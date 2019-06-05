<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Warehouse */

$this->title = '创建一个仓库';
$this->params['breadcrumbs'][] = ['label' => '持有仓库管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="warehouse-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
