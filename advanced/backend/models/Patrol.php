<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "patrol".
 *
 * @property int $Id
 * @property int $wid 仓库id
 * @property int $gid 盘点物品id
 * @property string $patrol _information 巡逻详情
 * @property string $hidden_danger 安全隐患
 * @property int $status 状态
 * @property string $patrol_user 巡逻人
 */
class Patrol extends \yii\db\ActiveRecord
{
    const WEICHAYUE = 1;
    const YICHAYUE = 2;
    public static $STATUS= [
        self::WEICHAYUE => '未查阅',
        self::YICHAYUE => '已查阅',
    ];
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'patrol';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['wid', 'gid', 'status'], 'integer'],
            [['patrol_information', 'hidden_danger'], 'string', 'max' => 255],
            [['patrol_user'], 'string', 'max' => 20],
            [['patrol_information', 'hidden_danger','wid', 'gid'],'required']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'wid' => '仓库',
            'gid' => '盘点物品',
            'patrol_information' => '巡逻详情',
            'hidden_danger' => '安全隐患',
            'status' => '状态',
            'patrol_user' => '巡逻人',
        ];
    }

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
