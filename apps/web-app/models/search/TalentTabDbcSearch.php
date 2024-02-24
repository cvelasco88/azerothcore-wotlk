<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TalentTabDbc;

/**
 * TalentTabDbcSearch represents the model behind the search form of `app\models\TalentTabDbc`.
 */
class TalentTabDbcSearch extends TalentTabDbc
{
    
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'Name_Lang_Mask', 'SpellIconID', 'RaceMask', 'ClassMask', 'PetTalentMask', 'OrderIndex'], 'integer'],
            [['Name_Lang_enUS', 'Name_Lang_enGB', 'Name_Lang_koKR', 'Name_Lang_frFR', 'Name_Lang_deDE', 'Name_Lang_enCN', 'Name_Lang_zhCN', 'Name_Lang_enTW', 'Name_Lang_zhTW', 'Name_Lang_esES', 'Name_Lang_esMX', 'Name_Lang_ruRU', 'Name_Lang_ptPT', 'Name_Lang_ptBR', 'Name_Lang_itIT', 'Name_Lang_Unk', 'BackgroundFile'], 'safe'],
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
        $query = TalentTabDbc::find();

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
            'Name_Lang_Unk' => $this->Name_Lang_Unk,
            'Name_Lang_Mask' => $this->Name_Lang_Mask,
            'SpellIconID' => $this->SpellIconID,
            'RaceMask' => $this->RaceMask,
            'ClassMask' => $this->ClassMask,
            'PetTalentMask' => $this->PetTalentMask,
            'OrderIndex' => $this->OrderIndex,
            'BackgroundFile' => $this->BackgroundFile,
        ]);

        $query->andFilterWhere(['like', 'Name_Lang_enUS', $this->Name_Lang_enUS])
            ->andFilterWhere(['like', 'Name_Lang_enGB', $this->Name_Lang_enGB])
            ->andFilterWhere(['like', 'Name_Lang_koKR', $this->Name_Lang_koKR])
            ->andFilterWhere(['like', 'Name_Lang_frFR', $this->Name_Lang_frFR])
            ->andFilterWhere(['like', 'Name_Lang_deDE', $this->Name_Lang_deDE])
            ->andFilterWhere(['like', 'Name_Lang_enCN', $this->Name_Lang_enCN])
            ->andFilterWhere(['like', 'Name_Lang_zhCN', $this->Name_Lang_zhCN])
            ->andFilterWhere(['like', 'Name_Lang_enTW', $this->Name_Lang_enTW])
            ->andFilterWhere(['like', 'Name_Lang_zhTW', $this->Name_Lang_zhTW])
            ->andFilterWhere(['like', 'Name_Lang_esES', $this->Name_Lang_esES])
            ->andFilterWhere(['like', 'Name_Lang_esMX', $this->Name_Lang_esMX])
            ->andFilterWhere(['like', 'Name_Lang_ruRU', $this->Name_Lang_ruRU])
            ->andFilterWhere(['like', 'Name_Lang_ptPT', $this->Name_Lang_ptPT])
            ->andFilterWhere(['like', 'Name_Lang_ptBR', $this->Name_Lang_ptBR])
            ->andFilterWhere(['like', 'Name_Lang_itIT', $this->Name_Lang_itIT])
        ;

        return $dataProvider;
    }
}
