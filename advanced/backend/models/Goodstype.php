<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "goodstype".
 *
 * @property int $Id
 * @property string $goods_type_name
 */
class Goodstype extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'goodstype';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['goods_type_name'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'goods_type_name' => '物品类型名称',
        ];
    }
}
