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


    /**
     * Get all constants defined in the DbcLanguage class.
     *
     * @return array An associative array of constant names and their values
     */
    public static function getLanguages() {
        return [
            self::EN_US => 'English (United States)',
            self::EN_GB => 'English (United Kingdom)',
            self::KO_KR => 'Korean (South Korea)',
            self::FR_FR => 'French (France)',
            self::DE_DE => 'German (Germany)',
            self::EN_CN => 'English (China)',
            self::ZH_CN => 'Chinese (Simplified, China)',
            self::EN_TW => 'English (Taiwan)',
            self::ZH_TW => 'Chinese (Traditional, Taiwan)',
            self::ES_ES => 'Spanish (Spain)',
            self::ES_MX => 'Spanish (Mexico)',
            self::RU_RU => 'Russian (Russia)',
            self::PT_PT => 'Portuguese (Portugal)',
            self::PT_BR => 'Portuguese (Brazil)',
            self::IT_IT => 'Italian (Italy)',
            self::UNK => 'Unknown',
        ];
    }

    /**
     * Check if the given value is a valid language constant.
     *
     * @param string $value The value to check
     * @return bool Whether the value is a valid language constant
     */
    public static function isValidLanguage($value) {
        return in_array($value, array_keys(self::getLanguages()), true);
    }

    /**
     * Get language locale for the provided language constant.
     *
     * @param string $languageConstant The language constant (e.g., DbcLanguage::EN_US)
     * @return string|null The corresponding locale if found, otherwise null
     */
    public static function getLocale($languageConstant) {
        switch ($languageConstant) {
            case self::EN_US:
                return 'en_US';
            case self::EN_GB:
                return 'en_GB';
            case self::KO_KR:
                return 'ko_KR';
            case self::FR_FR:
                return 'fr_FR';
            case self::DE_DE:
                return 'de_DE';
            case self::EN_CN:
                return 'en_CN';
            case self::ZH_CN:
                return 'zh_CN';
            case self::EN_TW:
                return 'en_TW';
            case self::ZH_TW:
                return 'zh_TW';
            case self::ES_ES:
                return 'es_ES';
            case self::ES_MX:
                return 'es_MX';
            case self::RU_RU:
                return 'ru_RU';
            case self::PT_PT:
                return 'pt_PT';
            case self::PT_BR:
                return 'pt_BR';
            case self::IT_IT:
                return 'it_IT';
            default:
                return 'unk'; // Unknown or undefined language constant
        }
    }

    // Method to get the ISO from the constants
    public static function getISO($languageConstant) {
        switch ($languageConstant) {
            case self::EN_US:
                return 'en';
            case self::EN_GB:
                return 'en';
            case self::KO_KR:
                return 'ko';
            case self::FR_FR:
                return 'fr';
            case self::DE_DE:
                return 'de';
            case self::EN_CN:
                return 'en';
            case self::ZH_CN:
                return 'zh';
            case self::EN_TW:
                return 'en';
            case self::ZH_TW:
                return 'zh';
            case self::ES_ES:
                return 'es';
            case self::ES_MX:
                return 'es';
            case self::RU_RU:
                return 'ru';
            case self::PT_PT:
                return 'pt';
            case self::PT_BR:
                return 'pt';
            case self::IT_IT:
                return 'it';
            default:
                return 'unk'; // Unknown or undefined language constant
        }
    }

    // Method to get the language based on the locale
    public static function getLanguageFromLocale($locale) {
        switch ($locale) {
            case 'en_US':
                return self::EN_US;
            case 'en_GB':
                return self::EN_GB;
            case 'ko_KR':
                return self::KO_KR;
            case 'fr_FR':
                return self::FR_FR;
            case 'de_DE':
                return self::DE_DE;
            case 'en_CN':
                return self::EN_CN;
            case 'zh_CN':
                return self::ZH_CN;
            case 'en_TW':
                return self::EN_TW;
            case 'zh_TW':
                return self::ZH_TW;
            case 'es_ES':
                return self::ES_ES;
            case 'es_MX':
                return self::ES_MX;
            case 'ru_RU':
                return self::RU_RU;
            case 'pt_PT':
                return self::PT_PT;
            case 'pt_BR':
                return self::PT_BR;
            case 'it_IT':
                return self::IT_IT;
            default:
                return self::UNK; // Unknown locale
        }
    }

    // Method to get the language based on the ISO language code
    public static function getLanguageFromISO($iso) {
        switch ($iso) {
            case 'en':
                return self::EN_US; // Assuming EN_US is the default for English
            case 'ko':
                return self::KO_KR; // Assuming KO_KR is the default for Korean
            case 'fr':
                return self::FR_FR; // Assuming FR_FR is the default for French
            case 'de':
                return self::DE_DE; // Assuming DE_DE is the default for German
            case 'zh':
                return self::ZH_CN; // Assuming ZH_CN is the default for Chinese
            case 'es':
                return self::ES_ES; // Assuming ES_ES is the default for Spanish
            case 'ru':
                return self::RU_RU; // Assuming RU_RU is the default for Russian
            case 'pt':
                return self::PT_PT; // Assuming PT_PT is the default for Portuguese
            case 'it':
                return self::IT_IT; // Assuming IT_IT is the default for Italian
            default:
                return self::UNK; // Unknown ISO language code
        }
    }

    /**
     * Get language name for the provided language constant.
     *
     * @param string $languageConstant The language constant (e.g., DbcLanguage::EN_US)
     * @return string|null The corresponding language name if found, otherwise null
     */
    public static function getLanguageName($languageConstant) {
        $langs = self::getLanguages();
        if(array_key_exists($languageConstant, $langs)) {
            return $langs[$languageConstant];
        }
        return null; // Unknown or undefined language constant
    }
}