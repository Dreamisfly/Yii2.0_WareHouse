<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Enterstock */

$this->title = '添加一条入库信息';
$this->params['breadcrumbs'][] = ['label' => '入库管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="enterstock-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
