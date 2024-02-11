<?php

namespace app\models;

use app\models\base\DbcActiveRecord;
use Yii;

/**
 * This is the model class for table "talent_dbc".
 *
 * @property int $ID
 * @property int $TabID
 * @property int $TierID
 * @property int $ColumnIndex
 * @property int $SpellRank_1
 * @property int $SpellRank_2
 * @property int $SpellRank_3
 * @property int $SpellRank_4
 * @property int $SpellRank_5
 * @property int $SpellRank_6
 * @property int $SpellRank_7
 * @property int $SpellRank_8
 * @property int $SpellRank_9
 * @property int $PrereqTalent_1
 * @property int $PrereqTalent_2
 * @property int $PrereqTalent_3
 * @property int $PrereqRank_1
 * @property int $PrereqRank_2
 * @property int $PrereqRank_3
 * @property int $Flags
 * @property int $RequiredSpellID
 * @property int $CategoryMask_1
 * @property int $CategoryMask_2
 */
class TalentDbc extends DbcActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'talent_dbc';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID'], 'required'],
            [['ID', 'TabID', 'TierID', 'ColumnIndex', 'SpellRank_1', 'SpellRank_2', 'SpellRank_3', 'SpellRank_4', 'SpellRank_5', 'SpellRank_6', 'SpellRank_7', 'SpellRank_8', 'SpellRank_9', 'PrereqTalent_1', 'PrereqTalent_2', 'PrereqTalent_3', 'PrereqRank_1', 'PrereqRank_2', 'PrereqRank_3', 'Flags', 'RequiredSpellID', 'CategoryMask_1', 'CategoryMask_2'], 'integer'],
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
            'TabID' => 'Tab ID',
            'TierID' => 'Tier ID',
            'ColumnIndex' => 'Column Index',
            'SpellRank_1' => 'Spell Rank 1',
            'SpellRank_2' => 'Spell Rank 2',
            'SpellRank_3' => 'Spell Rank 3',
            'SpellRank_4' => 'Spell Rank 4',
            'SpellRank_5' => 'Spell Rank 5',
            'SpellRank_6' => 'Spell Rank 6',
            'SpellRank_7' => 'Spell Rank 7',
            'SpellRank_8' => 'Spell Rank 8',
            'SpellRank_9' => 'Spell Rank 9',
            'PrereqTalent_1' => 'Prereq Talent 1',
            'PrereqTalent_2' => 'Prereq Talent 2',
            'PrereqTalent_3' => 'Prereq Talent 3',
            'PrereqRank_1' => 'Prereq Rank 1',
            'PrereqRank_2' => 'Prereq Rank 2',
            'PrereqRank_3' => 'Prereq Rank 3',
            'Flags' => 'Flags',
            'RequiredSpellID' => 'Required Spell ID',
            'CategoryMask_1' => 'Category Mask 1',
            'CategoryMask_2' => 'Category Mask 2',
        ];
    }

    /**
     * {@inheritdoc}
     * @return TalentDbcQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TalentDbcQuery(get_called_class());
    }
}
