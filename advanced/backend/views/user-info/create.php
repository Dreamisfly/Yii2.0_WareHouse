<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\UserInfo */

$this->title = '创建用户信息';
$this->params['breadcrumbs'][] = ['label' => '用户信息管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
