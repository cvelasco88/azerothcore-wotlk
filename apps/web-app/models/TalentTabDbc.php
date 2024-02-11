<?php

namespace app\models;

use app\models\base\DbcActiveRecord;
use Yii;

/**
 * This is the model class for table "talenttab_dbc".
 *
 * @property int $ID
 * @property string|null $Name_Lang_enUS
 * @property string|null $Name_Lang_enGB
 * @property string|null $Name_Lang_koKR
 * @property string|null $Name_Lang_frFR
 * @property string|null $Name_Lang_deDE
 * @property string|null $Name_Lang_enCN
 * @property string|null $Name_Lang_zhCN
 * @property string|null $Name_Lang_enTW
 * @property string|null $Name_Lang_zhTW
 * @property string|null $Name_Lang_esES
 * @property string|null $Name_Lang_esMX
 * @property string|null $Name_Lang_ruRU
 * @property string|null $Name_Lang_ptPT
 * @property string|null $Name_Lang_ptBR
 * @property string|null $Name_Lang_itIT
 * @property string|null $Name_Lang_Unk
 * @property int $Name_Lang_Mask
 * @property int $SpellIconID
 * @property int $RaceMask
 * @property int $ClassMask
 * @property int $PetTalentMask
 * @property int $OrderIndex
 * @property string|null $BackgroundFile
 */
class TalentTabDbc extends DbcActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'talenttab_dbc';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID'], 'required'],
            [['ID', 'Name_Lang_Mask', 'SpellIconID', 'RaceMask', 'ClassMask', 'PetTalentMask', 'OrderIndex'], 'integer'],
            [['Name_Lang_enUS', 'Name_Lang_enGB', 'Name_Lang_koKR', 'Name_Lang_frFR', 'Name_Lang_deDE', 'Name_Lang_enCN', 'Name_Lang_zhCN', 'Name_Lang_enTW', 'Name_Lang_zhTW', 'Name_Lang_esES', 'Name_Lang_esMX', 'Name_Lang_ruRU', 'Name_Lang_ptPT', 'Name_Lang_ptBR', 'Name_Lang_itIT', 'Name_Lang_Unk', 'BackgroundFile'], 'string', 'max' => 100],
            [['ID'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Name_Lang_enUS' => 'Name Lang En Us',
            'Name_Lang_enGB' => 'Name Lang En Gb',
            'Name_Lang_koKR' => 'Name Lang Ko Kr',
            'Name_Lang_frFR' => 'Name Lang Fr Fr',
            'Name_Lang_deDE' => 'Name Lang De De',
            'Name_Lang_enCN' => 'Name Lang En Cn',
            'Name_Lang_zhCN' => 'Name Lang Zh Cn',
            'Name_Lang_enTW' => 'Name Lang En Tw',
            'Name_Lang_zhTW' => 'Name Lang Zh Tw',
            'Name_Lang_esES' => 'Name Lang Es Es',
            'Name_Lang_esMX' => 'Name Lang Es Mx',
            'Name_Lang_ruRU' => 'Name Lang Ru Ru',
            'Name_Lang_ptPT' => 'Name Lang Pt Pt',
            'Name_Lang_ptBR' => 'Name Lang Pt Br',
            'Name_Lang_itIT' => 'Name Lang It It',
            'Name_Lang_Unk' => 'Name Lang Unk',
            'Name_Lang_Mask' => 'Name Lang Mask',
            'SpellIconID' => 'Spell Icon ID',
            'RaceMask' => 'Race Mask',
            'ClassMask' => 'Class Mask',
            'PetTalentMask' => 'Pet Talent Mask',
            'OrderIndex' => 'Order Index',
            'BackgroundFile' => 'Background File',
        ];
    }

    /**
     * @inheritdoc
     */
    protected function mapImportedDbcValues(array $values)
    {
        $data = parent::mapImportedDbcValues($values);
        // TODO: fix data for TalentTab.dbc
        return $data;
    }
    /**
     * {@inheritdoc}
     * @return TalentTabDbcQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TalentTabDbcQuery(get_called_class());
    }
}
