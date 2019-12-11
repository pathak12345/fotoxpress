<?php

namespace common\models;

use Yii;

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
            [['product_id', 'max_height', 'max_width'], 'integer'],
            [['purchase_cost', 'selling_price'], 'number'],
            [['attribute_name', 'attribute_value'], 'string', 'max' => 255],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['product_id' => 'id']],
        ];
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }
}
