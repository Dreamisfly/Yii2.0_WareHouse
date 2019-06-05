<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Warehouse;
use backend\models\Goods;

/* @var $this yii\web\View */
/* @var $model backend\models\Patrol */
$this->title = '单号:'.$model->Id;
$this->params['breadcrumbs'][] = ['label' => 'Patrols', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="patrol-view">


    <p>
        <?= Html::a('修改', ['update', 'id' => $model->Id], ['class' => 'btn btn-primary']) ?>
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
            'patrol_information',
            'hidden_danger',
            [
                'attribute' => 'status',
                'value'=>function ($model){
                    return \backend\models\Patrol::$STATUS[$model->status];
                }
            ],
            'patrol_user',
        ],
    ]) ?>

</div>
