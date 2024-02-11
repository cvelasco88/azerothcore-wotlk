<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[TalentTabDbc]].
 *
 * @see TalentTabDbc
 */
class TalentTabDbcQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return TalentTabDbc[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return TalentTabDbc|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
