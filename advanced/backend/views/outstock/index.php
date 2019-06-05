<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Goods;
use backend\models\Warehouse;
use backend\models\Outstock;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\OutstockSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '出库管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="outstock-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('创建出库单', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'out_order',
            [
                'label'=>'仓库名称',
                'attribute'=>'wid_name',
                'value' => 'warehouse.warehouse_name'
            ],
            [
                'label'=>'物品名称',
                'attribute'=>'gid_name',
                'value' => 'goods.goods_name'
            ],
            [
                'attribute' => 'type',
                'filter' =>Outstock::$OUT_ARRAY2,
                'value'=>function ($model){
                    return Outstock::$OUT_ARRAY[$model->type];
                }
            ],
            'num',
            //'price',
            //'out_warehouse',
            //'create_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
