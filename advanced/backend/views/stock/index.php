<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Goods;
use backend\models\Warehouse;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\StockSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '库存管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stock-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
