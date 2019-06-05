<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Warehouse;
use backend\models\Goods;

/* @var $this yii\web\View */
/* @var $model backend\models\Outstock */

$this->title = '单号:'.$model->out_order;
$this->params['breadcrumbs'][] = ['label' => '出库管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="outstock-view">

    <p>
        <?= Html::a('更新', ['update', 'id' => $model->Id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->Id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'out_order',
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
            [
                'attribute' => 'type',
                'value'=>function ($model){
                    return \backend\models\Outstock::$OUT_ARRAY[$model->type];
                }
            ],
            'num',
            'price',
            [
                'attribute'=>'out_warehouse',
                'value' => function($model){
                    return Warehouse::find()->select('warehouse_name')->where(['=','id',$model->out_warehouse])->scalar();
                }
            ],
            'create_at',
        ],
    ]) ?>

</div>
