<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\ProductAttribute;

/**
 * ProductAttributeSearch represents the model behind the search form about `common\models\ProductAttribute`.
 */
class ProductAttributeSearch extends ProductAttribute
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'product_id', 'max_height', 'max_width'], 'integer'],
            [['attribute_name', 'attribute_value'], 'safe'],
            [['purchase_cost', 'selling_price'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = ProductAttribute::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'product_id' => $this->product_id,
            'purchase_cost' => $this->purchase_cost,
            'selling_price' => $this->selling_price,
            'max_height' => $this->max_height,
            'max_width' => $this->max_width,
        ]);

        $query->andFilterWhere(['like', 'attribute_name', $this->attribute_name])
            ->andFilterWhere(['like', 'attribute_value', $this->attribute_value]);

        return $dataProvider;
    }

    public function searchSingle($params, $product_id)
    {
        $query = ProductAttribute::find()->where(['product_id' => $product_id]);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'product_id' => $this->product_id,
            'purchase_cost' => $this->purchase_cost,
            'selling_price' => $this->selling_price,
            'max_height' => $this->max_height,
            'max_width' => $this->max_width,
        ]);

        $query->andFilterWhere(['like', 'attribute_name', $this->attribute_name])
            ->andFilterWhere(['like', 'attribute_value', $this->attribute_value]);

        return $dataProvider;
    }
}
