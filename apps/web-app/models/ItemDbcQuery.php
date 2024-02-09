<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[ItemDbc]].
 *
 * @see ItemDbc
 */
class ItemDbcQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return ItemDbc[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return ItemDbc|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
