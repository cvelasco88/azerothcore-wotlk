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

    private string $nameLang;

    public function __construct($dbcLanguage){
        $this->nameLang = 'Name_Lang_' . $dbcLanguage;
    }
    
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID'], 'integer'],
            [[$this->nameLang, 'Category', 'SpellClassSet', 'SpellLevel', 'RangeIndex'], 'safe'],
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
            'RangeIndex' => $this->RangeIndex,
        ]);

        $query->andFilterWhere(['like', $this->nameLang, $this->{$this->nameLang}])
            ->andFilterWhere(['like', 'Category', $this->Category]);

        return $dataProvider;
    }
}
