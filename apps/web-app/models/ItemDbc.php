<?php

namespace app\models;

use app\models\base\DbcActiveRecord;
use Yii;

/**
 * This is the model class for table "item_dbc".
 *
 * @property int $ID
 * @property int $ClassID
 * @property int $SubclassID
 * @property int $Sound_Override_Subclassid
 * @property int $Material
 * @property int $DisplayInfoID
 * @property int $InventoryType
 * @property int $SheatheType
 */
class ItemDbc extends DbcActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'item_dbc';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID'], 'required'],
            [['ID', 'ClassID', 'SubclassID', 'Sound_Override_Subclassid', 'Material', 'DisplayInfoID', 'InventoryType', 'SheatheType'], 'integer'],
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
            'ClassID' => 'Class ID',
            'SubclassID' => 'Subclass ID',
            'Sound_Override_Subclassid' => 'Sound Override Subclassid',
            'Material' => 'Material',
            'DisplayInfoID' => 'Display Info ID',
            'InventoryType' => 'Inventory Type',
            'SheatheType' => 'Sheathe Type',
        ];
    }

    /**
     * {@inheritdoc}
     * @return ItemDbcQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ItemDbcQuery(get_called_class());
    }
}
