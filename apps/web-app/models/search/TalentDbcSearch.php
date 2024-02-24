<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TalentDbc;

/**
 * TalentDbcSearch represents the model behind the search form of `app\models\TalentDbc`.
 */
class TalentDbcSearch extends TalentDbc
{

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'TabID', 'TierID', 'ColumnIndex'], 'integer'],
            [['SpellRank_1', 'SpellRank_2', 'SpellRank_3', 'SpellRank_4', 'SpellRank_5', 'SpellRank_6', 'SpellRank_7', 'SpellRank_8', 'SpellRank_9', 'PrereqTalent_1', 'PrereqTalent_2', 'PrereqTalent_3', 'PrereqRank_1', 'PrereqRank_2', 'PrereqRank_3', 'Flags', 'RequiredSpellID', 'CategoryMask_1', 'CategoryMask_2', 'rank', 'comment'], 'safe'],
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
        $query = TalentDbc::find();

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
            'TabID' => $this->TabID,
            'TierID' => $this->TierID,
            'ColumnIndex' => $this->ColumnIndex,
        ]);

        $query->andFilterWhere(['like', 'SpellRank_1', $this->SpellRank_1])
            ->andFilterWhere(['like', 'SpellRank_2', $this->SpellRank_2])
            ->andFilterWhere(['like', 'SpellRank_3', $this->SpellRank_3])
            ->andFilterWhere(['like', 'SpellRank_4', $this->SpellRank_4])
            ->andFilterWhere(['like', 'SpellRank_5', $this->SpellRank_5])
            ->andFilterWhere(['like', 'SpellRank_6', $this->SpellRank_6])
            ->andFilterWhere(['like', 'SpellRank_7', $this->SpellRank_7])
            ->andFilterWhere(['like', 'SpellRank_8', $this->SpellRank_8])
            ->andFilterWhere(['like', 'SpellRank_9', $this->SpellRank_9])
            ->andFilterWhere(['like', 'PrereqTalent_1', $this->PrereqTalent_1])
            ->andFilterWhere(['like', 'PrereqTalent_2', $this->PrereqTalent_2])
            ->andFilterWhere(['like', 'PrereqTalent_3', $this->PrereqTalent_3])
            ->andFilterWhere(['like', 'PrereqRank_1', $this->PrereqRank_1])
            ->andFilterWhere(['like', 'PrereqRank_2', $this->PrereqRank_2])
            ->andFilterWhere(['like', 'PrereqRank_3', $this->PrereqRank_3])
            ->andFilterWhere(['like', 'Flags', $this->Flags])
            ->andFilterWhere(['like', 'RequiredSpellID', $this->RequiredSpellID])
            ->andFilterWhere(['like', 'CategoryMask_1', $this->CategoryMask_1])
            ->andFilterWhere(['like', 'CategoryMask_2', $this->CategoryMask_2]);

        return $dataProvider;
    }
}
