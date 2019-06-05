<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Notice */

$this->title = '查看第'.$model->id.'条消息';
$this->params['breadcrumbs'][] = ['label' => '消息管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="notice-view">


    <p>
        <?= Html::a('修改', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '你确定要删除这个信息么?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'sender',
            'receiver',
            'information',
            [
                'attribute' => 'status',
                'value'=>function ($model){
                    return \backend\models\Notice::$Status[$model->status];
                }
            ],
            [
                'attribute' => 'created_at',
                'value'=>function ($model){
                    return date('Y-m-d H:i:s',$model->created_at);
                }
            ],
            [
                'attribute' => 'updated_at',
                'value'=>function ($model){
                    return date('Y-m-d H:i:s',$model->updated_at);
                }
            ],
        ],
    ]) ?>

</div>
