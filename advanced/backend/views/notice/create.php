<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Notice */

$this->title = '创建消息';
$this->params['breadcrumbs'][] = ['label' => '消息管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="notice-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
