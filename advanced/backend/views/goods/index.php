<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\GoodsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '物品管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="goods-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('添加一个物品', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],


            'goods_name',
            [
                'attribute'=>'gid',
                'filter' =>Html::activeDropDownList($searchModel, 'gid', \yii\helpers\ArrayHelper::map(\backend\models\Goodstype::find()->select('Id,goods_type_name')->where(['>','Id',0])->asArray()->all(),'Id','goods_type_name'), ['prompt'=>'','class' => 'form-control']),
                'value'=>function($model){
                    return \backend\models\Goodstype::find()->select('goods_type_name')->where(['=','Id',$model->gid])->scalar();
            }],
            'material_quality',
            'commodity_code',
            //'manufacturer',
            //'batches',
            //'quality_guarantee_period',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
