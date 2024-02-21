<?php

namespace app\models\traits\common;

trait LangTrait
{
    const LANG_EN_US = 0x00000001; // English (US)
    const LANG_EN_GB = 0x00000002; // English (GB)
    const LANG_KO_KR = 0x00000004; // Korean
    const LANG_FR_FR = 0x00000008; // French (France)
    const LANG_DE_DE = 0x00000010; // German (Germany)
    const LANG_EN_CN = 0x00000020; // English (CN)
    const LANG_ZH_CN = 0x00000040; // Chinese (CN)
    const LANG_EN_TW = 0x00000080; // English (TW)
    const LANG_ZH_TW = 0x00000100; // Chinese (TW)
    const LANG_ES_ES = 0x00000200; // Spanish (Spain)
    const LANG_ES_MX = 0x00000400; // Spanish (Mexico)
    const LANG_RU_RU = 0x00000800; // Russian
    const LANG_PT_PT = 0x00001000; // Portuguese (Portugal)
    const LANG_PT_BR = 0x00002000; // Portuguese (Brazil)
    const LANG_IT_IT = 0x00004000; // Italian
    const LANG_UNK = 0x00008000; // Unknown

    /**
     * Get the list of language options with their values.
     *
     * @return array
     */
    public static function getLanguageOptions()
    {
        return [
            self::LANG_EN_US => 'English (US)',
            self::LANG_EN_GB => 'English (GB)',
            self::LANG_KO_KR => 'Korean',
            self::LANG_FR_FR => 'French (France)',
            self::LANG_DE_DE => 'German (Germany)',
            self::LANG_EN_CN => 'English (CN)',
            self::LANG_ZH_CN => 'Chinese (CN)',
            self::LANG_EN_TW => 'English (TW)',
            self::LANG_ZH_TW => 'Chinese (TW)',
            self::LANG_ES_ES => 'Spanish (Spain)',
            self::LANG_ES_MX => 'Spanish (Mexico)',
            self::LANG_RU_RU => 'Russian',
            self::LANG_PT_PT => 'Portuguese (Portugal)',
            self::LANG_PT_BR => 'Portuguese (Brazil)',
            self::LANG_IT_IT => 'Italian',
            self::LANG_UNK => 'Unknown',
        ];
    }

    /**
     * Get the languages included in the mask.
     *
     * @param int $mask
     * @return array
     */
    public static function getLanguagesFromMask($mask)
    {
        $languages = [];
        $languageOptions = self::getLanguageOptions();

        foreach ($languageOptions as $value => $language) {
            if ($mask & $value) {
                $languages[] = $language;
            }
        }

        return $languages;
    }
}
