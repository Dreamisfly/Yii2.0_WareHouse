<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Goodstype */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="goodstype-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'goods_type_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('保存', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
