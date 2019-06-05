<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Outstock */

$this->title = '创建一条出库单';
$this->params['breadcrumbs'][] = ['label' => '出库管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="outstock-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
