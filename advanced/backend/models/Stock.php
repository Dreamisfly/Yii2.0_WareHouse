<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "stock".
 *
 * @property int $Id
 * @property int $wid 仓库id
 * @property int $gid 物品id
 * @property int $num 物品总数
 */
class Stock extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'stock';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['wid', 'gid', 'num'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'wid' => '仓库名称',
            'gid' => '物品名称',
            'num' => '存有数量',
        ];
    }
}
