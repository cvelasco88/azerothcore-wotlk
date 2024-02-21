<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[SpellDbc]].
 *
 * @see SpellDbc
 */
class SpellDbcQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return SpellDbc[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return SpellDbc|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
