<?php
namespace tester\models;


use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

class UploadTesterAvatar extends Model
{
    /**
     * @var UploadedFile
     */
    public $imageFile;

    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }
    public function upload()
    {
        $user = Yii::$app->getUser();
        $t = $user->id + rand(1,200);
        $imageName = time()."-".(string)$t;
        $path = "uploads/avatar/" . $imageName . "." . $this->imageFile->extension;
        if ($this->validate()) {
            $this->imageFile->saveAs($path);
            return 'tester/'.$path;
        } else {
            return false;
        }
    }
}