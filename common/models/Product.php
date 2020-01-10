<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;

/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property integer $category_id
 * @property integer $media_id
 * @property string $name
 * @property string $description
 * @property integer $stock_quantity
 * @property double $purchase_cost
 * @property double $selling_price
 * @property integer $max_height
 * @property integer $max_width
 * @property string $delivery_information
 * @property string $care_instruction
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Category $category
 * @property Media $media
 */
class Product extends \yii\db\ActiveRecord
{
    public $product_image;

    public static function tableName()
    {
        return 'product';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
            BlameableBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'media_id', 'stock_quantity', 'max_height', 'max_width', 'created_by', 'updated_by', 'created_at', 'updated_at'], 'integer'],
            [['name'], 'required'],
            [['description', 'delivery_information', 'care_instruction'], 'string'],
            [['purchase_cost', 'selling_price'], 'number'],
            [['name'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
            [['media_id'], 'exist', 'skipOnError' => true, 'targetClass' => Media::className(), 'targetAttribute' => ['media_id' => 'id']],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['created_by' => 'id']],
            [['updated_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['updated_by' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'media_id' => 'Media ID',
            'name' => 'Name',
            'description' => 'Description',
            'stock_quantity' => 'Stock Quantity',
            'purchase_cost' => 'Purchase Cost',
            'selling_price' => 'Selling Price',
            'max_height' => 'Max Height(pixels)',
            'max_width' => 'Max Width(pixels)',
            'delivery_information' => 'Delivery Information',
            'care_instruction' => 'Care Instruction',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMedia()
    {
        return $this->hasOne(Media::className(), ['id' => 'media_id']);
    }

    public function getCreatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */

    public function getUpdatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'updated_by']);
    }

    public function upload()
    {
        if ($this->validate()) {
            $fileName = $this->product_image->baseName . '_' . time() . '.' . $this->product_image->extension;
            $this->product_image->saveAs('uploads/product_images/' . $fileName);
            $media = new Media();
            $media->media_type = Media::TYPE_PRODUCT_IMAGE;
            $media->alt = $this->product_image->baseName;
            $media->file_name = $fileName;
            $media->file_type = $this->product_image->type;
            $media->file_size = $this->product_image->size;
            $media->save();
            $this->media_id = $media->id;

            return true;
        } else {
            return false;
        }
    }
}
