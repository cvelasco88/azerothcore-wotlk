<?php

namespace app\models\search;

use app\helpers\DbcActiveDataProvider;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PlayerCreateInfoSkill;

/**
 * PlayerCreateInfoSkillSearch represents the model behind the search form of `app\models\PlayerCreateInfoSkill`.
 */
class PlayerCreateInfoSkillSearch extends PlayerCreateInfoSkill
{
            
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['raceMask', 'classMask', 'skill'], 'integer'],
            [['rank', 'comment'], 'safe'],
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
        $query = PlayerCreateInfoSkill::find();

        $dataProvider = new DbcActiveDataProvider([
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
            'raceMask' => $this->raceMask,
            'classMask' => $this->classMask,
            'skill' => $this->skill,
        ]);

        $query->andFilterWhere(['like', 'skill', $this->skill])
            ->andFilterWhere(['like', 'SpellrankClassSet', $this->rank])
            ->andFilterWhere(['like', 'comment', $this->comment]);

        return $dataProvider;
    }
}
