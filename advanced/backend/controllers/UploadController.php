<?php
/**
 * Created by PhpStorm.
 * User: mengfei
 * Date: 2019/5/21
 * Time: 11:23
 */

namespace backend\controllers;


use backend\models\UploadForm;
use yii\web\UploadedFile;
use yii\base\Controller;
use Yii;

class UploadController extends Controller
{
    public function actionUpload()
    {
        $model = new UploadForm();

        if(Yii::$app->request->isPost){
            $model->file = UploadedFile::getInstances($model,'file');
            $filename = $model->file->name;
            $model->file->name = iconv('utf-8', 'gb2312', $filename);//这里是处理中文的问题，非中文不需要
            if($model->file && $model->validate()){
                $model->file->saveAs(__DIR__.'/../uploads/' . $model->file->baseName . '.' . $model->file->extension);
            }
        }

        return $this->render('upload', ['model' => $model]);
    }
}