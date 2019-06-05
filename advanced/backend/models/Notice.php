<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "notice".
 *
 * @property int $id
 * @property string $sender
 * @property string $receiver
 * @property string $information
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 */
class Notice extends \yii\db\ActiveRecord
{
    //未查看
    const STATUS_NOT_VIEW = 0;
    //已查看
    const STATUS_VIEW = 1;
    public static $Status= [
        self::STATUS_NOT_VIEW => '未查看',
        self::STATUS_VIEW => '已查看',
    ];
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'notice';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sender', 'receiver', 'information'], 'required'],
            [['status', 'created_at', 'updated_at'], 'safe'],
            [['sender', 'receiver'], 'string', 'max' => 20],
            [['information'], 'string', 'max' => 40],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sender' => '发送者',
            'receiver' => '接收者',
            'information' => '消息',
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
