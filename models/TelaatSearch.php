<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Telaat;

/**
 * TelaatSearch represents the model behind the search form of `app\models\Telaat`.
 */
class TelaatSearch extends Telaat
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['naam', 'klas', 'minuten_te_laat', 'reden_te_laat'], 'safe'],
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
        $query = Telaat::find();

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
        ]);

        $query->andFilterWhere(['like', 'naam', $this->naam])
            ->andFilterWhere(['like', 'klas', $this->klas])
            ->andFilterWhere(['like', 'minuten_te_laat', $this->minuten_te_laat])
            ->andFilterWhere(['like', 'reden_te_laat', $this->reden_te_laat]);

        return $dataProvider;
    }
}
