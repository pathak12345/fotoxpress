<?php
namespace common\models;

use yii\base\Model;
use common\models\Media;
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
            $tempImageName = $this->imageFile->baseName . '_' . time() . '.' . $this->imageFile->extension;
            $this->imageFile->saveAs('uploads/temp/' . $tempImageName);
            
            $media = new Media();
            $media->media_type = Media::TYPE_TEMP_EDIT;
            $media->alt = $this->imageFile->baseName;
            $media->file_name = $tempImageName;
            $media->file_type = $this->imageFile->type;
            $media->file_size = $this->imageFile->size;
            $media->save();

            return $media->id;
        } else {
            return false;
        }
    }
}

?>