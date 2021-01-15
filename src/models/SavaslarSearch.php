<?php

namespace melihyesilyurt\historical\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use melihyesilyurt\historical\models\Savaslar;

/**
 * SavaslarSearch represents the model behind the search form of `melihyesilyurt\historical\models\Savaslar`.
 */
class SavaslarSearch extends Savaslar
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['savas_id', 'olum_sayisi', 'savas_tarihi'], 'integer'],
            [['savas_adi', 'savas_yeri'], 'safe'],
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
        $query = Savaslar::find();

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
            'savas_id' => $this->savas_id,
            'olum_sayisi' => $this->olum_sayisi,
            'savas_tarihi' => $this->savas_tarihi,
        ]);

        $query->andFilterWhere(['like', 'savas_adi', $this->savas_adi])
            ->andFilterWhere(['like', 'savas_yeri', $this->savas_yeri]);

        return $dataProvider;
    }
}
