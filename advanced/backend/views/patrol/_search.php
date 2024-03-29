<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PatrolSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="patrol-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id') ?>

    <?= $form->field($model, 'wid') ?>

    <?= $form->field($model, 'gid') ?>

    <?= $form->field($model, 'patrol_information') ?>

    <?= $form->field($model, 'hidden_danger') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'patrol_user') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
