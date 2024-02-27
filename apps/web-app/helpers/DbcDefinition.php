<?php

namespace app\helpers;
use app\models\ItemDbc;
use app\models\SpellDbc;
use app\models\TalentDbc;
use app\models\TalentTabDbc;

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
            case "TalentTab.dbc":
            case "OldTalentTab.dbc":
                return TalentTabDbc::class;
            default:
                return false;
        }
    }

    /**
     * @param string $targetClass
     * @return string FileName
     * @throws \Exception
     */
    public static function getFileName(string $targetClass)
    {
        switch ($targetClass) {
            case ItemDbc::class:
                return "Item.dbc";
            case SpellDbc::class:
                return "Spell.dbc";
            case TalentDbc::class:
                return "Talent.dbc";
            case TalentTabDbc::class:
                return "TalentTab.dbc";
            default:
                throw new \Exception("Definition not found for {$targetClass}");
        }
    }

}