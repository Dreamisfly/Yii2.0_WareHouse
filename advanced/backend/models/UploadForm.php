<?php
/**
 * Created by PhpStorm.
 * User: mengfei
 * Date: 2019/5/21
 * Time: 11:21
 */

namespace backend\models;

use yii\base\Model;
use yii\web\UploadedFile;

class UploadForm extends Model
{
    public $file;

    public function rules()
    {
        return [
          [['file'],'file','maxFiles'=>4],
        ];
    }
}