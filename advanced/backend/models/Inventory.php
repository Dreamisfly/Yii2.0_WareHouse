<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "inventory".
 *
 * @property int $Id 盘点信息id
 * @property int $gid 盘点物品id
 * @property int $wid 盘点仓库id
 * @property string $inventory_free 盘点费用
 * @property string $inventory_status 盘点状态
 * @property string $inventory_date 盘点日期
 * @property string $inventory_user 盘点人
 */
class Inventory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inventory';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['gid', 'wid'], 'integer'],
            [['inventory_date'], 'safe'],
            [['inventory_free', 'inventory_status', 'inventory_user'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => '盘点信息id',
            'gid' => '盘点物品id',
            'wid' => '盘点仓库id',
            'inventory_free' => '盘点费用',
            'inventory_status' => '盘点状态',
            'inventory_date' => '盘点日期',
            'inventory_user' => '盘点人',
        ];
    }

    //关联仓库表
    public function getWarehouse()
    {
        return $this->hasOne(Warehouse::className(), ['Id' => 'wid']);
    }
    //关联物品表
    public function getGoods()
    {
        return $this->hasOne(Goods::className(), ['Id' => 'gid']);
    }
}
