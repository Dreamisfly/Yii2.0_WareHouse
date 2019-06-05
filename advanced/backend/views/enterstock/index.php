<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Goods;
use backend\models\Warehouse;
use backend\models\Enterstock;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\EnterstockSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '入库管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="enterstock-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('添加一条入库信息', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'enter_order',
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
            'num',
            [
                'attribute' => 'type',
                'filter' =>Enterstock::$ENTRY_ARRAY2,
                'value'=>function ($model){
                    return Enterstock::$ENTRY_ARRAY[$model->type];
                }
            ],
            'price',
//            'enter_warehouse',
//            'create_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
