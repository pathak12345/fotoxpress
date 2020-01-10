<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Product;

/**
 * ProductSearch represents the model behind the search form about `common\models\Product`.
 */
class ProductSearch extends Product
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'category_id', 'media_id', 'stock_quantity', 'max_height', 'max_width', 'created_by', 'updated_by', 'created_at', 'updated_at'], 'integer'],
            [['name', 'description', 'delivery_information', 'care_instruction'], 'safe'],
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
        $query = Product::find();

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
            'category_id' => $this->category_id,
            'media_id' => $this->media_id,
            'stock_quantity' => $this->stock_quantity,
            'purchase_cost' => $this->purchase_cost,
            'selling_price' => $this->selling_price,
            'max_height' => $this->max_height,
            'max_width' => $this->max_width,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'delivery_information', $this->delivery_information])
            ->andFilterWhere(['like', 'care_instruction', $this->care_instruction]);

        return $dataProvider;
    }
}
