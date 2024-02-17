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
                return TalentTabDbc::class;
            default:
                throw new \Exception("Definition not found for {$filename}");
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
                return "Item.dbc.out";
            case SpellDbc::class:
                return "Spell.dbc.out";
            case TalentDbc::class:
                return "Talent.dbc.out";
            case TalentTabDbc::class:
                return "TalentTab.dbc.out";
            default:
                throw new \Exception("Definition not found for {$targetClass}");
        }
    }

}