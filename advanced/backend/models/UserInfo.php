<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "userinfo".
 *
 * @property int $Id
 * @property int $uid
 * @property string $name 真实姓名
 * @property int $sex 性别
 * @property int $phone 手机号
 * @property string $birthday 生日
 * @property string $address 详细地址
 * @property int $created_at 创建时间
 * @property int $updated_at 更新时间
 */
class UserInfo extends \yii\db\ActiveRecord
{
    //男
    const SEX_WOMAN = 0;
    //女
    const SEX_MAN = 1;
    public static $SEX_ARRAY= [
        self::SEX_WOMAN => '女',
        self::SEX_MAN => '男',
    ];
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'userinfo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sex', 'uid', 'phone'], 'integer'],
            [['created_at', 'updated_at','birthday'], 'safe'],
            [['name'], 'string', 'max' => 10],
            [['address'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => '信息表ID',
            'uid' => '用户id',
            'name' => '真实姓名',
            'sex' => '性别',
            'phone' => '手机号',
            'birthday' => '生日',
            'address' => '详细地址',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }

    public function beforeSave($insert)
    {
        if(parent::beforeSave($insert)){
            if($insert){
                $this->created_at = time();
                $this->updated_at = time();
            } else {
                $this->updated_at = time();
            }
            return true;
        } else {
            return false;
        }
    }
}
