<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\InventorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '盘点管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inventory-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('创建盘点单', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'Id',
            [
                'label'=>'盘点仓库',
                'attribute'=>'wid_name',
                'value' => 'warehouse.warehouse_name'
            ],
            [
                'label'=>'盘点物品',
                'attribute'=>'gid_name',
                'value' => 'goods.goods_name'
            ],
            'inventory_free',
//            'inventory_status',
            'inventory_date',
            //'inventory_user',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
