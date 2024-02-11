<?php

namespace app\models\base;

use Yii;

/**
 */
abstract class DbcActiveRecord extends \yii\db\ActiveRecord
{

    /**
     * @return array
     */
    public function getDefinition()
    {
        $columnTypes = [];
        foreach ($this->attributes() as $attribute) {
            // Determine the type of the attribute
            $columnType = $this->getTableSchema()->getColumn($attribute)->type;
            $columnTypes[] = $columnType;
        }
        return $columnTypes;
    }

    /**
     * @param array $values
     */
    public function importFromDbc(array $values)
    {
        $data = $this->mapImportedDbcValues($values);
        $this->load($data);
    }

    /**
     * @return array // values
     */
    public function exportToDbc()
    {
        $data = $this->toArray();
        return $this->mapExportedDbcValues($data);
    }

    /**
     * @param array $values
     */
    protected function mapImportedDbcValues(array $values)
    {
        return $this->mapDbcValuesV1($values);
    }

    /**
     * @param array $data
     * @return array // values
     */
    protected function mapExportedDbcValues(array $data)
    {
        return array_values($data);
    }

    /**
     * @param array $values
     */
    private function mapDbcValuesV1(array $values)
    {
        // Get all properties of the target class
        $properties = array_keys($this->getAttributes());

        $data = [];
        foreach ($properties as $position => $property) {
            if ($position < count($values)) {
                // Get the property name
                $propertyName = $property;
                // Set the value to the property of the target object
                $data[$propertyName] = $values[$position];
            }
        }
        return $data;
    }

    /**
     * @param array $values
     */
    private function mapDbcValuesV2(array $values)
    {
        $reflectionClass = new \ReflectionClass(get_class($this));
        // Get all properties of the target class
        $properties = $reflectionClass->getProperties();

        $data = [];
        foreach ($properties as $position => $property) {
            // Get the property name
            $propertyName = $property->getName();
            // Set the value to the property of the target object
            $data[$propertyName] = $values[$position];
        }
        return $data;
    }
}
