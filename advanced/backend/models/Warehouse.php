<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "warehouse".
 *
 * @property int $Id 仓库id
 * @property string $warehouse_name 仓库名称
 * @property string $warehouse_user 仓库拥有者
 */
class Warehouse extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'warehouse';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['warehouse_name'], 'string', 'max' => 255],
            [['warehouse_user'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'warehouse_name' => '仓库名称',
            'warehouse_user' => '仓库持有者',
        ];
    }
}
