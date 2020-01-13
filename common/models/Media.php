<?php

namespace common\models;

use Yii;
use yii\helpers\Url;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "media".
 *
 * @property integer $id
 * @property integer $media_type
 * @property string $alt
 * @property string $file_name
 * @property string $file_type
 * @property integer $file_size
 * @property integer $created_at
 * @property integer $updated_at
 */
class Media extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    const TYPE_PRODUCT_IMAGE = 1;
    const TYPE_TEMP_EDIT = 2;

    public static $media_types = [
        self::TYPE_PRODUCT_IMAGE => 'Product Image',
        self::TYPE_TEMP_EDIT => 'Temporary Editing Image',
    ];

    public static function tableName()
    {
        return 'media';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['media_type', 'file_size', 'created_at', 'updated_at'], 'integer'],
            [['alt', 'file_name'], 'string', 'max' => 255],
            [['file_type'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'media_type' => 'Media Type',
            'alt' => 'Alt',
            'file_name' => 'File Name',
            'file_type' => 'File Type',
            'file_size' => 'File Size',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function beforeDelete()
    {
        if (!parent::beforeDelete()) {
            return false;
        }

        $imgUrl = Url::to('@backend/web/uploads/product_images/' . $this->file_name);
        unlink($imgUrl);
        return true;
    }
}