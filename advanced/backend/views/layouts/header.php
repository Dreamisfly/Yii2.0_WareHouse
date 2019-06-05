<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">

    <?= Html::a('<span class="logo-mini">APP</span><span class="logo-lg">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">

                <!-- Messages: style can be found in dropdown.less-->
                <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="label label-success"><?php
                            $username = Yii::$app->user->identity->username;
                            $role = \backend\models\User::find()->select('role')->where(['username'=>$username]);
                            if($role == '10'){
                                $count =\backend\models\Notice::find()->count();
                            }else{
                                $count =\backend\models\Notice::find()->where(['status' => 0,'receiver' =>[Yii::$app->user->identity->username,'all']])->count();
                            }
                            echo $count;
                            ?>
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">你有
                            <?php
                            $username = Yii::$app->user->identity->username;
                            $role = \backend\models\User::find()->select('role')->where(['username'=>$username]);
                            if($role == '10'){
                                $count =\backend\models\Notice::find()->count();
                            }else{
                                $count =\backend\models\Notice::find()->where(['status' => 0,'receiver' =>[Yii::$app->user->identity->username,'all']])->count();
                            }
                            echo $count;
                            ?>
                            条消息</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                <?php
                                $notice_data = \backend\models\Notice::find()->where(['status' => 0,'receiver' =>[Yii::$app->user->identity->username,'all']])->orderBy('updated_at desc')->all();
                                foreach ($notice_data as $k =>$v) {
                                    $id = $notice_data[$k]->id;
                                    $sender = $notice_data[$k]->sender;
                                    $updated_at = date("Y-m-d",$notice_data[$k]->updated_at);
                                    $information = $notice_data[$k]->information;
                                    echo <<< STR
                                        <li><!-- start message -->
                                            <a href="/notice/view/$id">
                                                <div class="pull-left">
                                                    <img src="$directoryAsset/img/user2-160x160.jpg" class="img-circle"
                                                         alt="User Image"/>
                                                </div>
                                                <h4>
                                                    $sender
                                                    <small><i class="fa fa-clock-o"></i>$updated_at</small>
                                                </h4>
                                                <p style="margin-top: 5px">$information</p>
                                            </a>
                                        </li>
STR;
                                }
                                ?>
                            </ul>
                        </li>
                        <li class="footer"><a href="#">查看所有消息</a></li>
                    </ul>
                </li>


                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="user-image" alt="User Image"/>
                        <span class="hidden-xs"><?=Yii::$app->user->identity->username ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle"
                                 alt="User Image"/>

                            <p>
                            <p><?=Yii::$app->user->identity->username ?> <?php echo \backend\models\User::$ROLE_ARRAY2[Yii::$app->user->identity->role]?>
                                <small><?= date('Y-m-d H:i:s',time())?></small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">
                            <div class="col-xs-12 text-center">
                                <a href="#">标签</a>
                            </div>
                        </li>
                        <li class="user-body">
                            <div class="col-xs-4 text-center">
                                <a href="#">活泼</a>
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="#">热情</a>
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="#">友善</a>
                            </div>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <?php
                           $username = Yii::$app->user->identity->username;
                           $uid = \backend\models\User::find()->select('id')->where(['=','username',$username])->scalar();
                           $id = \backend\models\UserInfo::find()->select('id')->where(['=','uid',$uid])->scalar();
                            echo <<< PULLLEFT
                                <div class="pull-left">
                                    <a href="/user-info/view?id=$id" class="btn btn-default btn-flat">查看信息</a>
                                </div>
PULLLEFT;

                            ?>

                            <div class="pull-right">
                                <?= Html::a(
                                    '退出账号',
                                    ['/site/logout'],
                                    ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
                                ) ?>
                            </div>
                        </li>
                    </ul>
                </li>

                <!-- User Account: style can be found in dropdown.less -->

            </ul>
        </div>
    </nav>
</header>
