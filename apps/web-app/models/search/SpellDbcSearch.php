<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SpellDbc;

/**
 * SpellDbcSearch represents the model behind the search form of `app\models\SpellDbc`.
 */
class SpellDbcSearch extends SpellDbc
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID'], 'integer'],
            [['Name_Lang_enUS', 'Category', 'SpellClassSet', 'SpellLevel'], 'safe'],
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
        $query = SpellDbc::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'ID' => $this->ID,
            'SpellClassSet' => $this->SpellClassSet,
            'SpellLevel' => $this->SpellLevel,
        ]);

        $query->andFilterWhere(['like', 'Name_Lang_enUS', $this->Name_Lang_enUS])
            ->andFilterWhere(['like', 'Category', $this->Category]);

        return $dataProvider;
    }
}
