<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Goods */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="goods-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'goods_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gid')->dropDownList(\yii\helpers\ArrayHelper::map(\backend\models\Goodstype::find()->select('Id,goods_type_name')->where(['>','Id',0])->asArray()->all(),'Id','goods_type_name')) ?>

    <?= $form->field($model, 'material_quality')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'commodity_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'manufacturer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'batches')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'quality_guarantee_period')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
