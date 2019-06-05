<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Warehouse;
use backend\models\Goods;

/* @var $this yii\web\View */
/* @var $model backend\models\Patrol */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="patrol-form">
    <?php
    $route = Yii::$app->controller->getRoute();
    $route = substr($route,7,1);
    $user = Yii::$app->user->identity->username;
    ?>
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'wid')->dropDownList(ArrayHelper::map(Warehouse::find()->select('Id,warehouse_name')->where(['>','Id',0])->asArray()->all(),'Id','warehouse_name')) ?>

    <?= $form->field($model, 'gid')->dropDownList(ArrayHelper::map(Goods::find()->select('Id,goods_name')->where(['>','Id',0])->asArray()->all(),'Id','goods_name')) ?>

    <?= $form->field($model, 'patrol_information')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hidden_danger')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList(\backend\models\Patrol::$STATUS) ?>

    <?php
        if($route === 'c') {
            echo $form->field($model, 'patrol_user')->textInput(['maxlength' => true, 'value' => $user, 'readonly' => 'readonly']);
        }else{
            echo $form->field($model, 'patrol_user')->textInput(['maxlength' => true,'readonly' => 'readonly']);
        }
    ?>

    <div class="form-group">
        <?= Html::submitButton('保存', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
