<?php
use yii\base\Model;
use yii\web\UploadedFile;

class UploadForm extends Model
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
        if ($this->validate()) {
            $this->imageFile->saveAs('uploads/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            return true;
        } else {
            return false;
        }
    }
    public function uploadUsertAvatar()
    {

        $user = Yii::$app->getUser();
        $t = $user->id + 123;
        $imageName = time()."-".(string)$t;
        if ($this->validate()) {
            $this->imageFile->saveAs('uploads/avatar/' . $imageName . '.' . $this->imageFile->extension);
            return true;
        } else {
            return false;
        }
    }
}