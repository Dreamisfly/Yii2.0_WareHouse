<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Notice;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\NoticeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '消息管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="notice-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('创建消息', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'sender',
            'receiver',
            'information',
            [
                'attribute' => 'status',
                'filter' =>Html::activeDropDownList($searchModel, 'status', Notice::$Status, ['class' => 'form-control']),
                'value'=>function ($model){
                    return Notice::$Status[$model->status];
                }
            ],
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
