<?php

namespace app\models;

use app\models\base\DbcActiveRecord;
use app\models\traits\common\ClassMaskTrait;
use app\models\traits\common\RaceMaskTrait;
use Yii;

/**
 * This is the model class for table "playercreateinfo_skills".
 *
 * @property int $raceMask
 * @property int $classMask
 * @property int $skill
 * @property int $rank
 * @property string|null $comment
 */
class PlayerCreateInfoSkill extends DbcActiveRecord
{
    use ClassMaskTrait, RaceMaskTrait;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'playercreateinfo_skills';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['raceMask', 'classMask', 'skill'], 'required'],
            [['raceMask', 'classMask', 'skill', 'rank'], 'integer'],
            [['comment'], 'string', 'max' => 255],
            [['raceMask', 'classMask', 'skill'], 'unique', 'targetAttribute' => ['raceMask', 'classMask', 'skill']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'raceMask' => 'Race Mask',
            'classMask' => 'Class Mask',
            'skill' => 'Skill',
            'rank' => 'Rank',
            'comment' => 'Comment',
        ];
    }
}
