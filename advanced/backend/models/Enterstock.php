<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "enterstock".
 *
 * @property int $Id
 * @property string $enter_order 移入单号
 * @property int $wid 仓库id
 * @property int $gid 物品id
 * @property int $num 入库数量
 * @property int $type 入库类型
 * @property int $price 买入价格
 * @property int $enter_warehouse 移入仓库
 * @property string $create_at 创建时间
 */
class Enterstock extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'enterstock';
    }
    /**
     *
     */
    const TISHI = 0;
    const ENTER_BUY = 1;
    const ENTER_MOVE = 2;
    public static $ENTRY_ARRAY= [
        self::TISHI => '请选择',
        self::ENTER_BUY => '买进',
        self::ENTER_MOVE => '移入',
    ];
    public static $ENTRY_ARRAY2= [
        self::ENTER_BUY => '买进',
        self::ENTER_MOVE => '移入',
    ];
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['wid', 'gid', 'num', 'type', 'price', 'enter_warehouse'], 'integer'],
            [['create_at'], 'safe'],
            [['enter_order'], 'string', 'max' => 30],
            [['type'], 'in', 'range' => [1,2]],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'enter_order' => '移入单号',
            'wid' => '仓库名称',
            'gid' => '物品名称',
            'num' => '物品数量',
            'type' => '移入方式',
            'price' => '买入（移入）单价',
            'enter_warehouse' => '移入所属仓库',
            'create_at' => '买入（移入）时间',
        ];
    }

    /**
 * @param bool $insert
 * @return bool
 */
    public function beforeSave($insert)
    {
        if(parent::beforeSave($insert)){
            if($insert){
                $this->create_at = time();
            }
            return true;
        } else {
            return false;
        }
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
