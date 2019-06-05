<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PatrolSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '巡逻管理单';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="patrol-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('创建巡逻管理单', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'label'=>'仓库名称',
                'attribute'=>'wid_name',
                'value' => 'warehouse.warehouse_name'
            ],
            [
                'label'=>'盘点物品',
                'attribute'=>'gid_name',
                'value' => 'goods.goods_name'
            ],
            'patrol_information',
            'hidden_danger',
            //'status',
            //'patrol_user',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
