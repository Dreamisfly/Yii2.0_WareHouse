<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\User */

$this->title = '修改密码: ' . $model->username;
$this->params['breadcrumbs'][] = ['label' => '用户管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '修改密码';
?>
<div class="user-update">


    <div class="user-form">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'username')->textInput(['maxlength' => true,'readonly' => 'readonly']) ?>

        <?= $form->field($model, 'password_hash')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'email')->textInput(['maxlength' => true,'readonly' => 'readonly']) ?>

        <?=$form->field($model,'status')->dropDownList(
            \backend\models\User::$STATUS);?>

        <?= $form->field($model,'role')->dropDownList(
            ArrayHelper::map(\backend\models\User::$ROLE_ARRAY,'role_id','role')
        );?>

        <div class="form-group">
            <?= Html::submitButton('保存', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>

</div>
