<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\User */

$this->title = '查看用户:'.$model->username;
$this->params['breadcrumbs'][] = ['label' => '用户管理', 'url' => ['index']];
\yii\web\YiiAsset::register($this);
?>
<div class="user-view">


    <p>
        <?php if($model->status !=1) echo Html::a('修改密码', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?php if($model->status !=1) echo Html::a('停用', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '你确定要删除此用户吗?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'username',
            'auth_key',
            'password_hash',
            'password_reset_token',
            'email:email',
            [
                'attribute' => 'role',
                'value'=>function ($model){
                    return \backend\models\User::$ROLE_ARRAY2[$model->role];
                }
            ],
            [
                'attribute' => 'status',
                'value' => function ($model){
                    return $model->status > 1 ? '<small class="label bg-green">启用</small>' : '<small class="label bg-blue">停用</small>';
                },
                'format' => 'raw'
            ],
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
