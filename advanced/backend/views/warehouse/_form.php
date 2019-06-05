<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model backend\models\Warehouse */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="warehouse-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'warehouse_name')->textInput(['maxlength' => true]) ?>
    <?php
    $user = \backend\models\User::find()->select('id Id,username username')->where(['=','role',10])->asArray()->all();
    ?>
    <?= $form->field($model, 'warehouse_user')->dropDownList(ArrayHelper::map($user,'Id','username'),['style'=>'border:1px solid blue;width:150px;']) ?>

    <div class="form-group">
        <?= Html::submitButton('保存', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
