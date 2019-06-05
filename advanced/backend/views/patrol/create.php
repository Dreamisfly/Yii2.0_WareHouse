<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Patrol */

$this->title = '创建巡逻管理单';
$this->params['breadcrumbs'][] = ['label' => 'Patrols', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="patrol-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
