<?php

namespace app\helpers;

use yii\data\ArrayDataProvider;


class DbcArrayDataProvider extends ArrayDataProvider
{
    protected function prepareModels()
    {
        /** @var DbcRecord[] $records */
        $records = parent::prepareModels();
        $models = array_map(function ($record) {
            return $record->value();
        }, $records);
        return $models;
    }
}
