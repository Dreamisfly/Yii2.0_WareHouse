<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Goods;
use backend\models\Warehouse;

/* @var $this yii\web\View */
/* @var $model backend\models\Enterstock */

$this->title = '单号'.$model->enter_order;
$this->params['breadcrumbs'][] = ['label' => '入库管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="enterstock-view">


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Id',
            'enter_order',
            [
                'attribute'=>'wid',
                'value' => function($model){
                    return Warehouse::find()->select('warehouse_name')->where(['=','id',$model->wid])->scalar();
                }
            ],
            [
                'attribute'=>'gid',
                'value' => function($model){
                    return Goods::find()->select('goods_name')->where(['=','id',$model->gid])->scalar();
                }
            ],
            'num',
            [
                'attribute' => 'type',
                'value'=>function ($model){
                    return \backend\models\Enterstock::$ENTRY_ARRAY[$model->type];
                }
            ],
            'price',
            [
                'attribute'=>'enter_warehouse',
                'value' => function($model){
                    return Warehouse::find()->select('warehouse_name')->where(['=','id',$model->enter_warehouse])->scalar();
                }
            ],
            [
                'attribute' => 'create_at',
                'value'=>function ($model){
                    return date('Y-m-d H:i:s',$model->create_at);
                }
            ],
        ],
    ]) ?>

</div>
