<?php

use yii\helpers\Html;
use yii\widgets\DetailView;


/* @var $this yii\web\View */
/* @var $model backend\models\UserInfo */

$this->title = '完善用户信息';
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="user-info-view">


    <p>
        <?= Html::a('完善信息', ['update', 'id' => $model->Id], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'name',
            [
                'attribute' => 'sex',
                'value'=>function ($model){
                    return \backend\models\UserInfo::$SEX_ARRAY[$model->sex];
                }
            ],
            'phone',
            'birthday',
            'address',
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
