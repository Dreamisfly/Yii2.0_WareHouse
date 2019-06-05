<?php
    use yii\bootstrap\Nav;
    use mdm\admin\components\MenuHelper;
?>
<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?=Yii::$app->user->identity->username ?></p>
                <div>
                    <div id="div1" class = "style1" ><i class="fa fa-circle text-success"></i> <button id ="button11">Online</button></div>
                    <div id="div2" class = "style2" style="display: none;"><i class="fa fa-circle text-error"></i> <button id ="button12">Offline</button></div>
                </div>
<?php
$js = <<< JS
$("#button11").click(function(){
$("#div1").hide();
$("#div2").show();
});
$("#button12").click(function(){
$("#div2").hide();
$("#div1").show();
});
JS;
 $this->registerJs($js);
?>
            </div>
        </div>

        <!-- search form -->
<!--        <form action="#" method="get" class="sidebar-form">-->
<!--            <div class="input-group">-->
<!--                <input type="text" name="q" class="form-control" placeholder="Search..."/>-->
<!--              <span class="input-group-btn">-->
<!--                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>-->
<!--                </button>-->
<!--              </span>-->
<!--            </div>-->
<!--        </form>-->
        <!-- /.search form -->
        <?php
        $identity = Yii::$app->user->identity->role;
        if($identity == 10)
        {
            echo \dmstr\widgets\Menu::widget(
                [
                    "encodeLabels" => false,
                    "options" => ["class" => "sidebar-menu tree","data-widget" => "tree"],
                    "items" => MenuHelper::getAssignedMenu(Yii::$app->user->id),
                ]
            );
            echo "<ul class=\"sidebar-menu tree\" data-widget=\"tree\">
            <li class=\"treeview\">
                <a href=\"#\">
                    <i class=\"fa fa-gears\"></i> <span>权限控制</span>
                    <i class=\"fa fa-angle-left pull-right\"></i>
                </a>
                <ul class=\"treeview-menu\">
                    <li class=\"treeview\">
                        <a href=\"/admin\">管理员</a>
                        <ul class=\"treeview-menu\">
                            <li class=\"treeview\">
                                <a href=\"/admin/role\">
                                    <i class=\"fa fa-circle-o\"></i> 权限 <i class=\"fa fa-angle-left pull-right\"></i>
                                </a>
                                <ul class=\"treeview-menu\">
                                    <li><a href=\"/admin/route\"><i class=\"fa fa-circle-o\"></i> 路由</a></li>
                                    <li><a href=\"/admin/permission\"><i class=\"fa fa-circle-o\"></i> 权限</a></li>
                                    <li><a href=\"/admin/role\"><i class=\"fa fa-circle-o\"></i> 角色</a></li>
                                    <li><a href=\"/admin/assignment\"><i class=\"fa fa-circle-o\"></i> 分配</a></li>
                                    <li><a href=\"/admin/menu\"><i class=\"fa fa-circle-o\"></i> 菜单</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>";
        }else{
            echo \dmstr\widgets\Menu::widget(
                [
                    "encodeLabels" => false,
                    "options" => ["class" => "sidebar-menu tree","data-widget" => "tree"],
                    "items" => MenuHelper::getAssignedMenu(Yii::$app->user->id),
                ]
            );
        }
        ?>

    </section>

</aside>
