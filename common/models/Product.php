<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property integer $category_id
 * @property string $name
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Category $category
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public $product_image;
    
    public static function tableName()
    {
        return 'product';
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
            [['category_id', 'created_at', 'updated_at'], 'integer'],
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category',
            'name' => 'Name',
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

    public function getProductSizesText()
    {
        $productSizes = ProductSize::find()->where(['product_id' => $this->id])->all();
        $proSizeText = "";
        $total = count($productSizes);
        foreach ($productSizes as $key => $productSize) {
            if(($key + 1) == $total){
                $proSizeText = $proSizeText . "($productSize->size)";
            }else{
                $proSizeText = $proSizeText . "($productSize->size), ";
            }
            
        }
        return $proSizeText;
    }
}
