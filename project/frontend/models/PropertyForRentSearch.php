<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PropertyForRent;

/**
 * PropertyForRentSearch represents the model behind the search form of `frontend\models\PropertyForRent`.
 */
class PropertyForRentSearch extends PropertyForRent
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'rent', 'owner_id', 'staff_id', 'branch_id'], 'integer'],
            [['street', 'city', 'province', 'postcode', 'type', 'rooms'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = PropertyForRent::find();

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
            'rent' => $this->rent,
            'owner_id' => $this->owner_id,
            'staff_id' => $this->staff_id,
            'branch_id' => $this->branch_id,
        ]);

        $query->andFilterWhere(['like', 'street', $this->street])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'province', $this->province])
            ->andFilterWhere(['like', 'postcode', $this->postcode])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'rooms', $this->rooms]);

        return $dataProvider;
    }
}
