<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[TalentDbc]].
 *
 * @see TalentDbc
 */
class TalentDbcQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return TalentDbc[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return TalentDbc|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
