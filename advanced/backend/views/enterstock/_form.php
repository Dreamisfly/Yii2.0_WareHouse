<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Warehouse;
use backend\models\Goods;
use backend\models\Enterstock;
/* @var $this yii\web\View */
/* @var $model backend\models\Enterstock */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="enterstock-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'enter_order')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wid')->dropDownList(ArrayHelper::map(Warehouse::find()->select('Id,warehouse_name')->where(['>','Id',0])->asArray()->all(),'Id','warehouse_name')) ?>

    <?= $form->field($model, 'gid')->dropDownList(ArrayHelper::map(Goods::find()->select('Id,goods_name')->where(['>','Id',0])->asArray()->all(),'Id','goods_name')) ?>

    <?= $form->field($model, 'num')->textInput() ?>

    <?= $form->field($model, 'type')->dropDownList(Enterstock::$ENTRY_ARRAY,['onChange' => '
        if ($(this).val() == 1) {
            $(".field-enterstock-enter_warehouse").css("display", "none");
            $(".field-enterstock-enter_warehouse").val("");
        } else {
            $(".field-enterstock-enter_warehouse").css("display", "block");
        }
    ']) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'enter_warehouse')->dropDownList(ArrayHelper::map(Warehouse::find()->select('Id,warehouse_name')->where(['>','Id',0])->asArray()->all(),'Id','warehouse_name')) ?>

    <div class="form-group">
        <?= Html::submitButton('保存', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>