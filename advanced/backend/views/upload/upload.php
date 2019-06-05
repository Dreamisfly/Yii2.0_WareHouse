<?php
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

<?= $form->field($model, 'file[]')->fileInput(['multiple'=>true,'accept'=>'image/*']) ?>

    <button>Submit</button>

<?php ActiveForm::end() ?>