<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Warehouse;
use backend\models\Goods;
use backend\models\Outstock;


?>

<div class="outstock-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'out_order')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wid')->dropDownList(ArrayHelper::map(Warehouse::find()->select('Id,warehouse_name')->where(['>','Id',0])->asArray()->all(),'Id','warehouse_name')) ?>

    <?= $form->field($model, 'gid')->dropDownList(ArrayHelper::map(Goods::find()->select('Id,goods_name')->where(['>','Id',0])->asArray()->all(),'Id','goods_name')) ?>

    <?= $form->field($model, 'type')->dropDownList(Outstock::$OUT_ARRAY,['onChange' => '
        if ($(this).val() == 1) {
            $(".field-outstock-out_warehouse").css("display", "none");
            $(".field-outstock-out_warehouse").val("");
        } else {
            $(".field-outstock-out_warehouse").css("display", "block");
        }
    ']) ?>

    <?= $form->field($model, 'num')->textInput() ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'out_warehouse')->dropDownList(ArrayHelper::map(Warehouse::find()->select('Id,warehouse_name')->where(['>','Id',0])->asArray()->all(),'Id','warehouse_name')) ?>

    <div class="form-group">
        <?= Html::submitButton('保存', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
