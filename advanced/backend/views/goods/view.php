<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Goods */

$this->title = $model->goods_name;
$this->params['breadcrumbs'][] = ['label' => '物品管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="goods-view">

    <h1><?= Html::encode($this->title) ?></h1>

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
            'Id',
            'goods_name',
            [
                'attribute'=>'gid',
                'value'=>function($model){
                    return \backend\models\Goodstype::find()->select('goods_type_name')->where(['=','Id',$model->gid])->scalar();
                }],
            'material_quality',
            'commodity_code',
            'manufacturer',
            'batches',
            'quality_guarantee_period',
        ],
    ]) ?>

</div>
