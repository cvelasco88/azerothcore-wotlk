<?php

namespace app\helpers;
use app\models\ItemDbc;
use app\models\SpellDbc;
use app\models\TalentDbc;

/**
 */
class DbcDefinition
{
    
    /**
     * @param string $filename
     * @return string Target Class
     * @throws \Exception
     */
    public static function getTargetClass(string $filename)
    {
        switch ($filename) {
            case "Item.dbc":
                return ItemDbc::class;
            case "Spell.dbc":
                return SpellDbc::class;
            case "Talent.dbc":
                return TalentDbc::class;
            default:
                throw new \Exception("Definition not found for {$filename}");
        }
    }

}