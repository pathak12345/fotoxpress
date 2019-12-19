<?php

namespace common\models;

use Yii;
use common\models\Media;

/**
 * This is the model class for table "product_attribute".
 *
 * @property integer $id
 * @property integer $product_id
 * @property string $attribute_name
 * @property string $attribute_value
 * @property double $purchase_cost
 * @property double $selling_price
 * @property integer $max_height
 * @property integer $max_width
 *
 * @property Product $product
 */
class ProductAttribute extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public $product_image;

    public static function tableName()
    {
        return 'product_attribute';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'max_height', 'max_width', 'stock_quantity'], 'integer'],
            [['purchase_cost', 'selling_price'], 'number'],
            ['stock_quantity', 'default', 'value' => 0],
            [['attribute_name', 'attribute_value'], 'string', 'max' => 255],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['product_id' => 'id']],
            [['media_id'], 'exist', 'skipOnError' => true, 'targetClass' => Media::className(), 'targetAttribute' => ['media_id' => 'id']],
            [['product_image'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $fileName = $this->product_image->baseName . '_' . time() . '.' . $this->product_image->extension;
            $this->product_image->saveAs('uploads/product_images/' . $fileName);
            //echo '<pre>'; print_r($this->product_image); exit;
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

    public function getProductImage()
    {
        return Yii::$app->urlManagerFrontEnd->baseUrl . '/uploads/product_images/' . $this->media->file_name;
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_id' => 'Product ID',
            'attribute_name' => 'Attribute Name',
            'attribute_value' => 'Attribute Value',
            'purchase_cost' => 'Purchase Cost',
            'selling_price' => 'Selling Price',
            'max_height' => 'Max Height(pixels)',
            'max_width' => 'Max Width(pixels)',
            'stock_quantity' => 'Stock Quantity',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }

    public function getMedia()
    {
        return $this->hasOne(Media::className(), ['id' => 'media_id']);
    }
}
