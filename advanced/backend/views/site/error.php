<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */
$this->title = '提示';
?>

<div class="error-page">
    <h2 class="headline text-red"><?= Html::encode($exception->getCode()) ?></h2>
    <div class="error-content">
        <div class="search-form">
            <h1>错误...</h1>
            <!-- /.input-group -->
        </div>
        <h3><i class="fa fa-warning text-red"></i> <?=$exception->getMessage()?></h3>
        <p>
            请联系管理员, 你也可以 <a href="/">返回主页面</a> .
        </p>
    </div>
</div>