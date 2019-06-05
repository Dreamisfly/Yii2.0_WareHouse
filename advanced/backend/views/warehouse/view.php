<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Warehouse */

$this->title = $model->warehouse_name;
$this->params['breadcrumbs'][] = ['label' => '持有仓库管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="warehouse-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('更新', ['update', 'id' => $model->Id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->Id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '你确定要删除这个仓库么?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'warehouse_name',
            [
                'attribute' => 'warehouse_user',
                'value' => function($model){
                    return \backend\models\User::find()->select('username')->where(['=','Id',$model->warehouse_user])->scalar();
                }
            ],
        ],
    ]) ?>

</div>
