<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\OutstockSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="outstock-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id') ?>

    <?= $form->field($model, 'out_order') ?>

    <?= $form->field($model, 'wid') ?>

    <?= $form->field($model, 'gid') ?>

    <?= $form->field($model, 'type') ?>

    <?php // echo $form->field($model, 'num') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'out_warehouse') ?>

    <?php // echo $form->field($model, 'create_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
