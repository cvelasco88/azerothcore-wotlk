<?php
namespace app\components;

use app\helpers\DbcLanguage;
use yii\base\BootstrapInterface;
use yii\web\Cookie;
use yii\base\Exception;

class LanguageSelector implements BootstrapInterface
{
    public $supportedLanguages = [];


    public function __construct() {
        $this->supportedLanguages = array_map(fn($ln) => DbcLanguage::getLocale($ln), array_keys(DbcLanguage::getLanguages()));
    }

    public function bootstrap($app)
    {
        $cookies = $app->response->cookies;
        $languageNew = $app->request->get('language');


        if($languageNew !== null)
        {
            if (!in_array($languageNew, $this->supportedLanguages)) {
                throw new Exception('Invalid your selected language.');
            }

                $cookies->add(new Cookie([
                    'name' => 'language',
                    'value' => $languageNew,
                    'expire' => time() + 60 * 60 * 24 * 30, // 30 days
                ]));
                $app->language = $languageNew;
                //echo 'test1';

        }
        else
        {

            $preferedLanguage = isset($app->request->cookies['language']) ? (string) $app->request->cookies['language'] : null;

            if(empty($preferedLanguage))
            {
                $preferedLanguage = $app->request->getPreferredLanguage($this->supportedLanguages);
            }
            $app->language = $preferedLanguage;
        }
    }
}
