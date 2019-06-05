<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id 自增ID
 * @property string $username 用户名
 * @property string $auth_key 自动登录key
 * @property string $password_hash 加密密码
 * @property string $password_reset_token 重置密码token
 * @property string $email 邮箱
 * @property int $role 角色等级
 * @property int $status 状态
 * @property int $created_at 创建时间
 * @property int $updated_at 更新时间
 */
class User extends \yii\db\ActiveRecord
{
    public static $ROLE_ARRAY = [
        ['role' =>'超级管理员','role_id' => 10],
        ['role' =>'巡逻管理员','role_id' => 1],
        ['role' =>'仓库管理员','role_id' => 2],
        ['role' =>'盘点管理员','role_id' => 3]
    ];
    const ROLE_CHAOJI = 10;
    const ROLE_XUNLUO = 1;
    const ROLE_GUANLIYUAN = 2;
    const ROLE_PANDIAN = 3;
    const QIYONG = 10;
    const TINGYONG = 1;
    public static $ROLE_ARRAY2 = [
        self::ROLE_CHAOJI => '超级管理员',
        self::ROLE_XUNLUO => '巡逻管理员',
        self::ROLE_GUANLIYUAN => '仓库管理员',
        self::ROLE_PANDIAN => '盘点管理员',
    ];
    public static $STATUS = [
        self::QIYONG => '启用',
        self::TINGYONG => '停用',
    ];
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username',  'password_hash', 'email'], 'required'],
            [['username'],'unique'],
            [['role', 'status'], 'integer'],
            [[ 'created_at', 'updated_at','auth_key','password_reset_token'],'safe'],
            [['username', 'password_hash', 'email'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => '序号',
            'username' => '用户名',
            'auth_key' => 'Auth Key',
            'password_hash' => '密码',
            'password_reset_token' => 'Token',
            'email' => '邮箱',
            'role' => '角色',
            'status' => '状态',
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
