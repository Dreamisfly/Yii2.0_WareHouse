<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Goods;
use backend\models\Warehouse;

/* @var $this yii\web\View */
/* @var $model backend\models\Stock */

$this->title = $model->Id;
$this->params['breadcrumbs'][] = ['label' => 'Stocks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="stock-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Id], [
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
        ],
    ]) ?>

</div>
