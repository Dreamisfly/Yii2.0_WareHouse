<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Goodstype */

$this->title = '创建物品类型';
$this->params['breadcrumbs'][] = ['label' => '物品类型管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="goodstype-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
