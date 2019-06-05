<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "goods".
 *
 * @property int $Id
 * @property string $goods_name 物品名称
 * @property int $gid 物品类型id
 * @property string $material_quality 材质
 * @property string $commodity_code 商品编码
 * @property string $manufacturer 制造商
 * @property string $batches 商品批次
 * @property string $quality_guarantee_period 保质期
 */
class Goods extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'goods';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['gid'], 'integer'],
            [['goods_name'], 'string', 'max' => 10],
            [['material_quality', 'commodity_code', 'batches'], 'string', 'max' => 20],
            [['manufacturer', 'quality_guarantee_period'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'goods_name' => '物品名称',
            'gid' => '物品类型',
            'material_quality' => '材质',
            'commodity_code' => '商品编码',
            'manufacturer' => '制造商',
            'batches' => '商品批次',
            'quality_guarantee_period' => '保质期',
        ];
    }
}
