<?php

namespace app\helpers;

/**
 * You can use these constants in your code like this:
 * 
 * $key = 'NameSubtext_Lang_enUS';
 * $language = substr($key, strlen('NameSubtext_Lang_'));
 * if (defined('Languages::' . $language)) {
 *     $languageConstant = constant('Languages::' . $language);
 *     echo $languageConstant; // Outputs 'enUS'
 * } else {
 *     echo "Language not found";
 * }
 */
class DbcLanguage {
    const EN_US = 'enUS';
    const EN_GB = 'enGB';
    const KO_KR = 'koKR';
    const FR_FR = 'frFR';
    const DE_DE = 'deDE';
    const EN_CN = 'enCN';
    const ZH_CN = 'zhCN';
    const EN_TW = 'enTW';
    const ZH_TW = 'zhTW';
    const ES_ES = 'esES';
    const ES_MX = 'esMX';
    const RU_RU = 'ruRU';
    const PT_PT = 'ptPT';
    const PT_BR = 'ptBR';
    const IT_IT = 'itIT';
    const UNK = 'Unk';
}