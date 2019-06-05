<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Outstock */

$this->title = '修改出库单: ' . $model->Id;
$this->params['breadcrumbs'][] = ['label' => 'Outstocks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id, 'url' => ['view', 'id' => $model->Id]];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="outstock-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
<?php
$Type = empty($model->type) ? 1 : $model->type;
echo '<script type="text/javascript">window.onload = function () {let  type = ' . $Type;
echo '
            if (type == 1) {
                $(".field-outstock-out_warehouse").css("display", "none");
                $(".field-outstock-out_warehouse").val("");
            } else {
                $(".field-outstock-out_warehouse").css("display", "block");
            }        
        }    
        </script>';
?>
