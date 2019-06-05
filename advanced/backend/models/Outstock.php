<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "outstock".
 *
 * @property int $Id
 * @property string $out_order 移出单号
 * @property int $wid 仓库名称
 * @property int $gid 物品名称
 * @property string $type
 * @property int $num 卖出数量
 * @property int $price 卖出价格
 * @property string $out_warehouse 移出仓库
 * @property string $create_at 创建时间
 */
class Outstock extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'outstock';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['wid', 'gid', 'num', 'price'], 'integer'],
            [['create_at'], 'safe'],
            [['out_order', 'out_warehouse'], 'string', 'max' => 30],
            [['type'], 'string', 'max' => 20],
        ];
    }

    /**
     * 出库类型
     */
    const TISHI = 0;
    const OUT_SALE = 1;
    const OUT_MOVE = 2;
    public static $OUT_ARRAY= [
        self::TISHI => '请选择',
        self::OUT_SALE => '卖出',
        self::OUT_MOVE => '移出',
    ];
    public static $OUT_ARRAY2= [
        self::OUT_SALE => '卖出',
        self::OUT_MOVE => '移出',
    ];
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'out_order' => '移出单号',
            'wid' => '仓库名称',
            'gid' => '物品名称',
            'type' => '移出类型',
            'num' => '数量',
            'price' => '价格',
            'out_warehouse' => '移出所属仓库',
            'create_at' => '移出时间',
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
