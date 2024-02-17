<?php

namespace app\models\base;

use Yii;

/**
 */
abstract class DbcActiveRecord extends \yii\db\ActiveRecord
{

    public function getDefinition(string $language)
    {
        $columnDefinitions = [];
        $tableSchema = $this->getTableSchema();

        foreach ($this->attributes() as $attribute) {
            // Get the column schema
            $columnSchema = $tableSchema->getColumn($attribute);

            // Determine the type of the attribute
            $columnType = $columnSchema->type;

            // Check if the column is unsigned
            $isUnsigned = stripos($columnSchema->dbType, 'unsigned') !== false;

            // Add column type to the definitions array
            $columnDefinitions[$attribute] = [
                'type' => $columnType,
                'unsigned' => $isUnsigned,
            ];
        }

        return $columnDefinitions;
    }


    /**
     * @param array $values
     */
    public function importFromDbc(array $values, array $definition)
    {
        $data = $this->mapImportedDbcValues($values, $definition);
        $this->load($data, '');
    }

    /**
     * @return array // values
     */
    public function exportToDbc(array $definition)
    {
        $data = $this->toArray();
        return $this->mapExportedDbcValues($data, $definition);
    }

    /**
     * @param array $values
     */
    protected function mapImportedDbcValues(array $values, array $definition)
    {
        // Get all properties of the target class
        $properties = array_keys($definition);

        $data = [];
        foreach ($properties as $position => $propertyName) {
            if ($position < count($values)) {
                // Set the value to the property of the target object
                $data[$propertyName] = $values[$position];
            }
        }
        return $data;
    }

    /**
     * @param array $data
     * @return array // values
     */
    protected function mapExportedDbcValues(array $data, $definition)
    {
        // Get all properties of the target class
        $properties = array_keys($definition);

        $values = [];
        foreach ($properties as $propertyName) {
            // Set the value from the property of the target object

            // TODO: test if to use "??" or "?:" 
            // TODO: maybe is better to replace "null" by zero
            $values[] = $data[$propertyName] ?? null;
        }
        return $values;
    }
}
