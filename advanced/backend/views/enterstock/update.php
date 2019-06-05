<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Enterstock */

$this->title = '修改入库信息: ' . $model->enter_order;
$this->params['breadcrumbs'][] = ['label' => '入库管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->enter_order, 'url' => ['view', 'id' => $model->Id]];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="enterstock-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
<?php
$Type = empty($model->type) ? 1 : $model->type;
echo '<script type="text/javascript">window.onload = function () {let  type = ' . $Type;
echo '
            if (type == 1) {
                $(".field-enterstock-enter_warehouse").css("display", "none");
                $(".field-enterstock-enter_warehouse").val("");
            } else {
                $(".field-merchant-alipay_account").css("display", "block");
            }        
        }    
        </script>';
?>
