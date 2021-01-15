<?php

namespace melihyesilyurt\historical\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use melihyesilyurt\historical\models\Ulkeler;

/**
 * UlkelerSearch represents the model behind the search form of `melihyesilyurt\historical\models\Ulkeler`.
 */
class UlkelerSearch extends Ulkeler
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ulke_id', 'savaslar_savas_id', 'kurulus_yili', 'yikilis_yili'], 'integer'],
            [['ulke_adi'], 'safe'],
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
        $query = Ulkeler::find();

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
            'ulke_id' => $this->ulke_id,
            'savaslar_savas_id' => $this->savaslar_savas_id,
            'kurulus_yili' => $this->kurulus_yili,
            'yikilis_yili' => $this->yikilis_yili,
        ]);

        $query->andFilterWhere(['like', 'ulke_adi', $this->ulke_adi]);

        return $dataProvider;
    }
}
